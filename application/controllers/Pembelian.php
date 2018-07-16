<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
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
		}else{
			redirect('login','refresh');
		}
	}
	public function index()
	{
		$this->load->model('pembelian_model');
		$object["beli_list"] = $this->pembelian_model->getPembelian_List();
		$this->load->view('tampilPembelian', $object);
	}
	public function beli($id)
	{
		$this->load->model('buku_model');
		$object['buku']=$this->buku_model->getBuku($id);
		$this->load->view('pembelian',$object);
	}

	public function beliCart()
	{
		$data=array(
			'id'=>$this->input->post('id'),
			'name'=>$this->input->post('nama'),
			'price'=>$this->input->post('harga'),
			'gambar'=>$this->input->post('gambar'),
			'qty'=>$this->input->post('qty'),
		);
		$this->cart->insert($data);
		redirect('shoppingCart','refresh');
	}

	public function addCart()
	{
		$data['cart']=$this->cart->contents();
		$this->load->view('keranjang',$data);
	}

	public function prosesbeli($id)
	{
		$this->load->model('pembelian_model');
		$this->pembelian_model->prosesbeli($id);
		$this->load->model('buku_model');
		redirect('user/datatable','refresh');
	}

	

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */