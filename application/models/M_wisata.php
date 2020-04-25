<?php 

class M_wisata extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('wisata');
	}
}