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


//=================================================Admin

	public function view(){
		$data['hotel'] = $this->M_hotel->tampil_data()->result();
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/a_hotel', $data);
		$this->load->view('templates/admin/footer');
	}

	public function createhot(){
		$hot_nama = $this->input->post('hot_nama');
		$hot_desc_short = $this->input->post('hot_desc_short');
		$hot_desc_long = $this->input->post('hot_desc_long');
		$hot_status = $this->input->post('hot_status');

		$hot_img = $_FILES['hot_img']['name'];
		if ($hot_img = ''){}else{
				$config['upload_path'] 	= './assets/image';
				$config['allowed_types']= 'gif|jpg|png|jpeg';

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('hot_img')){
					echo "Upload Gagal"; die();
				}else{
						$hot_img=$this->upload->data('file_name');
					}
			}
		
		$datahot = array(
			'hot_nama' => $hot_nama,
			'hot_desc_short' => $hot_desc_short,
			'hot_desc_long' => $hot_desc_long,
			'hot_status' => $hot_status,
			'hot_img' => $hot_img,
		);

		$this->db->insert('hotel' , $datahot);
		redirect('C_hotel/view');

	}

	public function edit_hot($hot_id)
	{
		$where = array('hot_id' => $hot_id);
		$data['edthot'] = $this->M_hotel->get_data($where, 'hotel')->result();
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/a_edit_hot', $data);
		$this->load->view('templates/admin/footer');

	}

	public function update_hot()
	{
		$hot_id				= $this->input->post('hot_id');
		$hot_nama	 		= $this->input->post('hot_nama');
		$hot_desc_short	 	= $this->input->post('hot_desc_short');
		$hot_desc_long		= $this->input->post('hot_desc_long');
		$hot_status			= $this->input->post('hot_status');

		$hot_img				= $_FILES['hot_img']['name'];
		if ($hot_img = ''){}else{
				$config['upload_path'] 	= './assets/image';
				$config['allowed_types']= 'gif|jpg|png';
				$config['overwrite']	= true;

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('hot_img')){
					$hot_img = $this->input->post('old_image');
				}else{
						$hot_img=$this->upload->data('file_name');
					}
			}

		$data = array (
			'hot_nama'			=> $hot_nama,
			'hot_desc_short' 	=> $hot_desc_short,
			'hot_desc_long' 	=> $hot_desc_long,
			'hot_status'		=> $hot_status,
			'hot_img'			=> $hot_img
		);

		$where = array (
			'hot_id' => $hot_id
		);

		$this->M_admin->update_data($where, $data, 'hotel');
		redirect('C_hotel/view');
	}

	public function deletehot($hot_id){
		$id = array('hot_id' => $hot_id);

		$this->db->where($id);
		$this->db->delete('hotel');
		redirect('C_hotel/view');
	}

	public function detail_hotel($wis_id){
		$data['dethot'] = $this->M_hotel->det_hot($wis_id);
		$data['detroom'] = $this->M_hotel->getFasById($wis_id);
		$this->load->view('templates/admin/header');
		$this->load->view('admin/a_det_hotel', $data);
		$this->load->view('templates/admin/footer');
	}

}