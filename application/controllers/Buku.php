<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
		$this->load->model('buku_model');
		$object["buku_list"] = $this->buku_model->getBuku_list();
		$this->load->view('buku_list', $object);
	}

	
	public function create()
	{
		$this->load->model('buku_model');
		$this->form_validation->set_rules('judulBuku', 'judul', 'trim|required');
		$this->form_validation->set_rules('pengarangBuku', 'pengarang', 'trim|required');
		$this->form_validation->set_rules('penerbitBuku', 'penerbit', 'trim|required');
		$this->form_validation->set_rules('tahun_terbit', 'tahun_terbit', 'trim|required');
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required');
		$this->form_validation->set_rules('jumlah_halaman', 'jumlah_halaman', 'trim|required');
		$this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
		$this->form_validation->set_rules('sinopsis', 'sinopsis', 'trim|required');
		$this->form_validation->set_rules('stok', 'stok', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tambah_buku_view');
		} else {
			$config['upload_path']      ='./assets/uploads';
			$config['allowed_types']    ='gif|jpg|png';
			$config['max_size']         =1000000000;
			$config['max_width']        =10240;
			$config['max_height']       =7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('tambah_buku_view',$error);
			}
			else
			{
			$this->buku_model->insertBuku();
			$this->load->view('tambah_buku_sukses');
			}
		}

	}
	public function update($id)
	{
		//load library
		$this->load->model('buku_model');
		$this->form_validation->set_rules('judulBuku', 'judul', 'trim|required');
		$this->form_validation->set_rules('pengarangBuku', 'pengarang', 'trim|required');
		$this->form_validation->set_rules('penerbitBuku', 'penerbit', 'trim|required');
		$this->form_validation->set_rules('tahun_terbit', 'tahun_terbit', 'trim|required');
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required');
		$this->form_validation->set_rules('jumlah_halaman', 'jumlah_halaman', 'trim|required');
		$this->form_validation->set_rules('sinopsis', 'sinopsis', 'trim|required');
		$this->form_validation->set_rules('stok', 'stok', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');

		$object['pegawai'] = $this->buku_model->getBuku($id);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('edit_buku_view', $object);
		} else {
			$this->buku_model->updateById($id);
			$this->load->view('edit_buku_sukses');
		}
		
	}

	public function delete($id)
	{
		$this->load->model('buku_model');
		$this->buku_model->delete($id);
		redirect('buku');

		
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */