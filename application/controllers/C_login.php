<?php

class C_login extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	public function index(){
		$this->load->view('auth/login');
	}

	public function registration(){
		$this->load->view('auth/registration');
	}
 
	function aksi_login(){
		
		echo "anjay";	
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
