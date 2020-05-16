<?php

class C_hotel extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('M_hotel');		
	}
 
	public function index(){
		$data['hotel'] = $this->M_hotel->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/daf_hot', $data);
		$this->load->view('templates/footer');
	}

	public function detail_hot($hot_id){
		$data['dethot'] = $this->M_hotel->det_hot($hot_id);
		$data['detfashot'] = $this->M_hotel->getFasById($hot_id);
		$this->load->view('templates/header');
		$this->load->view('user/det_hot', $data);
		$this->load->view('templates/footer');
	}

}