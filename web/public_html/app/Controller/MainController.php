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
		$this->layout = 'default';
	}
	
}