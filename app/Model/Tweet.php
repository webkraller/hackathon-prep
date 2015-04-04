<?php
App::uses('AppModel', 'Model');
/**
 * Tweet Model
 *
 * @property TwitterUser $TwitterUser
 * @property TweetSubmission $TweetSubmission
 */
class Tweet extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TwitterUser' => array(
			'className' => 'TwitterUser',
			'foreignKey' => 'twitter_user_handle',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TweetSubmission' => array(
			'className' => 'TweetSubmission',
			'foreignKey' => 'tweet_id',
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
