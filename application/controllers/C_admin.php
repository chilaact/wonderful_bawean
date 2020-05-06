<?php

class C_admin extends CI_Controller {


	function __construct(){
		parent::__construct();		
 		$this->load->model('M_wisata');
	}
 
	public function index(){
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		
		$this->load->view('admin/a_index');
		$this->load->view('templates/admin/footer');
	}

	public function wisata(){
		$data['wisata'] = $this->M_wisata->tampil_data()->result();
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		
		$this->load->view('admin/a_wisata' , $data);
		$this->load->view('templates/admin/footer');
	
	}
}
?> 