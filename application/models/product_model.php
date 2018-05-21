<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//取得所有
	public function get_product($id = "")
	{
		if($id == ""){
			$this->db->select('*');
			$this->db->from('product');
			$this->db->order_by('product.id', 'desc');
			$query = $this->db->get();
		}else{
			$query = $this->db->get_where('product', array('id' => $id));
		}

		return $query;
	}

	//
	public function insert_product($name,$note,$price,$safety_stock,$img,$buyLink,$name_en,$note_en)
	{

		$data = array(
			'name' => $name,
			'note' => $note,
			'price' => $price,
			'safety_stock' => $safety_stock,
			'img' => $img,
			'buyLink' => $buyLink,
			'name_en' => $name_en,
			'note_en' => $note_en,
			);

		$query= $this->db->insert('product', $data);	

		//判斷insert是否成功
		if($query == TRUE){
			return TRUE;
		} else{
			return FALSE;
		}
	}

	//更新資料
	public function update_product($id,$name,$note,$price,$safety_stock,$buyLink,$name_en,$note_en,$img=""){

		if($img==""){
			$data = array(
				'name' => $name,
				'note' => $note,
				'price' => $price,
				'safety_stock' => $safety_stock,
				'buyLink' => $buyLink,
				'name_en' => $name_en,
				'note_en' => $note_en,
				);
		}else{
			$data = array(
				'name' => $name,
				'note' => $note,
				'price' => $price,
				'safety_stock' => $safety_stock,
				'buyLink' => $buyLink,
				'name_en' => $name_en,
				'note_en' => $note_en,
				'img' => $img
				);
		}

		$this->db->where('id', $id);
		$this->db->update('product', $data); 

	}

	//刪除資料
	public function delete_product($id)
	{
		$this->db->delete('product',array('id'=>$id));		
	}

	public function insert_orderForm($id,$name,$email,$phone,$address,$note)
	{

		$data = array(
			'id' => $id,
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
			'note' => $note,
			);

		$query= $this->db->insert('orderform', $data);	

		if($query == TRUE){
			return TRUE;
		} else{
			return FALSE;
		}
	}

	public function insert_material($orderForm_id,$product_id,$quantity)
	{
		$data = array(
			'orderForm_id' => $orderForm_id,
			'product_id' => $product_id,
			'quantity' => $quantity,
			);

		$query= $this->db->insert('crush_material', $data);	

		if($query == TRUE){
			return TRUE;
		} else{
			return FALSE;
		}
	}
	public function set_stock($id,$stock){
		$data = array(
			'stock' => $stock,
			);

		$this->db->where('id', $id);
		$this->db->update('product', $data); 
	}
}
