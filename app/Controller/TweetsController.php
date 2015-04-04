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

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tweet->exists($id)) {
			throw new NotFoundException(__('Invalid tweet'));
		}
		$options = array('conditions' => array('Tweet.' . $this->Tweet->primaryKey => $id));
		$this->set('tweet', $this->Tweet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tweet->create();
			if ($this->Tweet->save($this->request->data)) {
				$this->Session->setFlash(__('The tweet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tweet could not be saved. Please, try again.'));
			}
		}
		$twitterUsers = $this->Tweet->TwitterUser->find('list');
		$this->set(compact('twitterUsers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tweet->exists($id)) {
			throw new NotFoundException(__('Invalid tweet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tweet->save($this->request->data)) {
				$this->Session->setFlash(__('The tweet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tweet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tweet.' . $this->Tweet->primaryKey => $id));
			$this->request->data = $this->Tweet->find('first', $options);
		}
		$twitterUsers = $this->Tweet->TwitterUser->find('list');
		$this->set(compact('twitterUsers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tweet->id = $id;
		if (!$this->Tweet->exists()) {
			throw new NotFoundException(__('Invalid tweet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tweet->delete()) {
			$this->Session->setFlash(__('The tweet has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tweet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
