<?php

/**
* 
*/
class User extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function login($password,$username){
		$this->db->select('id_user,username,password,level');
		$this->db->from('user');
		$this->db->where('username',$username);
		$this->db->where('password',MD5($password));
		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}
	
	public function daftar()
	{
		$level = "user";
		$object = array(
			'username'=> $this->input->post('username'),
			'email'=> $this->input->post('email'),
			'alamat'=> $this->input->post('alamat'),
			'level'=> $level,
			'password'=>md5($this->input->post('password'))
		);
		$this->db->insert('user',$object);
		
	}
	
}




?>
