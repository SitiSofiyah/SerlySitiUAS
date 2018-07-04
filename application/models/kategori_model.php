<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertKategori()
	{
			$object=array(
			'kategori'=>$this->input->post('kategori'));

		$this->db->insert('kategori', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from kategori");
		return $query->result_array();
	}
	public function updateById($id)
	{
		$data = array('kategori' => $this->input->post('kategori'));
		$this->db->where('id_kategori', $id);
		$this->db->update('kategori', $data);
	}
	public function getKategori($id_kategori)
	{
		$this->db->where('id_kategori', $id_kategori);
		$query= $this->db->get('kategori');
		return $query->result();
	}
	public function delete($id){
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');
	}

}

/* End of file kategori_model.php */
/* Location: ./application/models/kategori_model.php */