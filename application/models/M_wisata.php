<?php 

class M_wisata extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('wisata');
	}

	public function getDetById($wis_id)
	{
		$result = $this->db->from('fasilitas')->join('wisata', 'fasilitas.wis_id=wisata.wis_id')->get();
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}

	}
}