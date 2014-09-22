<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CategoriesController extends AppController {

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
		$this->Category->recursive = 1;
		$this->set('categories', $this->Paginator->paginate());
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		//Configure::write('debug', 2);
		$this->Category->recursive = 1;
		$questions = $this->Category->find('first',array('conditions'=>array('Category.id'=>$id)));
		//debug($questions);
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		
		$this->set(compact('questions'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//Configure::write('debug', 2);
		//debug($this->data);
		if ($this->request->is('post'))
		 {
			$this->Category->create();
			$add_category=null;
				
			$add_category['Category']['name']= $this->data['Category']['name'];
			$add_category['Category']['description']= $this->data['Category']['description'];
			//debug($add_category);
if($this->Category->save($add_category)){
	
	$lastInsertID= $this->Category->getInsertID();
				$this->loadModel('CategoryQuestion');
				$add_CategoryQuestion=null;
			    $add_CategoryQuestion['CategoryQuestion']['user_id']= $lastInsertID;
			    $add_CategoryQuestion['CategoryQuestion']['question']= $this->data['CategoryQuestion']['question'];
			    //debug($add_CategoryQuestion);
			    if($this->CategoryQuestion->save($add_CategoryQuestion)){
	$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'index'));
                } else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
	}
	}
			

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		//Configure::write('debug', 2);
		$categoryDetail=$this->Category->find('first',array('conditions'=>array('Category.id'=>$id)));
       //debug($categoryDetail)
        $this->set(compact('categoryDetail'));
       
        if($this->data){
             $edit=null;
             $edit['Category']['id'] =$id;
             $edit['Category']['name'] =$this->data['Category']['name'];
             $edit['Category']['description'] =$this->data['Category']['description'];
             $this->Category->save($edit);
             $this->loadModel(CategoryQueation);
             $edit=null;
              $edit['CategoryQueation']['question'] =$this->data['Category']['question'];
             if($this->CategoryQueation->save($edit)){
             	 $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
             }else{
                 $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
             }
        }
     }
            
       
		
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null){
		$this->autoRender=false;
		if($id){
			$this->loadModel('CategoryQuestion');
			$categoryQuestion=$this->CategoryQuestion->find('first',array('conditions'=>array('CategoryQuestion.category_id'=>$id)));
			if($categoryQuestion){
				$this->CategoryQuestion->delete($categoryQuestion['CategoryQuestion']['id']);
			}
			if($this->Category->delete($id)){
			$this->Session->setFlash(__('The category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

  public function list_category(){
  	 // Configure::write('debug', 2);
  	  $categories=null;
  	 $categories=$this->Category->find('list',array('fields'=>array('Category.name'),'order'=>array('Category.name ASC')));
  	
  	 $this->set(compact('categories'));
  }
  
  
}

	