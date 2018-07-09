<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertBuku()
	{
			$object=array(
			'judul'=>$this->input->post('judul'),
			'pengarang'=>$this->input->post('pengarang'),
			'penerbit'=>$this->input->post('penerbit'),
			'tahun_terbit'=>$this->input->post('tahun_terbit'),
			'jumlah_halaman'=>$this->input->post('jumlah_halaman'),
			'gambar'=>$this->upload->data('file_name'),
			'sinopsis'=>$this->input->post('sinopsis'),
			'stok'=>$this->input->post('stok'),
			'harga'=>$this->input->post('harga'));

		$this->db->insert('buku', $object);
	}

	public function getBuku_update()
	{
		$query = $this->db->query("Select * from buku LIMIT 5");
		return $query->result_array();
	}

	public function getBuku_list()
	{
		$query = $this->db->query("SELECT * from buku inner join kategori on buku.id_kategori = kategori.id_kategori");
		return $query->result_array();
	}

	public function getBuku($id)
	{
		$query = $this->db->query("SELECT * from buku where id_buku=$id");
		return $query->result();
	}

	public function updateById($id)
	{
		$data = array('judul' => $this->input->post('judul'),
			'pengarang'=>$this->input->post('pengarang'),  
			'penerbit'=>$this->input->post('penerbit'), 
			'tahun_terbit'=>$this->input->post('tahun_terbit'),
			'jumlah_halaman'=>$this->input->post('jumlah_halaman'),
			'sinopsis'=>$this->input->post('sinopsis'),
			'stok'=>$this->input->post('stok'),
			'harga'=>$this->input->post('harga'),);
		$this->db->where('id_buku', $id);
		$this->db->update('buku', $data);
	}
	
	public function delete($id){
		$this->db->where('id_buku', $id);
		$this->db->delete('buku');
	}
}

/* End of file buku_model.php */
/* Location: ./application/models/buku_model.php */