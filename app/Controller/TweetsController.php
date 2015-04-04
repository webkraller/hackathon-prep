<?php
App::uses('AppController', 'Controller');
/**
 * Tweets Controller
 *
 * @property Tweet $Tweet
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TweetsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tweet->recursive = 0;
		$this->set('tweets', $this->Paginator->paginate());
	}


	public function vote() {
		if ($this->request->is(array('post', 'put'))) {	
			if ($this->TwitterUser->save($this->request->data)) {
				$this->Session->setFlash(__('Your vote has been cast.'));
				$this->redirect('/');
			}
		}
	}

	public function submit($tweet_id, $twitter_handle, $datetime = null) {
		$tweet = array ('id'=>$tweet_id,'twitter_user_handle'=>$twitter_handle);
		if(!empty($datetime)) { $tweet['tweet_date'] = $datetime; }
		if ($this->Tweet->save($this->request->data)) {
			$this->Session->setFlash(__('Your tweet has been sent.'));
			$this->redirect('/');
		}
	}
}
