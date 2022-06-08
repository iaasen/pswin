<?php

namespace Iaasen\Pswin\Model;


use Laminas\Stdlib\ArraySerializableInterface;

class SmsReport implements ArraySerializableInterface
{
	public string $id;
	public string $receiver;
	public string $status;
	public string $info = '';
	public string $ref;
	public bool $sent = false;


	public function __construct(array $data)
	{
		foreach($data AS $key => $value) {
			$this->$key = $value ?? null;
		}
	}


	public function isSent() : bool {
		return in_array($this->status, ['OK']);
	}


	public function getArrayCopy() {
		return [
			'id' => $this->id,
			'receiver' => $this->receiver,
			'status' => $this->status,
			'info' => $this->info,
			'ref' => $this->ref,
			'sent' => $this->sent,
		];
	}


	public function exchangeArray(array $array)
	{
		foreach($array AS $key => $value) {
			if(property_exists($this, $key)) $this->$key = $value;
		}
	}
}