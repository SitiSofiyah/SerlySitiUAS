<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function pembelian($order){
		$this->db->insert('pembelian',$order);
		return $this->db->insert_id();
	}
	public function detailPembelian($orderDetail){
		$this->db->insert('detailPembelian',$orderDetail);
		
	}
	public function prosesbeli($id){
		$session_data=$this->session->userdata("logged_in");
		$iduser=$session_data['id_user'];
		$date = date('Y-m-d');
		$object=array(
			'id_buku'=>$id,
			'id_user'=>$iduser,
			'jml_beli'=>$this->input->post('jml'),
			'tgl_beli'=> $date,
			'totalHarga'=>$this->input->post('harga'));

		$this->db->insert('pembelian', $object);
		$data = array('stok' => $this->input->post('stok'));
		$this->db->where('id_buku', $id);
		$this->db->update('buku', $data);
	}
	public function getPembelian_List(){
			$query = $this->db->query("SELECT * from pembelian inner join buku on buku.id_buku = pembelian.id_buku inner join user on user.id_user=pembelian.id_user");
		return $query->result_array();
	}
	
}

/* End of file kategori_model.php */
/* Location: ./application/models/kategori_model.php */