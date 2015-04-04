<?php
App::uses('AppModel', 'Model');
/**
 * TwitterUser Model
 *
 * @property Tweet $Tweet
 */
class TwitterUser extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'twitter_user';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'handle';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'handle';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Tweet' => array(
			'className' => 'Tweet',
			'foreignKey' => 'twitter_user_handle',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
