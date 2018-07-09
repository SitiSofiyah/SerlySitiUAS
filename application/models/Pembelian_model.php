<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function prosesbeli($id){
		$session_data=$this->session->userdata("logged_in");
		$iduser=$session_data['id_user'];
		$object=array(
			'id_buku'=>$id,
			'id_user'=>$iduser,
			'jml_beli'=>$this->input->post('jml'),
			'totalHarga'=>$this->input->post('harga'));

		$this->db->insert('pembelian', $object);
	}
	
}

/* End of file kategori_model.php */
/* Location: ./application/models/kategori_model.php */