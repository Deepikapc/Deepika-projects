<?php
App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');
/**
 * TestResults Controller
 *
 * @property TestResult $TestResult
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TestResultsController extends AppController {

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
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TestResult->exists($id)) {
			throw new NotFoundException(__('Invalid test result'));
		}
		$options = array('conditions' => array('TestResult.' . $this->TestResult->primaryKey => $id));
		$this->set('testResult', $this->TestResult->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TestResult->create();
			if ($this->TestResult->save($this->request->data)) {
				$this->Session->setFlash(__('The test result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The test result could not be saved. Please, try again.'));
			}
		}
		$categories = $this->TestResult->Category->find('list');
		$users = $this->TestResult->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TestResult->exists($id)) {
			throw new NotFoundException(__('Invalid test result'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TestResult->save($this->request->data)) {
				$this->Session->setFlash(__('The test result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The test result could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TestResult.' . $this->TestResult->primaryKey => $id));
			$this->request->data = $this->TestResult->find('first', $options);
		}
		$categories = $this->TestResult->Category->find('list');
		$users = $this->TestResult->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->autoRender=false;
		$test_result=$this->TestResult->find('first',array('conditions'=>array('TestResult.id'=>$id)));
		if($test_result){
			
			if($this->TestResult->delete($id)){
				$this->Session->setFlash(__('The test result has been deleted.'));
		} else {
			$this->Session->setFlash(__('The test result could not be deleted. Please, try again.'));
		}
			return $this->redirect(array('action' => 'index'));
	}
	}
		
		
		/*$this->TestResult->id = $id;
		if (!$this->TestResult->exists()) {
			throw new NotFoundException(__('Invalid test result'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TestResult->delete()) {
			$this->Session->setFlash(__('The test result has been deleted.'));
		} else {
			$this->Session->setFlash(__('The test result could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}*/

    public function result(){
    	Configure::write('debug', 2);
    	debug($this->data['TestResult'] );
    	//$this->autoRender=false;
    	$this->loadModel('CategoryQuestion');
    	//debug($this->data);
    	$count=$this->CategoryQuestion->find('count',array('conditions'=>array('CategoryQuestion.category_id'=>$this->data['Cat']['cat_id'])));
    	
    	$add_Testresult=null;
    	$add_Testresult['Category']['id']= $this->data['Cat']['cat_id'];
    	$totalmarks=0;
    	foreach($this->data['TestResult'] as $k=>$v){
    		if($v){
    			$checkans = $this->CategoryQuestion->find('first',array('conditions'=>array('CategoryQuestion.id'=>$k)));
    			if($checkans['CategoryQuestion']['correct']==$v){
    				$totalmarks++;
    			}
    		}
    	}
    	
    	$add_result=null;
    	$this->TestResult->create();
    	$add_result['TestResult']['user_id'] =  $this->Session->read('Auth.User.id');
    	$add_result['TestResult']['category_id'] =  $this->data['Cat']['cat_id'];
    	$add_result['TestResult']['score'] =  $totalmarks;
    	$add_result['TestResult']['date_time'] =  date('Y-m-d');
    	
    	
    	$this->TestResult->save($add_result);
    	
    	$this->TestResult->recursive = 1;
    	$ResultDetail=$this->TestResult->find('all');
    	//debug($ResultDetail);
    	$this->set(compact('totalmarks','count'));
    	
    }
    
	public function index(){	
    //Configure::write('debug', 2);	
    $this->loadModel('TestResult');
     $this->loadModel('CategoryQuestion');
	$results=null;
	$results=$this->TestResult->find('all');
	//debug($results);
	$final=null;
	foreach($results as $k=>$v){
		$final[$v['TestResult']['id']]['id']= $v['TestResult']['id'];
		$final[$v['TestResult']['id']]['name']= $v['Category']['name'];
		$final[$v['TestResult']['id']]['user']=$this->Session->read('Auth.User.username');
		$final[$v['TestResult']['id']]['score']=$v['TestResult']['score'];
		$final[$v['TestResult']['id']]['date_time']=$v['TestResult']['date_time'];
		$final[$v['TestResult']['id']]['count']= $this->CategoryQuestion->find('count',array('conditions'=>array('CategoryQuestion.category_id'=>$v['Category']['id'])));
		
	}
	$this->set(compact('results','final'));	
	}
	
}

