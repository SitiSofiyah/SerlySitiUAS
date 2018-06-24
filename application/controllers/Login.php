<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('loginView');
	}

	public function cekDB($password)
	{
		$this->load->model('user');
		$username=$this->input->post('username');
		$result=$this->user->login($username,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $rows ) {
				$sess_array=array(
					'id_user'=>$rows->id_user,
					'username'=>$rows->username,
					'level'=>$rows->level);
				$this->session->set_userdata('logged_in',$sess_array);
			} 
				return true;	
		}else{
			$this->form_validation->set_message('cekDB',"Login Gagal");
			return false;
		}
	}

	
	public function cekLogin()
	{
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required|callback_cekDB');
		if($this->form_validation->run()==false){
			$this->load->view('loginView');
		}else{
			echo"login berhasil";
		}
	}
	
	public function daftar()
	{
		$this->load->view('daftar');
	}

	public function insert()
	{
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		

		if($this->form_validation->run()==FALSE){
			$this->load->view('daftar');
		}else{
			$this->load->model('User');
			$this->User->daftar();
			$this->load->view('loginView');
			
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}


	
