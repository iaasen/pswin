<?php
/**
 * User: ingvar
 * Date: 16.03.2021
 * Time: 12.53
 */

namespace Iaasen\Pswin;


use Iaasen\Pswin\Soap\PswinClientFactory;
use Iaasen\Pswin\Soap\Type\SendMessages;
use Iaasen\Pswin\Soap\Type\SendMessagesResponse;
use Iaasen\Pswin\Soap\Type\SendSingleMessage;
use Iaasen\Pswin\Soap\Type\SMSMessage;
use Iaasen\Pswin\Soap\Type\SendSingleMessageResponse;

class PswinSoapClient
{
	/** @var string  */
	private $username;
	/** @var string */
	private $password;
	/** @var string */
	protected $host;
	/** @var  */
	protected $soapClient;

	public function __construct(string $username, string $password)
	{
		$this->soapClient = PswinClientFactory::factory($config['wsdl'] ?? 'http://soap.pswin.com/?wsdl');
		$this->username = $username;
		$this->password = $password;
	}


	public function sendSingleMessage(SMSMessage $message) : SendSingleMessageResponse {
		return $this->soapClient->sendSingleMessage(new SendSingleMessage(
			$this->username,
			$this->password,
			$message
		));
	}


	/**
	 * @param SMSMessage[] $messages
	 * @return SendMessagesResponse
	 */
	public function sendMessages(array $messages) : SendMessagesResponse {
		return $this->soapClient->sendMessages(new SendMessages(
			$this->username,
			$this->password,
			$messages
		));
	}
}