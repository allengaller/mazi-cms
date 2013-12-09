<?php
App::uses('AppModel', 'Model');
/**
 * AccountsAdmin Model
 *
 * @property Group $Group
 */
class AccountsAdmin extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'accounts_admin';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
