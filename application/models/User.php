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
	
}




?>
