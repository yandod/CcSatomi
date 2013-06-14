<?php
	class HomeController extends CcSatomiAppController {
	public $uses = array('Issue');
	public function index() {
		$this->set('count',$this->Issue->find('count'));
	}
}

