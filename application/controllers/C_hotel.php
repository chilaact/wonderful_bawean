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

	public function det_room($room_id){
		$data['detroom'] = $this->M_hotel->getDetRoomById($room_id);
		$this->load->view('templates/header');
		$this->load->view('user/det_room', $data);
		$this->load->view('templates/footer');
	}

	public function pesan_room($id){
		$pes_room = $this->M_hotel->find($id);
		$data = array(
			'id'      => $pes_room->room_id,
			'qty'     => 1,
			'price'   => $pes_room->room_hrg,
			'name'    => $pes_room->room_nama,
			
	);
	
	$this->cart->insert($data);

	redirect('C_hotel/index');
	}
	
	public function pem_hotel()
	{
		$data['user'] = $this->session->userdata('user');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/pembayaran_hotel',$data);
		$this->load->view('templates/footer');
	}
	public function proses_pem_hot()
	{
		
		$is_hot_processed= $this->M_pem_hot->index();
		if ($is_hot_processed) {
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('user/proses_pem_hot');
			$this->load->view('templates/footer');
		}
		else {
			echo "maaf pemesanan hotel gagal diproses";
		}
		
	}



}