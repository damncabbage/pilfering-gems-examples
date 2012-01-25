# SillyPrint: PHP

## Environment

This guide assumes you have at least PHP 5.3+ in order to use namespaces.


## Running the Example

Grab a copy of this repo with the following:

```
$ git clone git://github.com/damncabbage/pilfering-gems-examples.git
$ cd pilfering-gems-examples/silly_print/php
```

From within that directory, you can run the example with:

```
bin/silly_print "I am a cow."
```

If all has gone well, you'll get your message printed back to you, and underneath it, a picture of an ASCII Art cow.

To ask SillyPrint the `elephant` plugin, use:

```
bin/silly_print "I am not." elephant
```

## Poking Around

The printers themselves are under `lib/SillyPrint/Printers`, and the "external" plugins are loaded from `lib/plugins`. The function that does the dynamic class lookup is in `lib/SillyPrint.php`.
