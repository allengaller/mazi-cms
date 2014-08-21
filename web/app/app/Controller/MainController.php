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

	public function index() {
		$this->layout = 'default';
	}

    public function login() {
        if($this->request->is('post')) {
            $email = $this->request->data('email');
            $password = $this->request->data('password');
            debug($email);
            debug($password);exit;    
        }
        $this->redirect(array('controller'=>'zone', 'action'=>'index'));
    }

    public function register() {
        if ($this->request->is('post')) {
            $this->loadModel('MaziUser')


            $reqData = $this->request->data;
            $reqData['status'] = 1;
            $reqData['role'] = 1;
            $reqData['password'] = md5($reqData['password']);
            $this->User->create();
            if ($this->User->save($reqData)) {
                $this->Session->setFlash(__('用户注册成功！'));
                echo true;
            } else {
                $this->Session->setFlash(__('用户注册失败！请重试！'));
                echo false;
            }
        }
    }

    public function feature() {

    }
	
}