<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Databases extends MY_Controller {
	
	var $title = "Databases";
	
	public function Index($server='default'){
		//$this->getDatabases();
		//var_dump($this->databases);
		//$this->getCollections();
		//var_dump($this->collections[$this->database]);
		//exit;
		//$this->load->view('default');
		$this->load->view('database/index');
	}

}

?>