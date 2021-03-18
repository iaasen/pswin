<?php
/**
 * User: ingvar
 * Date: 18.03.2021
 * Time: 15.11
 */

namespace Iaasen\Pswin;


use Iaasen\Pswin\Model\SmsMessage;
use Iaasen\Pswin\Model\SmsReport;

interface PswinClientInterface
{
	public function sendSingleMessage(SmsMessage $message) : SmsReport;

	/**
	 * @param SmsMessage[] $messages
	 * @return SmsReport[]
	 */
	public function sendMessages(array $messages) : array;
}