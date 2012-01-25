# Timecop: Ruby

## Environment

Set up your local environment with Ruby; 1.8.7 is fine, but 1.9+ is preferred.

To find out if you have Ruby, run `ruby -v` in a console; if you get a result back, you're fine. If not, you either need to [http://beginrescueend.com/rvm/install/](install RVM), or just `apt-get install ruby` if you're feeling lazy. (OS X has Ruby 1.8.7 by default. I can't help you if you're running Windows, sorry, but you should maybe try [RubyInstaller](http://rubyinstaller.org/).)


## Running the Example

Grab a copy of this repo with the following:

```
$ git clone git://github.com/damncabbage/pilfering-gems-examples.git
$ cd pilfering-gems-examples/silly_print/ruby
```

From within that directory, you can run the example with:

```
bin/silly_print "I am a cow."
```

If all has gone well, you'll get your message printed back to you, and underneath it, a picture of an ASCII Art cow.

To get SillyPrint to use the `elephant` plugin, use:

```
bin/silly_print "I am not." elephant
```

### Poking Around

The printers themselves are under `lib/silly_print/printers`, and the "external" plugins are loaded from `lib/plugins`. The method that does the dynamic class lookup is in `lib/silly_print.rb`.
