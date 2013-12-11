<?php
App::uses('Tool', 'Model');

/**
 * Tool Test Case
 *
 */
class ToolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tool'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tool = ClassRegistry::init('Tool');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tool);

		parent::tearDown();
	}

}
