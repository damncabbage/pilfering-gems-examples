<?php

class Competition
{
	protected $open;
	protected $close;

	public function __construct($open, $close)
	{
		$this->open = $open;
		$this->close = $close;
		if ($close < $open) {
			throw new Exception("Competition closes before it opens");
		}
	}

	public function enter($details=Array())
	{
		$enteredAt = time();
		$valid = $this->isTimely($enteredAt);

		$errors = array();
		if ($this->isTooEarly($enteredAt)) $errors[] = "Too early!";
		if ($this->isTooLate($enteredAt))  $errors[] = "Too late!";

		$entry = new Entry($valid, $details, $errors, $enteredAt);
		if ($valid) {
			$this->entries[] = $entry;
		}

		return $entry;
	}

	protected function isTimely($time)
	{
		return (!$this->isTooEarly($time) && !$this->isTooLate($time));
	}

	protected function isTooEarly($time)
	{
		return ($time < $this->open);
	}

	protected function isTooLate($time)
	{
		return ($time > $this->close);
	}
}
