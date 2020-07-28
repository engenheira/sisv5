<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Category
 */
class CategoryModel extends CI_Model
{

	public function find(){
		$this->db->where("state", "1");
		$results = $this->db->get("categories");
		return $results->result();
	}

}
