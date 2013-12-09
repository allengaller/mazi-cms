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

	public function index() {
        //debug('123');exit;
		$this->layout = 'default';
	}

    public function login() {
        debug('123');exit;
    }
	
}