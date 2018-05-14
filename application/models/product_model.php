<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	public function get($id = "")
	{
		
	}
	public function add($id = "")
	{
		
	}
	public function update($id = "")
	{
		
	}
	public function getbackend(){
		$sql = "SELECT * from product";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
            return $query;
        }else{
            return "false"; 
        }

	}
	
}
