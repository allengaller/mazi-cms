<?php
App::uses('AccountsAdmin', 'Model');

/**
 * AccountsAdmin Test Case
 *
 */
class AccountsAdminTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.accounts_admin',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccountsAdmin = ClassRegistry::init('AccountsAdmin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccountsAdmin);

		parent::tearDown();
	}

}
