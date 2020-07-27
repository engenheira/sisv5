<?php


class Auth extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model("User");
	}

	public function index()
	{
		if ($this->session->userdata("login")){
			redirect(base_url()."dashboard");
		}else{
			$this->load->view("admin/login");
		}
	}


	/**
	 * Faz login do usuário
	 */
	public function login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$response = $this->User->login($username, sha1($password));

		if (!$response){
			redirect(base_url());
		}else{
			$data = array(
				'id'    	=> $response->id,
				'name'  	=> $response->first_name,
				'last_name' => $response->last_name,
				'rol'   	=> $response->rol_id,
				'login' 	=> TRUE
			);

			$this->session->set_userdata($data);
			redirect(base_url()."dashboard");
		}
	}


	/**
	 * Encerra a sessão do usuário
	 */
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
