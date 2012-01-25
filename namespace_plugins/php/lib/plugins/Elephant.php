<?php

namespace SillyPrint\Printers;

class Elephant extends Base
{
	function format($message)
	{
		return <<<ASCII
$message
     \     /\  ___  /\
      \   // \/   \/ \\
         ((    O O    ))
          \\ /     \ //
           \/  | |  \/
            |  | |  |
            |  | |  |
            |   o   |
            | |   | |
            |m|   |m|

ASCII;
	}
}
