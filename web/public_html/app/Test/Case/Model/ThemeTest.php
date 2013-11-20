<?php
App::uses('Theme', 'Model');

/**
 * Theme Test Case
 *
 */
class ThemeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.theme'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Theme = ClassRegistry::init('Theme');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Theme);

		parent::tearDown();
	}

}
