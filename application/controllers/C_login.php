<?php

class C_login extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	public function index(){
		$this->load->view('auth/login');
	}

	public function registration(){
    $this->load->library('form_validation');
    if ($this->form_validation->run() == false){
      
      $this->load->view('auth/registration');
    }
    else {
      $data = [
        'us_nama'=> $this->input->post('username'),
        'us_email'=> $this->input->post('email'),
        'us_nohp'=> $this->input->post('no_hp'),
        'us_image'=> 'user.jpg',//grong enek gambar e
        'us_alamat'=> $this->input->post('alamat'),
        'us_password'=> $this->input->post('password'),
        'us_role'=> 0,//iki rek digawe piro default e
        'us_date_crated'=> time(),
        'us_date_update'=> time(),
        'us_status'=> 0,
      ];
      $this->db->insert('user',$data);
    }
   
	}
 
	function aksi_login(){
		
	$username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    $password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $user = $this->m_login->get($username); // Panggil fungsi get yang ada di UserModel.php


    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
      echo "gk ada";
      // redirect('auth/login'); // Redirect ke halaman login
    }else{
      if($password == $user->us_password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated'=>true, // Buat session authenticated dengan value true
          'username'=>$user->username,  // Buat session username
          'nama'=>$user->nama // Buat session authenticated
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect('C_admin/index'); // Redirect ke halaman welcome
      }else{
        $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
        redirect('C_login/index'); // Redirect ke halaman login
      }
    }
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('C_login');
	}
}
