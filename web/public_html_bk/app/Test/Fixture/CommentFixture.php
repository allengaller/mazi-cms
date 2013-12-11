<?php
/**
 * CommentFixture
 *
 */
class CommentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'content' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => 'Content of comments', 'charset' => 'utf8'),
		'iid' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'comment' => 'Item ID'),
		'itype' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Item type'),
		'creator_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Comments creator ID'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rating' => array('type' => 'integer', 'null' => true, 'default' => null),
		'website' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'Website of Commentee', 'charset' => 'utf8'),
		'is_show' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Show in front pages'),
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
			'parent_id' => 1,
			'content' => 'Lorem ipsum dolor sit amet',
			'iid' => 1,
			'itype' => 1,
			'creator_id' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'rating' => 1,
			'website' => 'Lorem ipsum dolor sit amet',
			'is_show' => 1
		),
	);

}
