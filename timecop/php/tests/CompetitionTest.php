<?php
require_once dirname(__FILE__).'/../lib/Competition.php';
require_once dirname(__FILE__).'/../lib/Entry.php';
require_once dirname(__FILE__).'/support/Timecop.php';

class CompetitionTest extends PHPUnit_Framework_TestCase
{
	const DAY_IN_SECONDS = 86400;

	protected $competition;

	// Runs before each test
	public function setUp() {
		// Opens a day from now, closes a day after that.
		$this->competition = new Competition($opens = strtotime('+1 day'), $closes = strtotime('+2 day'));
		Timecop::warpTime(); // Setup
	}

	public function testEarlyEntry() {
		$entry = $this->competition->enter(array('name' => 'Bert'));
		$this->assertFalse($entry->isValid());
		$this->assertContains("Too early!", $entry->errors);
	}

	public function testTimelyEntry() {
		// Jump a day and a half from now.
		Timecop::travel(time() + self::DAY_IN_SECONDS * 1.5);
		$entry = $this->competition->enter(array('name' => 'Sam'));
		$this->assertTrue($entry->isValid());
	}

	public function testLateEntry() {
		// Jump three days from now.
		Timecop::travel(time() + self::DAY_IN_SECONDS * 3);
		$entry = $this->competition->enter(array('name' => 'Frank'));
		$this->assertFalse($entry->isValid());
		$this->assertContains("Too late!", $entry->errors);
	}

	// Runs after each test
	public function tearDown() {
		// Always make sure we're back in the present.
		Timecop::unwarpTime();
	}
}
