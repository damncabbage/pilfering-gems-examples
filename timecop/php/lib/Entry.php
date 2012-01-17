<?php

class Entry
{
	public $errors = Array();
	public $details = Array();
	protected $enteredAt;
	protected $valid;

	public function __construct($valid, $details=Array(), $errors=Array(), $enteredAt=null)
	{
		if (is_null($enteredAt)) $enteredAt = time();
		$this->enteredAt = $enteredAt;

		$this->valid = (boolean) $valid;
		$this->details = $details;
		$this->errors = $errors;
	}

	public function isValid()
	{
		return $this->valid;
	}

	public function getEntryDate()
	{
		return $this->enteredAt;
	}
}
