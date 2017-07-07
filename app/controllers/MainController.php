<?php

/**
* created by hidayat
*/
class MainController extends Controller{

	function render(){

		// insert
		$messages = new Messages($this->db);
		$messages->key = 'second message';
		$messages->message = 'This is second message';
		$messages->save();

		// to model
		$messages = new Messages($this->db);
		$msg = $messages->getById(1)[0];

		$this->f3->set('msg', $msg);
		$template = new Template;
		echo $template->render('template.htm');
	}
	
}