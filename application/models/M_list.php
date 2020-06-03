<?php

class M_list extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('user');
	}
}

