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
            $this->User->create();
            if ($this->User->save($this->request->data)) {
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