<?php

class C_pesan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_wisata');
		$this->load->model('M_pesan');		
 
	}
 
    public function pesan_wis($id){
		$pes_wis = $this->M_pesan->find($wis);
		$data = array(
			'id'      => $pes_wis->wis_id,
			'qty'     => 1,
			'price'   => $pes_wis->wis_hrg_weekday,
			'name'    => $pes_wis->wis_nama,
			
	);
	
	$this->cart->insert($data);
	redirect('C_wisata');
	}
}