<?php
App::uses('AppController', 'Controller');
/**
 * UserProfiles Controller
 *
 * @property UserProfile $UserProfile
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UserProfilesController extends AppController {

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
		$this->UserProfile->recursive = 0;
		$this->set('userProfiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserProfile->exists($id)) {
			throw new NotFoundException(__('Invalid user profile'));
		}
		$options = array('conditions' => array('UserProfile.' . $this->UserProfile->primaryKey => $id));
		$this->set('userProfile', $this->UserProfile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserProfile->create();
			if ($this->UserProfile->save($this->request->data)) {
				$this->Session->setFlash(__('The user profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user profile could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserProfile->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserProfile->exists($id)) {
			throw new NotFoundException(__('Invalid user profile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserProfile->save($this->request->data)) {
				$this->Session->setFlash(__('The user profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user profile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserProfile.' . $this->UserProfile->primaryKey => $id));
			$this->request->data = $this->UserProfile->find('first', $options);
		}
		$users = $this->UserProfile->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserProfile->id = $id;
		if (!$this->UserProfile->exists()) {
			throw new NotFoundException(__('Invalid user profile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserProfile->delete()) {
			$this->Session->setFlash(__('The user profile has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user profile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function userprofile_dashboard() {
		$this->loadModel('Category');
           // Configure::write('debug', 2);
  	  $categories=null;
  	 $categories=$this->Category->find('list',array('fields'=>array('Category.name'),'order'=>array('Category.name ASC')));
  	
  	 $this->set(compact('categories'));
	}

public function home_dashboard() {
	$this->loadModel('Category');
           // Configure::write('debug', 2);
  	  $categories=null;
  	 $categories=$this->Category->find('list',array('fields'=>array('Category.name'),'order'=>array('Category.name ASC')));
  	
  	 $this->set(compact('categories'));
	}


public function examination_dashboard() {	
	$this->loadModel('Category');
           // Configure::write('debug', 2);
  	  $categories=null;
  	 $categories=$this->Category->find('list',array('fields'=>array('Category.name'),'order'=>array('Category.name ASC')));
  	
  	 $this->set(compact('categories'));
}

public function results_dashboard(){	
    //Configure::write('debug', 2);	
    $this->loadModel('TestResult');
     $this->loadModel('CategoryQuestion');
	$results=null;
	$results=$this->TestResult->find('all',array('conditions'=>array('TestResult.user_id'=>$this->Session->read('Auth.User.id'))));
	//debug($results);
	$final=null;
	foreach($results as $k=>$v){
		$final[$v['TestResult']['id']]['name']= $v['Category']['name'];
		$final[$v['TestResult']['id']]['user']=$this->Session->read('Auth.User.username');
		$final[$v['TestResult']['id']]['score']=$v['TestResult']['score'];
		$final[$v['TestResult']['id']]['count']= $this->CategoryQuestion->find('count',array('conditions'=>array('CategoryQuestion.category_id'=>$v['Category']['id'])));
		
	}
	$this->set(compact('results','final'));	
	}

public function aboutus_dashboard() {
}

}
