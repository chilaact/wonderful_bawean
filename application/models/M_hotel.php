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
		$result = $this->db->where('hot_id',$hot_id)->get('type_room');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}

	}

	public function getDetRoomById($room_id)
	{
		$result = $this->db->where('room_id',$room_id)->get('fas_hotel');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}

	}

	public function find($id)
   {
      $result = $this->db->where('hot_id',$id)
                -> limit(1)
                ->get('hotel');
        if($result->num_rows() >0 ){
            return $result->row();
        }
        else {
            return array();
        }
   }

}