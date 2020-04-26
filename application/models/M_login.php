<?php 
 
class M_login extends CI_Model{	
	public function get($username){
        $this->db->where('us_nama', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
}