<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Bigbuy_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		$this->load->databass();
	}
	
	//取得產品資訊
	public function get($id = "") {
		$sql = "SELECT * from books";
		$query = $this->db->query($sql);
	}
	
	//新增批次購買訂單
	public function add ($obj) {
		$sql = "INSERT INTO bigbuy (name,mail,phone,address,pd_1,pd_2,pd_3,pd_4,pd_5,pd_6,pd_7,pd_8) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,)";
		$query = $this->db->query($sql,array($obj["name"],$obj["mail"],$obj["phone"],$obj["address"],$obj["pd_1"],$obj["pd_2"],$obj["pd_3"],$obj["pd_4"],$obj["pd_5"],$obj["pd_6"],$obj["pd_7"],$obj["pd_8"]));
	}	
}
?>