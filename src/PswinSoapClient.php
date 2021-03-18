<?php

namespace Iaasen\Pswin;


use Iaasen\Pswin\Model\SmsMessage;
use Iaasen\Pswin\Model\SmsReport;
use Iaasen\Pswin\Soap\PswinClient;
use Iaasen\Pswin\Soap\PswinClientFactory;
use Iaasen\Pswin\Soap\Type\SendMessages;
use Iaasen\Pswin\Soap\Type\SendSingleMessage;
use Iaasen\Pswin\Soap\Type\SMSMessage AS SoapSMSMessage;


/**
 * Documentation: https://wiki.pswin.com/Gateway-WebService-SOAP-Interface.ashx
 */
class PswinSoapClient implements PswinClientInterface
{
	/** @var string  */
	private $username;
	/** @var string */
	private $password;
	/** @var string */
	protected $host;
	/** @var PswinClient */
	protected $soapClient;

	public function __construct(string $username, string $password, ?string $wsdl = 'http://soap.pswin.com/?wsdl')
	{
		$this->soapClient = PswinClientFactory::factory($wsdl);
		$this->username = $username;
		$this->password = $password;
	}


	public function sendSingleMessage(SmsMessage $message) : SmsReport {
		$response = $this->soapClient->sendSingleMessage(new SendSingleMessage(
			$this->username,
			$this->password,
			(new SoapSMSMessage())
				->withSenderNumber($message->sender)
				->withReceiverNumber($message->receiver)
				->withText($message->text)
		));

		$response = $response->getSendSingleMessageResult();
		return new SmsReport([
			'id' => $message->id,
			'receiver' => $message->receiver,
			'status' => $response->getCode(),
			'info' => $response->getDescription(),
			'ref' => $response->getReference(),
			'sent' => $response->getCode() === 200,
		]);
	}


	/**
	 * @param SmsMessage[] $messages
	 * @return SmsReport[]
	 */
	public function sendMessages(array $messages) : array {
		$messages = array_values($messages);

		$soapMessages = [];
		foreach($messages AS $message) {
			$soapMessages[] = (new SoapSMSMessage())
				->withSenderNumber($message->sender)
				->withReceiverNumber($message->receiver)
				->withText($message->text);
		}

		$response = $this->soapClient->sendMessages(new SendMessages(
			$this->username,
			$this->password,
			$soapMessages
		));

		$reports = [];
		foreach($response->getSendMessagesResult()->getReturnValue() AS $key => $value) {
			$reports[] = new SmsReport([
				'id' => $messages[$key]->id,
				'receiver' => $messages[$key]->receiver,
				'status' => $value->getCode(),
				'info' => $value->getDescription(),
				'ref' => $value->getReference(),
				'sent' => $value->getCode() === 200,
			]);
		}
		return $reports;
	}

}