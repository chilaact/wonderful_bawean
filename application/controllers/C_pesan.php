<?php

class C_pesan extends CI_Controller{
    function __construct(){
		parent::__construct();		
 
	}
 
    function index($id){

		if (isset($_SESSION['pesanan'])) {
			// $_SESSION['pesanan'][$id] = $id;
			array_push($_SESSION['pesanan'], $id);
		}else{
			$_SESSION['pesanan'] =array($id=>$id);
		}
		echo "<script type='text/javascript'>alert('Add Success');</script>";
		echo "<script>window.history.back()</script>";
		// var_dump($_SESSION['pesanan']);

	}

	function AddPesanan(){

		$data = array();
		foreach ($_SESSION['pesanan'] as $value) {
			array_push($data, array('wis_id'=>$value));
		}

		 $result = $this->db->insert_batch('pesanan',$data);
		 
		 if ($result) {
		 	echo "<script type='text/javascript'>alert('Add Success');</script>";
		 	session_destroy();
		 }else{
		 	echo "<script type='text/javascript'>alert('Add Failed');</script>";
		 }
		 echo "<script>window.history.back()</script>";
	}

	function DeletePesanan($id){
		// session_destroy();
		if (sizeof($_SESSION['pesanan']) <= 1) {
			unset($_SESSION['pesanan']);
		}else if(isset($_SESSION['pesanan'])){
			unset($_SESSION['pesanan'][$id]);
			$_SESSION['pesanan']=array_values($_SESSION['pesanan']);
		}
		echo "<script>window.history.back()</script>";
	}
}