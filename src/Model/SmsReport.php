<?php
/**
 * User: ingvar.aasen
 * Date: 06.10.2017
 * Time: 17:27
 */

namespace Iaasen\Pswin\Model;


class SmsReport
{
	/** @var  string */
	public $id;
	/** @var string */
	public $receiver;
	/** @var  string */
	public $status;
	/** @var  string */
	public $info;
	/** @var  string */
	public $ref;
	/** @var  bool */
	public $sent = false;


	public function __construct(array $data)
	{
		foreach($data AS $key => $value) {
			$this->$key = $value ?? null;
		}
	}


	public function isSent() : bool {
		return in_array($this->status, ['OK']);
	}

}