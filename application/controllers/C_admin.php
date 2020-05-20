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

	public function createwis(){
		$wis_nama = $this->input->post('wis_nama');
		$wis_img = $this->input->post('wis_img');
		$wis_desc_short = $this->input->post('wis_desc_short');
		$wis_desc_long = $this->input->post('wis_desc_long');
		$wis_hrg_weekday = $this->input->post('wis_hrg_weekday');
		$wis_hrg_weekend = $this->input->post('wis_hrg_weekend');
		
		$datawis = array(
			'wis_nama' => $wis_nama,
			'wis_img' => $wis_img,
			'wis_desc_short' => $wis_desc_short,
			'wis_desc_long' => $wis_desc_long,
			'wis_hrg_weekday' => $wis_hrg_weekday,
			'wis_hrg_weekend'=> $wis_hrg_weekend,
			'wis_kuota_weekday' => '100',
			'wis_kuota_weekend' => '200'
		);

		$this->db->insert('wisata' , $datawis);
		redirect('C_admin/wisata');

	}

	public function deletewis($wis_id){
		$id = array('wis_id' => $wis_id);

		$this->db->where($id);
		$this->db->delete('wisata');
		redirect('C_admin/wisata');
	}

	public function inv_wis(){
		$data['inv_wis'] = $this->M_inv_wis->tampil_data();
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		
		$this->load->view('admin/a_inv_wis',$data);
		$this->load->view('templates/admin/footer');
	}

	public function detail_inv_wis($id_inv_wis){
		$data['inv_wis'] = $this->M_inv_wis->ambil_id_inv($id_inv_wis);
		$data['pes_wis'] = $this->M_inv_wis->ambil_id_pes_wis($id_inv_wis);
		print_r($data); exit;
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		
		$this->load->view('admin/a_detail_pesanan_wis',$data);
		$this->load->view('templates/admin/footer');
	}
}
?> 