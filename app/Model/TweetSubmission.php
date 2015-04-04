<?php
App::uses('AppModel', 'Model');
/**
 * TweetSubmission Model
 *
 * @property Tweet $Tweet
 */
class TweetSubmission extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'tweet_id,submitted_on';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tweet' => array(
			'className' => 'Tweet',
			'foreignKey' => 'tweet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
