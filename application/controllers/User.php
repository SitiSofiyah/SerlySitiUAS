<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data=$this->session->userdata("logged_in");
			$data['username']=$session_data['username'];
			$data['level']=$session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if(! $this->acl->is_public($current_controller)){
				if(! $this->acl->is_allowed($current_controller, $data['level'])){
					redirect('login/logout','refresh');
				}
			}
			$this->load->view('dashboardUser',$data);
		}else{
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$this->load->model('buku_model');
		$data["buku_list"] = $this->buku_model->getBuku_update();		
		$this->load->view('dashboardUser',$data);
	
	}

	public function datatable()
	{
		
		$this->load->model('buku_model');
		$data["buku_list"] = $this->buku_model->getBuku_list();
		$this->load->view('dataBuku',$data);
	
	}
	// public function create()
	// {
	// 	$this->load->model('kategori_model');
	// 	$this->load->model('Buku_model');
	// 	$object['kategori'] = $this->kategori_model->getKategori_list();
	// 	$this->load->model('buku_model');
	// 	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	// 	$this->form_validation->set_rules('pengarang', 'pengarang', 'trim|required');
	// 	$this->form_validation->set_rules('penerbit', 'penerbit', 'trim|required');
	// 	$this->form_validation->set_rules('tahun_terbit', 'tahun_terbit', 'trim|required');
	// 	$this->form_validation->set_rules('kategori', 'id_kategori', 'trim|required');
	// 	$this->form_validation->set_rules('jumlah_halaman', 'jumlah_halaman', 'trim|required');
	
	// 	$this->form_validation->set_rules('sinopsis', 'sinopsis', 'trim|required');
	// 	$this->form_validation->set_rules('stok', 'stok', 'trim|required');
	// 	$this->form_validation->set_rules('harga', 'harga', 'trim|required');


	// 	if ($this->form_validation->run() == FALSE) {
	// 		$this->load->view('tambah_buku_view',$object);
	// 	} else {
	// 		$config['upload_path']      ='./assets/uploads';
	// 		$config['allowed_types']    ='gif|jpg|png';
	// 		$config['max_size']         =1000000000;
	// 		$config['max_width']        =10240;
	// 		$config['max_height']       =7680;

	// 		$this->load->library('upload', $config);

	// 		if ( ! $this->upload->do_upload('userfile'))
	// 		{
	// 			$error = array('error' => $this->upload->display_errors());
	// 			$this->load->view('tambah_buku_view',$error);
	// 		}
	// 		else
	// 		{
	// 		$this->Buku_model->insertBuku();
	// 		$this->load->view('tambah_buku_sukses');
	// 		}
	// 	}

	// }
}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */