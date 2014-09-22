<?php
App::uses('AppController', 'Controller');
/**
 * CategoryQuestions Controller
 *
 * @property CategoryQuestion $CategoryQuestion
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CategoryQuestionsController extends AppController {

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
		$this->CategoryQuestion->recursive = 0;
		$this->set('categoryQuestions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		//debug($this->data);
		$this->CategoryQuestion->recursive = 0;
		
		$category_questions_records=$this->CategoryQuestion->find('first',array('conditions'=>array('CategoryQuestion.id'=>$id)));
		$this->set(compact('category_questions_records'));
		//debug($category_questions_records);exit;
		if (!$this->CategoryQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid category question'));
		}
		$options = array('conditions' => array('CategoryQuestion.' . $this->CategoryQuestion->primaryKey => $id));
		$this->set('categoryQuestion', $this->CategoryQuestion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//debug($this->data);
		if ($this->request->is('post')) {
			$this->CategoryQuestion->create();
			$add_category_question=null;
			$add_category_question['CategoryQuestion']['option1']= $this->data['CategoryQuestion']['option1'];
			$add_category_question['CategoryQuestion']['option2']= $this->data['CategoryQuestion']['option2'];
			$add_category_question['CategoryQuestion']['option3']= $this->data['CategoryQuestion']['option3'];
			$add_category_question['CategoryQuestion']['option4']= $this->data['CategoryQuestion']['option4'];
			$add_category_question['CategoryQuestion']['correct']= $this->data['CategoryQuestion']['correct'];
			
			if ($this->CategoryQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The category question has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category question could not be saved. Please, try again.'));
			}
		}
		$categories = $this->CategoryQuestion->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CategoryQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid category question'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoryQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The category question has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category question could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoryQuestion.' . $this->CategoryQuestion->primaryKey => $id));
			$this->request->data = $this->CategoryQuestion->find('first', $options);
		}
		$categories = $this->CategoryQuestion->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
	   
		$this->CategoryQuestion->id = $id;
		if (!$this->CategoryQuestion->exists()) {
			throw new NotFoundException(__('Invalid category question'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoryQuestion->delete()) {
			$this->Session->setFlash(__('The category question has been deleted.'));
		} else {
			$this->Session->setFlash(__('The category question could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function list_questions($id=null){
		//Configure::write('debug', 2);
		$category_questions=$this->CategoryQuestion->find('all',array('conditions'=>array('CategoryQuestion.category_id'=>$id)));
		//debug($category_questions);
		$this->set(compact('category_questions'));
  	  }
  	  
}
	
	


