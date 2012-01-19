<?php

namespace SillyPrint;

function printMessage($message, $printer="cow")
{
	$printerClass = '\\SillyPrint\\Printers\\'.ucwords($printer);
	if (!class_exists($printerClass)) {
		throw new \Exception("Invalid printer");
	}

	$printer = new $printerClass;
	$printer->printMessage($message);
}
