<?php
/**
 * PostFixture
 *
 */
class PostFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'pid' => array('type' => 'integer', 'null' => true, 'default' => null),
		'uid' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Creator ID'),
		'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ptitle' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'comment' => 'Title', 'charset' => 'utf8'),
		'psubtitle' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'comment' => 'Abstract', 'charset' => 'utf8'),
		'cates' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'System Categories of posts'),
		'pcates' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Categories of posts'),
		'tags' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'System tag of posts'),
		'ptags' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Tag of posts'),
		'metadescription' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'metakeywords' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'comment' => 'Description', 'charset' => 'utf8'),
		'detail' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Book Detail', 'charset' => 'utf8'),
		'attention' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'Amount of attention'),
		'hits' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'Amount of clicks'),
		'likes' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => 'Amount of likes'),
		'is_show' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'Show in front pages'),
		'is_top' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'Show on top in front pages'),
		'img_src' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => 'List of picture address', 'charset' => 'utf8'),
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
			'pid' => 1,
			'uid' => 1,
			'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ptitle' => 'Lorem ipsum dolor sit amet',
			'psubtitle' => 'Lorem ipsum dolor sit amet',
			'cates' => 1,
			'pcates' => 1,
			'tags' => 1,
			'ptags' => 1,
			'metadescription' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'metakeywords' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'description' => 'Lorem ipsum dolor sit amet',
			'detail' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'attention' => 1,
			'hits' => 1,
			'likes' => 1,
			'is_show' => 1,
			'is_top' => 1,
			'img_src' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'discount' => 1,
			'is_discount' => 1,
			'seller_id' => 1,
			'sales' => 1,
			'created' => 1384960401,
			'modified' => 1384960401
		),
	);

}
