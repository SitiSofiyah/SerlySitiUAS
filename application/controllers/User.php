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

	public function profil()
	{
		
		$this->load->model('user_model');
		$data["user"] = $this->user_model->profil();
		$this->load->view('profil',$data);
	
	}

	public function update($id)
	{
		
		$this->load->model('user_model');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		
		$data['user'] = $this->user_model->profill($id);
		$object["user"] = $this->user_model->profil();

		
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('updateUser',$data);
		} else {
			$config['upload_path']      ='./assets/uploads';
			$config['allowed_types']    ='gif|jpg|png';
			$config['max_size']         =1000000000;
			$config['max_width']        =10240;
			$config['max_height']       =7680;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('gambar'))
			{
				$this->user_model->updateById($id);
				$this->load->view('profil',$object);
			}
			else
			{
				$this->user_model->updateById($id);
				$this->load->view('profil',$object);;
			}
			
		}
		
	
	}

	public function datatable()
	{
		
		$this->load->model('buku_model');
		$data["buku_list"] = $this->buku_model->getBuku_list();
		$this->load->view('dataBuku',$data);
	
	}
	}