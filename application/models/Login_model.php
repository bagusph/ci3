<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	public function validasi_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('user_admin');
		if($query->num_rows() == '1'){
			return true;
		}else{
			return false;
		}
	}

	public function getRole($username)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('user_admin');
		$result = $query->result_array()[0];
		return $result['role'];
	}

	public function signup($username, $password){
		$data = array(
			'username' => $username,
			'password' => $password,
			'role' => '2'
 		);
		$this->db->insert('user_admin',$data);
	}
}
