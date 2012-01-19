<?php

namespace SillyPrint\Printers;

class Cow extends Base
{
	function format($message)
	{
		return <<<ASCII
$message
      \   ^__^
       \  (oo)\_______
          (__)\       )\/\
              ||----w |
              ||     ||

ASCII;
	}
}
