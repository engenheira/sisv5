<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("CategoryModel");
	}
	public function index()
	{
		$data = array(
			'categories' => $this->CategoryModel->find(),
		);
		$this->load->view('partials/header');
		$this->load->view('partials/aside');
		$this->load->view('admin/categories/list', $data);
		$this->load->view('partials/footer');

	}


}
