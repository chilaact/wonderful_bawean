<?php 

class M_inv_wis extends CI_Model{

    public function index(){
        $us_id=$this->input->post('us_id');
        $atasnama=$this->input->post('atasnama');
        $tgl_checkin=$this->input->post('tgl_checkin');
        $pesan_hot= array(
            'us_id'=>$us_id,
            'atasnama'=>$atasnama,
            'tgl_pesan'=>$tgl_pesan,
            'jumlah'=>$jumlah
        );
        $this->db->insert('pesanan_hot',$pesan_hot);
        foreach ($this->cart->contents() as $item) {
            $data= array(
                'hot_id'=>$item['id'],
                'hot_nama'=>$item['name'],
                'hot_hrg_weekday'=>$item['price']
            );
            $this->db->insert('pesanan_hot',$data);
        }
        return TRUE;
    }
}