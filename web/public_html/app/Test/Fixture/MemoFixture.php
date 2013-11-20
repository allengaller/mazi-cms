<?php
/**
 * MemoFixture
 *
 */
class MemoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'mid' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Memo Set ID'),
		'uid' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Author ID'),
		'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mtitle' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => 'Title of memos', 'charset' => 'utf8'),
		'msubtitle' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => 'Subtitle of memos', 'charset' => 'utf8'),
		'cates' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'System Categories of memos'),
		'mcates' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Categories of memos'),
		'tags' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'System tag of memos'),
		'mtags' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Tag of memos'),
		'metadescription' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'metakeywords' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'comment' => 'Description', 'charset' => 'utf8'),
		'detail' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Book Detail', 'charset' => 'utf8'),
		'attention' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'Amount of attention'),
		'hits' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'Amount of clicks'),
		'likes' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => 'Amount of likes'),
		'price' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Default price'),
		'discount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Discount price'),
		'is_discount' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '1:Discount price 2:Default price'),
		'seller_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Seller ID'),
		'sales' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'Sales count'),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
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
			'mid' => 1,
			'uid' => 1,
			'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'mtitle' => 'Lorem ipsum dolor sit amet',
			'msubtitle' => 'Lorem ipsum dolor sit amet',
			'cates' => 1,
			'mcates' => 1,
			'tags' => 1,
			'mtags' => 1,
			'metadescription' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'metakeywords' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'description' => 'Lorem ipsum dolor sit amet',
			'detail' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'attention' => 1,
			'hits' => 1,
			'likes' => 1,
			'price' => 1,
			'discount' => 1,
			'is_discount' => 1,
			'seller_id' => 1,
			'sales' => 1,
			'created' => 1384960400,
			'modified' => 1384960400
		),
	);

}
