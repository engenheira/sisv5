<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class User
 */
class User extends CI_Model
{

	/**
	 * busca usuário especifíco na base
	 * @param $username
	 * @param $password
	 * @return object| bool
	 */
	public function login($username, $password)
	{
		$this->db->where("username", $username);
		$this->db->where("password", $password);

		$data = $this->db->get("users");

		if ($data->num_rows() > 0){
			return $data->row();
		}else{
			return false;
		}
	}

}
