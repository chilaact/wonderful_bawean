<?php

class C_wisata extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('M_wisata');		
	}
 
	public function index(){
		$data['wisata'] = $this->M_wisata->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/daf_wis', $data);
		$this->load->view('templates/footer');
	}
}
