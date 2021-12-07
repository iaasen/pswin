<?php

namespace Iaasen\Pswin;


use Iaasen\Pswin\Model\SmsMessage;
use Iaasen\Pswin\Model\SmsReport;
use Iaasen\Pswin\Xml\PswinXmlTransport;


/**
 * Response from server:
 *  <SESSION>
 *      <LOGON>OK</LOGON>
 *      <REASON />
 *      <MSGLST>
 *          <MSG>
 *              <ID>0</ID>
 *              <STATUS>OK</STATUS>
 *              <INFO></INFO>
 *              <REF>5d782e14-4e9b-48b5-a4f4-7863580afa30</REF>
 *          </MSG>
 *      </MSGLST>
 *  </SESSION>
 */
class PswinXmlClient implements PswinClientInterface
{
	/** @var  string */
	protected $username;
	/** @var  string */
	private $password;
	/** @var PswinXmlTransport */
	protected $transport;


	public function __construct(string $username, string $password, PswinXmlTransport $pswinXmlTransport = null)
	{
		$this->username = $username;
		$this->password = $password;
		$this->transport = $pswinXmlTransport ?? new PswinXmlTransport();
	}


	public function sendSingleMessage(SmsMessage $message): SmsReport
	{
		return array_pop($this->internalSend([$message]));
	}


	/**
	 * @param SmsMessage[] $messages
	 * @return SmsReport[]
	 */
	public function sendMessages(array $messages): array
	{
		return $this->internalSend($messages);
	}


	public function testConnection() : bool {
		$xmlString = $this->createXmlString([]);
		$xmlResponse = $this->transport->sendPostWithBody('/', $xmlString);
		$response = simplexml_load_string($xmlResponse);
		return $response->LOGON->__toString() == 'OK';
	}


	/**
	 * @param SmsMessage[] $messages
	 * @return SmsReport[]
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	protected function internalSend(array $messages) : array {
		$messages = array_values($messages);
		$xmlString = $this->createXmlString($messages);
		$xmlResponse = $this->transport->sendPostWithBody('/', $xmlString);

		$response = simplexml_load_string($xmlResponse);
		if($response->LOGON->__toString() !== 'OK') {
			throw new \Exception("Logon failure. Error message: " . $response->REASON,401);
		}

		$reports = [];
		$i = 0;
		$response;

		foreach($response->MSGLST->MSG AS $report) {
			$reports[] = new SmsReport([
				'id' => $report->ID->__toString(),
				'receiver' => $messages[$i]->receiver,
				'status' => $report->STATUS->__toString(),
				'info' => $report->INFO->__toString(),
				'ref' => $report->REF->__toString(),
				'sent' => ($report->STATUS->__toString() == 'OK'),
			]);
			$i++;
		}
		return $reports;
	}


	/**
	 * @param SmsMessage[] $messages
	 * @return string
	 */
	public function createXmlString(array $messages) : string
	{
		$x = new \XMLWriter();
		$x->openMemory();
		$x->startDocument('1.0', 'UTF-8');
		$x->startElement('SESSION');
			$x->startElement('CLIENT');
				$x->text($this->username);
			$x->endElement();
			$x->startElement('PW');
				$x->text($this->password);
			$x->endElement();
			$x->startElement('MSGLST');
				foreach($messages AS $message) {
					$x->startElement('MSG');
						$x->startElement('ID');
							$x->text($message->id);
						$x->endElement();
						$x->startElement('TEXT');
							$x->text($message->text);
						$x->endElement();
						$x->startElement('SND');
							$x->text($message->sender);
						$x->endElement();
						$x->startElement('RCV');
							$x->text($message->receiver);
						$x->endElement();
					$x->endElement();
				}
			$x->endElement();
		$x->endElement();
		return $x->outputMemory();
	}


}