<?php
App::uses('Memo', 'Model');

/**
 * Memo Test Case
 *
 */
class MemoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.memo',
		'app.seller'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Memo = ClassRegistry::init('Memo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Memo);

		parent::tearDown();
	}

}
