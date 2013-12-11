<?php
/**
 * AccountsAdminFixture
 *
 */
class AccountsAdminFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'accounts_admin';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Group ID'),
		'account' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => 'Account Name', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => 'Password', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Each role have one permission sets.', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => 'Name', 'charset' => 'utf8'),
		'gender' => array('type' => 'integer', 'null' => true, 'default' => '1', 'length' => 4, 'comment' => '1:Male,2:Female'),
		'mobile' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 11, 'comment' => 'Mobile Phone'),
		'email' => array('type' => 'string', 'null' => true, 'length' => 64, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'remark' => array('type' => 'string', 'null' => true, 'length' => 125, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'comment' => '1:Normal,2:Disable,3:Delete.'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'email' => array('column' => 'email', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'group_id' => 1,
			'account' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'role' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'gender' => 1,
			'mobile' => '',
			'email' => 'Lorem ipsum dolor sit amet',
			'remark' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'created' => '2013-11-20 15:13:17',
			'modified' => '2013-11-20 15:13:17'
		),
	);

}
