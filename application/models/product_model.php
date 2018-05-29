<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	public function get($id = "")
	{
		$sql = "SELECT * from product";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
            return $query;
        }else{
            return "false"; 
        }
	}
	public function add($obj){
		//$sql = "INSERT INTO product (name,name_en,note,note_en,price,img,buyLink) VALUES (?,?,?,?,?,?,?)";
		$data = array("name"=>$obj['name'],
					"name_en"=>$obj['name_en'],
					"note"=>$obj['note'],
					"note_en"=>$obj['note_en'],
					"price"=>$obj['price'],
					"img"=>$obj['img'],
					"buyLink"=>$obj['buyLink']);

		$this->db->insert("product",$data);
		//$query = $this->db->query($sql,	);
		if($this->db->insert_id()>0){
			return true;
		}else{
			return false;
		}
	}
	public function update($obj)
	{
		if(!empty($obj['img'])){
			$data = array("name"=>$obj['name'],
					"name_en"=>$obj['name_en'],
					"note"=>$obj['note'],
					"note_en"=>$obj['note_en'],
					"price"=>$obj['price'],
					"img"=>$obj['img'],
					"buyLink"=>$obj['buyLink']);
		}else{
			$data = array("name"=>$obj['name'],
					"name_en"=>$obj['name_en'],
					"note"=>$obj['note'],
					"note_en"=>$obj['note_en'],
					"price"=>$obj['price'],					
					"buyLink"=>$obj['buyLink']);
		}

		$this->db->where('id', $obj["id"]);
		$this->db->update('product', $data); 
		if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false; 
        }
	}
	public function getbyid($id=1){
		$sql = "SELECT * from product where id = ? ";
		$query = $this->db->query($sql,array($id));
		if ($query->num_rows() > 0) {
            return $query;
        }else{
            return "false"; 
        }
	}
	public function delete($obj){
		$sql = "DELETE from product where id = ? ";
		$query = $this->db->query($sql,array($obj["id"]));
		if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false; 
        }
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
 
   public function getHomeProduct(){
     $sql = "SELECT * FROM `product` ORDER BY `timestamp` DESC LIMIT 3";
     $query = $this->db->query($sql);
     if($query->num_rows() > 0){
       return $query;
     } else {
       return false;
     }
   }
	
}
