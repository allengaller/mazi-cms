<?php
App::uses('Cate', 'Model');

/**
 * Cate Test Case
 *
 */
class CateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cate = ClassRegistry::init('Cate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cate);

		parent::tearDown();
	}

}
