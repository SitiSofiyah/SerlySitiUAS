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

	public function bayarOrder($id){
		$data = array('bukti_pembayaran' => $this->upload->data('file_name'),
			'status'=>'Lunas');
		$this->db->where('id_pembelian', $id);
		$this->db->update('pembelian', $data);

	}

	public function getPembelianId($id){
			$query = $this->db->query("SELECT * from pembelian where id_pembelian=$id");
		return $query->result();
	}
	
	public function getPembelian_List(){
			$query = $this->db->query("SELECT * from pembelian inner join detailPembelian on pembelian.id_pembelian = detailPembelian.id_pembelian inner join buku on buku.id_buku = detailPembelian.id_buku inner join user on user.id_user=pembelian.id_user");
		return $query->result_array();
	}
	public function getPembelian(){
		$session_data=$this->session->userdata("logged_in");
		$id=$session_data['id_user'];
			$query = $this->db->query("SELECT * from pembelian inner join detailPembelian on pembelian.id_pembelian = detailPembelian.id_pembelian inner join buku on buku.id_buku = detailPembelian.id_buku where pembelian.id_user=$id");
		return $query->result_array();
	}
	
}

/* End of file kategori_model.php */
/* Location: ./application/models/kategori_model.php */