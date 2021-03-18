<?php
/**
 * User: ingvar
 * Date: 18.03.2021
 * Time: 15.35
 */

namespace Iaasen\Pswin\Model;


use Nteb\ApiEntities\Exception\InvalidArgumentException;

class SmsMessage
{
	/** @var int|string */
	public $id;
	/** @var string */
	public $text;
	/** @var string */
	public $receiver;
	/** @var string */
	public $sender;


	public function __construct(array $data)
	{
		foreach($data AS $key => $value) {
			$this->$key = $value ?? null;
		}
	}


	public static function sanitizeNumber(string $phoneNumber) : string {
		$number = trim($phoneNumber);
		if(!strlen($number)) throw new \Exception('Empty string', 400);

		if(substr($number, 0, 1) == '+') {
			// Do nothing
		}
		elseif(substr($number, 0, 2) == '47' && strlen($number == 10)) {
			$number = '+' . $number;
		}
		elseif(substr($number, 0, 2) == '00') {
			$number = '+' . substr($number, 2);
		}
		else {
			$number = '+47' . $number;
		}
		return $number;
	}
}