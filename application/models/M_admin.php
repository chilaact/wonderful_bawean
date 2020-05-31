<?php 

class M_admin extends CI_Model {

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function insert_data($data)
	{
		$this->db->insert('fasilitas',$data);

		return $this->db->affected_rows();
	}

	public function get_list()
	{
		return $this->db->get('wisata')->result();
	}

	public function get_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}