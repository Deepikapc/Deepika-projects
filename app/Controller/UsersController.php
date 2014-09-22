<?php
App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator', 'Session');
	public $components =array('Paginator','Session','Auth'  => array(


   'loginRedirect'=>array('controller'=>'users', 'action'=>'dashboard'),
   'logoutRedirect'=>array('controller'=>'users','action'=>'login')));
 
    public function beforeFilter(){
        $this->Session->write('username','deepika');
        $this->Session->read('Auth.User.login_time');
        $this->Auth->allow('login','add');
    }
  
  
    public function login()
    {      
    if ($this->request->is('post'))
     {
        if($this->Auth->login())
            {
                 return $this->redirect($this->Auth->redirect()); 
                   
              }
        else
         {
            $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
         }
    }
    }
    public function logout()
     {
             $this->Session->setFlash('Sucessfully logged out.');
      $this->redirect($this->Auth->logout());
     }
   
   

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		Configure::write('debug', 0);
		$UserDetail=$this->User->find('first',array("conditions"=>array('User.id'=>$id)));
		$this->set(compact('$UserDetail'));
		//debug($UserDetail);
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			$this->User->create();
			$add_user=null;
			$add_user['User']['username']= $this->data['User']['username'];
			$add_user['User']['password']= $this->data['User']['password'];
			$add_user['User']['login_type']= 'user';
			if($this->User->save($add_user)){
				
				$lastInsertID= $this->User->getInsertID();
				$this->loadModel('UserProfile');
				$this->UserProfile->create();
			    $add_userprofile=null;
			    $add_userprofile['UserProfile']['user_id']= $lastInsertID;
			    $add_userprofile['UserProfile']['firstname']= $this->data['User']['firstname'];
			    $add_userprofile['UserProfile']['lastname']= $this->data['User']['lastname'];
			    if($this->UserProfile->save($add_userprofile)){
			    	$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			    }else{
			    	$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
	/*public function edit($id = null) {
		Configure::write('debug', 2);
		$UserDetail=$this->User->find('first','conditions'=>array('User.id'=>$id)));
		$this->set(compact('UserDetail'));
		if($this->data){
			$edit=null;
			$edit=['User']['id']=$id;
			$edit=['User']['username']=$this->data['User']['username'];
			$edit=['User']['password']=$this->data['User']['password'];
			$edit=['UserProfile']['firstname']=$this->data['UserProfile']['firstname'];
			$edit=['UserProfile']['lastname']=$this->data['UserProfile']['lastname'];
			if($this->User->save($edit)){
				
			}
			
			
		}
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}*/
	public function edit($id = null) {
        Configure::write('debug', 2);
       
        debug($this->data);
        $userDetail=$this->User->find('first',array('conditions'=>array('User.id'=>$id)));
       // debug($userDetail);
        $this->set(compact('userDetail'));
       
        if($this->data){
             $edit=null;
             $edit['User']['id'] =$id;
             $edit['User']['username'] =$this->data['User']['username'];
             $edit['User']['password'] =$this->data['User']['password'];
             $this->User->save($edit);
            
             $this->loadModel('UserProfile');
             $edit=null;
             $edit['UserProfile']['firstname'] =$this->data['User']['firstname'];
             $edit['UserProfile']['lastname'] =$this->data['User']['lastname'];
            
             if($this->UserProfile->save($edit)){
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
	public function delete($id = null) {
		$this->autoRender=false;
		if($id){
			$this->loadModel('UserProfile');
			$userProfile=$this->UserProfile->find('first',array('conditions'=>array('UserProfile.user_id'=>$id)));
			if($userProfile){
				$this->UserProfile->delete($userProfile['UserProfile']['id']);
			}
			if($this->User->delete($id)){
				$this->Session->setFlash(__('The user has been deleted.'));
		
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
				}else{
			throw new NotFoundException(__('Invalid user'));
		}
		return $this->redirect(array('action' => 'index'));
		
	}
	
	public function dashboard(){
	    if($this->Session->read('Auth.User.login_type')=='admin'){
				//echo ($this->Session->read('Auth.User.login_type'));
				$this->redirect(array('action' => 'admin_dashboard' ));
		
		}elseif($this->Session->read('Auth.User.login_type')=='user'){
				//echo ($this->Session->read('Auth.User.login_type'));
				$this->redirect(array ('controller'=>'user_profiles','action' => 'userprofile_dashboard' ));			
	   }	
	}
  
  
 public function admin_dashboard(){

	    Configure::write('debug', 2);		
		  $User_id=$this->Session->read('Auth.User.id');
		  //debug($this->Session->read('Auth.User'));
		  //debug($User_id);
		  $userprofile=$this->User->find('first',array('conditions'=>array('User.id'=>$User_id)));
		  $this->set(compact('userprofile'));
	}

	public function home_dashboard(){
		 // Configure::write('debug', 2);
		   $this->loadModel('Category');
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
	
	public function examination_dashboard(){
		 $this->loadModel('Category');
  	  $categories=null;
  	 $categories=$this->Category->find('list',array('fields'=>array('Category.name'),'order'=>array('Category.name ASC')));
  	
  	 $this->set(compact('categories'));	
	}
	public function aboutus_dashboard(){	
	}
	
	public function no_access(){
		
	}
}



  
  

  

	   

