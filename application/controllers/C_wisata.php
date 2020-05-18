<?php

class C_wisata extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('M_wisata');
		$this->load->model('M_login');		
	}
 
	public function index(){
		$data['user'] = $this->session->userdata('user');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/us_home', $data);
		$this->load->view('templates/footer');
	}

	public function daftar_wis(){
		$data['wisata'] = $this->M_wisata->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/daf_wis', $data);
		$this->load->view('templates/footer');
	}

	public function detail_wis($wis_id){
		$data['detwis'] = $this->M_wisata->det_wis($wis_id);
		$data['detfas'] = $this->M_wisata->getFasById($wis_id);
		$this->load->view('templates/header');
		$this->load->view('user/det_wis', $data);
		$this->load->view('templates/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['wisata']=$this->M_wisata->get_search_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/search', $data);
		$this->load->view('templates/footer');
	}

	public function profil(){
		$data['user'] = $this->session->userdata('user');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/profile', $data);
		$this->load->view('templates/footer');
	}
	
	public function pesan_wis($id){
		
		$pes_wis = $this->M_wisata->find($id);
		$data = array(
			'id'      => $pes_wis->wis_id,
			'qty'     => 1,
			'price'   => $pes_wis->wis_hrg_weekday,
			'name'    => $pes_wis->wis_nama,
			
	);
	
	$this->cart->insert($data);
	redirect('C_wisata/daftar_wis');
	}
	
	
	public function detail_pes_wis()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/pes_wis');
		$this->load->view('templates/footer');
	}

	public function hapus_pes_wis()
	{
		$this->cart->destroy();
		redirect('C_wisata/daftar_wis');
	}

	public function pem_pes_wis()
	{
		$data['user'] = $this->session->userdata('user');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/pembayaran_wis',$data);
		$this->load->view('templates/footer');
	}

	public function proses_pem_wis()
	{
		
		$is_wis_processed= $this->M_inv_wis->index();
		if ($is_wis_processed) {
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('user/proses_pem_wis');
			$this->load->view('templates/footer');
		}
		else {
			echo "maaf pemesanan wisata gagal diproses";
		}
		
	}
}
