<?php 

class M_admin extends CI_Model {

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


}