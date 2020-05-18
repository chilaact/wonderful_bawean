<?php

class C_inv_wis extends CI_Controller{
	
	public function index(){
		$data['inv_wis'] = $this->M_inv_wis->tampil_data();
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		
		$this->load->view('admin/a_inv_wis',$data);
		$this->load->view('templates/admin/footer');
	}
}