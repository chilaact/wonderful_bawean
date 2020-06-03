<?php

class C_list extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('M_list');
		
	}

	public function index(){
		$data['user'] = $this->M_list->tampil_data()->result();
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		
		$this->load->view('admin/a_list_user' , $data);
		$this->load->view('templates/admin/footer');
	}

	public function deleteus($us_id){
		$id = array('us_id' => $us_id);

		$this->db->where($id);
		$this->db->delete('user');
		redirect('C_list/index');
	}
}