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

	function getWisataForPesanan(){
		if (isset($_SESSION['pesanan'])) {
			$temp = array();
			$temp_data = array();
			foreach ($_SESSION['pesanan'] as $value) {
				array_push($temp, $value);
			}
			$result = $this->db->from('wisata')
								->where_in('wis_id',$temp);
			// var_dump($result->get());
			$custom = $result->get()->result_object();
			$temp = array();
			foreach ($custom as $value) {
				$temp[$value->wis_id] = $value;
			}
			return $temp;
		}

	}
}