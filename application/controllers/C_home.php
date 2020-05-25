<?php

class C_home extends CI_Controller {


	function __construct(){
		parent::__construct();		
 
	}
 
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function faq(){
		$this->load->view('templates/header');
		$this->load->view('faq');
		$this->load->view('templates/footer');
	}
}
