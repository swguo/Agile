<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	public function get($id = "")
	{
		$sql = "SELECT * from books";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
            return $query;
        }else{
            return "false"; 
        }
	}
	public function add($obj)
	{
		$sql = "INSERT INTO books (name,price,isdn) VALUES(?,?,?)";
		$query = $this->db->query($sql,array($obj["name"],$obj["price"],$obj["isdn"]));
		
	}
	public function update($id = "")
	{
		
	}
	public function getbackend(){
		$sql = "SELECT * from books";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
            return $query;
        }else{
            return "false"; 
        }

	}
	
}
