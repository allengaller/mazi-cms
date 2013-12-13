<?php
App::uses('AppController', 'Controller');
/**
 * Main Controller
 *
 * @property Main
 * @property PaginatorComponent $Paginator
 * @property Component $y
 */
class MainController extends AppController {

    public $components = array('Paginator');
    public $uses = array('User');

	public function index() {
		$this->layout = 'default';
	}

    public function login() {
        //$this->layout="login";
    }

    public function register() {
        if ($this->request->is('post')) {
            print_r($this->request->data);exit;
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $user = $this->User->find('list');
        }
        
        $this->set('user', $user);
    	 
    }

    public function feature() {

    }
	
}