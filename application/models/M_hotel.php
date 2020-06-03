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
      $result = $this->db->where('room_id',$id)
                -> limit(1)
                ->get('type_room');
        if($result->num_rows() >0 ){
            return $result->row();
        }
        else {
            return array();
        }
   }

   function getHotel($hot_id){
	$hotel = $this->db->get_where('hotel',array('hot_id'=>$hot_id))
			->result();
	return $hotel;
	}

	public function get_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function insert_data($data)
	{
		$this->db->insert('type_room',$data);

		return $this->db->affected_rows();
	}

	public function get_list()
	{
		return $this->db->get('hotel')->result();
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}