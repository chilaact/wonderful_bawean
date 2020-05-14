<?php 

class M_pesan extends CI_Model{

    public function get_data()
	{
		return $this->db->get('wisata');
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