<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
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

	function remove($rowid) {
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		
		redirect('cart/addCart');
	}	

	public function index()
	{
		$this->load->model('buku_model');
		$data['product']=$this->buku_model->getBuku_list();
		$data['cart']=$this->cart->contents();
		$this->load->view('dataCart',$data);
	}

	public function beliCart($id)
	{
		$this->load->model('buku_model');
		$produk = $this->buku_model->getBuku($id);
		$data=array(
			'id'=>$id,
			'name'=>$produk->judul,
			'price'=>$produk->harga,
			'stok'=>$produk->stok,
			'qty'=>1,
			'gambar'=>$produk->gambar
			
		);
		
		$this->cart->insert($data);
		redirect('user/datatable');
	}
	public function update() {
		$i=1;
		$b = $this->input->post('qty'.$i);
		$c = $this->input->post('stok'.$i);
		foreach($this->cart->contents() as $items)
		{
			if($this->input->post('qty'.$i) > $this->input->post('stok'.$i))
			{
				echo "<script> alert('Stok tidak memenuhi!');
				window.location.href='../cart/addcart';</script>";
			}else{
				$this->cart->update(array('rowid'=>$items['rowid'],'qty'=>$_POST['qty'.$i]));
				echo "<script>
				window.location.href='../cart/addcart';</script>";
			}	
			$i++;
		}
		
	}

	public function checkout(){
		$this->load->model('pembelian_model');
		if($this->session->userdata('logged_in')){
			$session_data=$this->session->userdata("logged_in");
			$data['id_user']=$session_data['id_user'];
		}
		if($this->session->userdata('id_user')=='null'){
			redirect('login');
		}else{
			//order
			$order=array(
				'tgl_beli'=>date('y-m-d'),
				'id_user'=>$session_data['id_user'],
				'status'=>'tunggu',
				'totalBayar'=>$this->cart->total());
			$orderId=$this->pembelian_model->pembelian($order);

			//orderdetail'
			foreach ($this->cart->contents() as $items) {
				$orderdetail=array(
				'id_buku'=>$items['id'],
				'id_pembelian'=>$orderId,
				'jumlah'=>$items['qty'],
				'totalHarga'=>$items['price']*$items['qty']);

				$this->pembelian_model->detailPembelian($orderdetail);

				$this->cart->destroy();
			}		
		}
		$this->load->view('thanks');
	}
	
	public function addCart()
	{

		$data['cart']=$this->cart->contents();
		$this->load->view('keranjang',$data);
	}

	

	

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */