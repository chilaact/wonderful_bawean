<?php 

class M_inv_wis extends CI_Model{

    public function index(){
        $us_id=$this->input->post('us_id');
        $atasnama=$this->input->post('atasnama');
        $tgl_pesan=$this->input->post('tgl_pesan');
        $inv_wis= array(
            'us_id'=>$us_id,
            'atasnama'=>$atasnama,
            'tgl_pesan'=>$tgl_pesan
        );
        $this->db->insert('inv_wis',$inv_wis);
        $id_inv_wis=$this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data= array(
                'id_inv_wis'=>$id_inv_wis,
                'wis_id'=>$item['id'],
                'room_id'=>$item['id'],
                'wis_nama'=>$item['name'],
                'room_nama'=>$item['name'],
                'jumlah'=>$item['qty'],
                'wis_hrg_weekday'=>$item['price'],
                'room_hrg'=>$item['price']
            );
            $this->db->insert('pesanan_wis',$data);
        }
        return TRUE;
    }

    public function tampil_data()
    {
       $result= $this->db->get('inv_wis');
       if ($result->num_rows()>0) {
           return $result->result();
       }else{
           return false;
       }
    }

    public function ambil_id_inv($id_inv_wis){
        $result=$this->db->where('id',$id_inv_wis)->limit(1)->get('inv_wis');
        if ($result->num_rows() > 0) {
            return $result->num_rows();
        }else {
            return false;
        }
    }

    public function ambil_id_pes_wis($id_inv_wis){
        $result=$this->db->where('id_inv_wis',$id_inv_wis)->get('pesanan_wis');
        if ($result->num_rows() > 0) {
            return $result->result();
        }else {
            return false;
        }
    }

}