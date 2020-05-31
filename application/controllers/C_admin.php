<?php

class C_admin extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('M_wisata');
		$this->load->model('M_admin');
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
		$wis_desc_short = $this->input->post('wis_desc_short');
		$wis_desc_long = $this->input->post('wis_desc_long');
		$wis_hrg_weekday = $this->input->post('wis_hrg_weekday');
		$wis_status = $this->input->post('wis_status');

		$wis_img = $_FILES['wis_img']['name'];
		if ($wis_img = ''){}else{
				$config['upload_path'] 	= './assets/image';
				$config['allowed_types']= 'gif|jpg|png|jpeg';

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('wis_img')){
					echo "Upload Gagal"; die();
				}else{
						$wis_img=$this->upload->data('file_name');
					}
			}
		
		$datawis = array(
			'wis_nama' => $wis_nama,
			'wis_desc_short' => $wis_desc_short,
			'wis_desc_long' => $wis_desc_long,
			'wis_hrg_weekday' => $wis_hrg_weekday,
			'wis_status' => $wis_status,
			'wis_img' => $wis_img,
		);

		$this->db->insert('wisata' , $datawis);
		redirect('C_admin/wisata');

	}

	public function edit_wis($wis_id)
	{
		$where = array('wis_id' => $wis_id);
		$data['edtwis'] = $this->M_wisata->get_data($where, 'wisata')->result();
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/a_edit_wis', $data);
		$this->load->view('templates/admin/footer');

	}

	public function update_wis()
	{
		$wis_id				= $this->input->post('wis_id');
		$wis_nama	 		= $this->input->post('wis_nama');
		$wis_desc_short	 	= $this->input->post('wis_desc_short');
		$wis_desc_long		= $this->input->post('wis_desc_long');
		$wis_hrg_weekday	= $this->input->post('wis_hrg_weekday');
		$wis_status			= $this->input->post('wis_status');

		$wis_img				= $_FILES['wis_img']['name'];
		if ($wis_img = ''){}else{
				$config['upload_path'] 	= './assets/image';
				$config['allowed_types']= 'gif|jpg|png';
				$config['overwrite']	= true;

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('wis_img')){
					$wis_img = $this->input->post('old_image');
				}else{
						$wis_img=$this->upload->data('file_name');
					}
			}

		$data = array (
			'wis_nama'			=> $wis_nama,
			'wis_desc_short' 	=> $wis_desc_short,
			'wis_desc_long' 	=> $wis_desc_long,
			'wis_hrg_weekday'	=> $wis_hrg_weekday,
			'wis_status'		=> $wis_status,
			'wis_img'			=> $wis_img
		);

		$where = array (
			'wis_id' => $wis_id
		);

		$this->M_admin->update_data($where, $data, 'wisata');
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
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		
		$this->load->view('admin/a_detail_pesanan_wis',$data);
		$this->load->view('templates/admin/footer');
	}

	public function delete_inv($id){
		$id = array('id' => $id);

		$this->db->where($id);
		$this->db->delete('inv_wis');
		redirect('C_admin/inv_wis');
	}

	public function create(){
		
		//cek jika ada inputan dari user
		if ($this->input->post()) {
			//lakukan insert data
			$input_fas = $this->input->post();
			//print_r($input_user);
			//exit();
			$status = $this->M_admin->insert_data($input_fas);
			//echo "success"; exit;
			//pesan gagal/sukses
			if ($status > 0) {
				//kirim pesan sukses
				$this->session->set_flashdata('msg',template_success_msg("Fasilitas Berhasil disimpan"));
			}
			else{
				//pesan error
				$this->session->set_flashdata('msg',template_error_msg("Fasilitas Gagal disimpan"));
			}

			redirect(base_url().'C_admin/wisata');
		}
		else{
			//tampilkan form
			$data['list'] = $this->M_admin->get_list();
			$this->load->view('templates/admin/header');
			$this->load->view("admin/a_add_fas",$data);
			$this->load->view('templates/admin/footer');
			

		}
	
	}

	public function detail_wis($wis_id){
		$data['detwis'] = $this->M_wisata->det_wis($wis_id);
		$data['detfas'] = $this->M_wisata->getFasById($wis_id);
		$this->load->view('templates/admin/header');
		$this->load->view('admin/a_det_wis', $data);
		$this->load->view('templates/admin/footer');
	}

	public function edit_fas($fas_id)
	{
		$where = array('fas_id' => $fas_id);
		$data['edtfas'] = $this->M_admin->get_data($where, 'fasilitas')->result();
		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/a_edit_fas', $data);
		$this->load->view('templates/admin/footer');
	}

	public function update_fas()
	{
		$wis_id				= $this->input->post('wis_id');
		$fas_id				= $this->input->post('fas_id');
		$fas_nama	 		= $this->input->post('fas_nama');

		$data = array (
			'wis_id' 			=> $wis_id,
			'fas_nama'			=> $fas_nama,
		);

		$where = array (
			'fas_id' => $fas_id
		);

		$this->M_admin->update_data($where, $data, 'fasilitas');
		redirect(base_url().'C_admin/detail_wis/'.$wis_id);
	}

	public function deletefas($fas_id){
		$where = array ('fas_id' => $fas_id);
		$this->M_admin->hapus_data($where, 'fasilitas');	

		redirect(base_url().'C_admin/wisata/');
	}

}