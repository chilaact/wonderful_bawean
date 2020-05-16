<?php 

class M_wisata extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('wisata');
	}

	public function det_wis($wis_id)
	{
		$result = $this->db->where('wis_id',$wis_id)->get('wisata');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function getFasById($wis_id)
	{	
		$result = $this->db->where('wis_id',$wis_id)->get('fasilitas');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function get_search_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('wisata');
		$this->db->like('wis_nama', $keyword);
		$query1 = $this->db->get_compiled_select();

		$this->db->select('*');
		$this->db->from('hotel');
		$this->db->like('hot_nama', $keyword);
		$query2 = $this->db->get_compiled_select();

		$query = $this->db->query($query1 . ' UNION ' . $query2);

		return $query->result();
	}

	public function find($id)
   {
      $result = $this->db->where('wis_id',$id)
                -> limit(1)
                ->get('wisata');
        if($result->num_rows() >0 ){
            return $result->row();
        }
        else {
            return array();
        }
   }


}