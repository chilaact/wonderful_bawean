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

	public function get_search_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('wisata');
		$this->db->like('wis_nama', $keyword);
		return $this->db->get()->result();
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