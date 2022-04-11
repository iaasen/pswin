<?php

namespace Iaasen\Pswin\Model;


class SmsMessage
{
	/** @var int|string */
	public $id;
	/** @var string */
	public $text;
	/** @var string */
	public $receiver;
	/**
	 * Sender name can be maximum 11 characters or 16 digits
	 * @var string|int
	 */
	public $sender;


	public function __construct(array $data)
	{
		foreach($data AS $key => $value) {
			$this->$key = $value ?? null;
		}
	}


	public static function sanitizeNumber(string $phoneNumber) : string {
		$number = str_replace([' '], [''], $phoneNumber);
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