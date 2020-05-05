<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_registration extends CI_Controller{

    public function register()
    {
        //validate the data
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('fname','Nama Lengkap','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('notelp','Telepon','required');
        $this->form_validation->set_rules('avatar','Foto Profil','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('pass','Password','required');
        $this->form_validation->set_rules('copass','Confirm Password','required|matches[password]');

        if ($this->form_validation->run() == TRUE) {
            //load model to connect with db
            $this->load->model('Model_user');
            $this->Model_user->insertUser();

            //set message
            $this->session->set_flashdata('sukses','Anda sudah registrasi!');
            redirect('home');
        }
        else {
            $this->load->view('auth/registration');
        }
    }
}