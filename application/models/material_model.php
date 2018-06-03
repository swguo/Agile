<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Material_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	//取得所有
	public function get_orderForm($id = "")
	{
		if($id == ""){
			$this->db->select('*');
			$this->db->from('orderform');
			$query = $this->db->get();
			if(empty($query->result())){
				return false;
			}else{
				foreach ($query->result() as $key => $row) {
					$data[$row->id]['id'] = $row->id;
					$data[$row->id]['name'] = $row->name;
					$data[$row->id]['email'] = $row->email;
					$data[$row->id]['phone'] = $row->phone;
					$data[$row->id]['address'] = $row->address;
					$data[$row->id]['note'] = $row->note;
					$data[$row->id]['is_delete'] = $row->is_delete;
					$data[$row->id]['date'] = $row->date;
					
					$data[$row->id]['data'] = $this->get_material($row->id)->result();
				}
			}
		}else{
			$query = $this->db->get_where('orderform', array('id' => $id))->row();
			$data[$query->id]['id'] = $query->id;
			$data[$query->id]['name'] = $query->name;
			$data[$query->id]['email'] = $query->email;
			$data[$query->id]['phone'] = $query->phone;
			$data[$query->id]['address'] = $query->address;
			$data[$query->id]['note'] = $query->note;
			$data[$query->id]['is_delete'] = $query->is_delete;
			$data[$query->id]['date'] = $query->date;
			$data[$query->id]['data'] = $this->get_material($query->id)->result();
		}
		return $data;
	}
	public function get_material($id = "")
	{
		$query = $this->db->query('SELECT c.id,orderForm_id,product_id,quantity,name,price FROM `crush_material` as c INNER JOIN `product` as p ON c.`product_id` = p.`id` WHERE `orderForm_id` = "'.$id.'"');
		return $query;
	}
	public function get_user_list($year,$month)
	{
		$start = $year.'-'.$month.'-'.'00';
		$end = $year.'-'.($month+1).'-'.'01';
		$query = $this->db->query('SELECT DISTINCT(name) as name FROM `orderform` where date >= "'.$start.'" AND date < "'.$end.'"');
		if($query->result()>0){
			return $query;
		}else 
		return FALSE;
	}
	
	public function get_year_list()
	{
		$query = $this->db->query('SELECT DISTINCT(date) as date FROM `orderform`');
		if($query->result()>0){
			return $query;
		}else 
		return FALSE;
	}
	public function get_filter_report($year,$month,$name)
	{
		$start = $year.'-'.$month.'-'.'00';
		$end = $year.'-'.($month+1).'-'.'01';
		$sql = 'SELECT o.name,c.product_id,SUM(product_id) as count,p.price,p.name as pname
		FROM `orderform` as o 
		INNER JOIN `crush_material` as c ON o.id = c.orderForm_id 
		INNER JOIN `product` as p ON c.product_id = p.id
		WHERE o.is_delete = 1 AND o.date >= "'.$start.'" AND o.date < "'.$end.'"
		GROUP BY c.product_id';
		$query = $this->db->query($sql);
		if(count($query)>0){
			return $query;
		}else 
		return FALSE;
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
  public function get_filted_order($filter){
      $endTime = '' != $filter['endTime'] ? $filter['endTime'] : "9999-12-31T23:59";
      
      $sql = "SELECT * FROM `orderform` WHERE `name` like '%{$filter['name']}%' AND `is_delete` <> '{$filter['shipped']}' AND `date` > '{$filter['startTime']}' AND `date` < '{$endTime}'";
      $query = $this->db->query($sql);
      
      if($query->num_rows() > 0){
				foreach ($query->result() as $key => $row) {
					$data[$row->id]['id'] = $row->id;
					$data[$row->id]['name'] = $row->name;
					$data[$row->id]['email'] = $row->email;
					$data[$row->id]['phone'] = $row->phone;
					$data[$row->id]['address'] = $row->address;
					$data[$row->id]['note'] = $row->note;
					$data[$row->id]['is_delete'] = $row->is_delete;
					$data[$row->id]['date'] = $row->date;
					
					$data[$row->id]['data'] = $this->get_material($row->id)->result();
				}			
		  }else{
        return false;
      } 
      return $data;
  }
  public function shipping($id=""){
    $sql = 'UPDATE `orderform` SET `is_delete`=not`is_delete` WHERE `id`="'.$id.'"';
		$query = $this->db->query($sql);
		return $query;
  }
}