<?php
/**
 * CartFixture
 *
 */
class CartFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'session_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'uid' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pid' => array('type' => 'integer', 'null' => false, 'default' => null),
		'pcates' => array('type' => 'integer', 'null' => false, 'default' => null),
		'units' => array('type' => 'integer', 'null' => false, 'default' => null),
		'carts_time' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'session_id' => 1,
			'uid' => 1,
			'pid' => 1,
			'pcates' => 1,
			'units' => 1,
			'carts_time' => 1384960398
		),
	);

}
