<?php 

class M_hotel extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('hotel');
	}

	public function det_hot($hot_id)
	{
		$result = $this->db->where('hot_id',$hot_id)->get('hotel');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function getFasById($hot_id)
	{
		$result = $this->db->where('hot_id',$hot_id)->get('fas_hotel');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}

	}

}