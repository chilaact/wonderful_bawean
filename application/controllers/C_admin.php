<?php

class C_admin extends CI_Controller {


	function __construct(){
		parent::__construct();		
 
	}
 
	public function index(){
		$this->load->view('admin/a_index');
	}
}
?> 