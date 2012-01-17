# Timecop: Ruby

## Environment

Set up your local environment with Ruby; 1.8.7 is fine, but 1.9+ is preferred.

To find out if you have Ruby, run `ruby -v` in a console; if you get a result back, you're fine. If not, you either need to [http://beginrescueend.com/rvm/install/](install RVM), or just `apt-get install ruby` if you're feeling lazy. (OS X has Ruby 1.8.7 by default. I can't help you if you're running Windows, sorry, but you should maybe try [RubyInstaller](http://rubyinstaller.org/).)

## Libraries

Install [Bundler](http://gembundler.com), [RSpec](http://rspec.info) and [Timecop](https://github.com/jtrupiano/timecop) with the following commands:

```
$ gem install bundler
$ git clone git://github.com/damncabbage/pilfering-gems-examples.git
$ cd pilfering-gems-examples/timecop/ruby
$ bundle install  # Installs rspec and timecop for this example.
```

## Running the Test Cases

From within that same `pilfering-gems-examples/timecop/ruby` directory, run the specs:

```
$ bundle exec rspec spec
```

If all has gone well, you'll get a list of green examples looking something like:

```
Competition
  should reject early entries
  should accept timely entries
  should reject late entries

Finished in 0.00056 seconds
3 examples, 0 failures
```

### Poking Around

The test cases are in `spec/competition_specs.rb`. The `Competition` and `Entry` classes themselves are under `lib`.

If you're already learning Ruby, try writing a test case; a good one to try would be to make sure that you can't set up a competition date with an Close date earlier than an Open date. Google `should raise_error` if you get stuck trying to tell RSpec to expect an error.

Enjoy!
