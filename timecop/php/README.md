# Timecop: PHP

## Environment

This guide assumes you have some version of PHP already; you need at least version 5.3 in order to use [runkit](https://github.com/zenovich/runkit.git) (for overriding core PHP functions such as `date()`).

## Libraries

Follow the below instructions to get runkit set up; these instructions are aimed at those with a Debian/Ubuntu development box, but should work on Fedora/Centos and the like too:

```
$ git clone https://github.com/zenovich/runkit.git
$ cd runkit
$ sudo pecl install package.xml
  # If the above doesn't work, you need PEAR and the PECL tool.
  # On Debian/Ubuntu, use: sudo apt-get install php-pear php5-dev
$ sudo su -c 'echo -e "extension=runkit.so\nrunkit.internal_override=1" > /etc/php5/conf.d/runkit.ini'
```

And now PHPUnit, if you don't already have it:

```
$ sudo pear channel-update pear.php.net
$ sudo pear upgrade-all
$ sudo pear config-set auto_discover 1
$ sudo pear install pear.phpunit.de/PHPUnit
```

For convenience I've already grabbed a copy of Timecop-PHP and put it under `tests/support/`; view or download the whole library [here on GitHub](git://github.com/erikfercak/Timecop-PHP.git).

## Running the Test Cases

Grab a copy of this repo with the following:

```
$ git clone git://github.com/damncabbage/pilfering-gems-examples.git
$ cd pilfering-gems-examples/timecop/php
```

From within that directory, you can run the tests with:

```
phpunit tests/
```

If all has gone well, you'll get a run of dots looking something like:

```
PHPUnit 3.6.7 by Sebastian Bergmann.

...

Time: 0 seconds, Memory: 4.75Mb

OK (3 tests, 5 assertions)
```

## Poking Around

The test cases are in `tests/CompetitionTest.php`. The `Competition` and `Entry` classes themselves are under `lib`.

Enjoy!
