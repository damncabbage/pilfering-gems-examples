<?php

namespace SillyPrint\Printers;

abstract class Base
{
	public function printMessage($message)
	{
		echo $this->format($message);
	}

	// Provided by each printer class.
	abstract function format($message);
}
