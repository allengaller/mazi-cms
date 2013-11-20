<?php
App::uses('AccountsUser', 'Model');

/**
 * AccountsUser Test Case
 *
 */
class AccountsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.accounts_user',
		'app.group',
		'app.follower',
		'app.followee'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccountsUser = ClassRegistry::init('AccountsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccountsUser);

		parent::tearDown();
	}

}
