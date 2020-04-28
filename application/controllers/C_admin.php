<?php

class C_admin extends CI_Controller {


	function __construct(){
		parent::__construct();		
 
	}
 
	public function index(){
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		
		$this->load->view('admin/a_index');
		$this->load->view('templates/admin/footer');
	}
}
?> 