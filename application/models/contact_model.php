<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//取得所有新聞
	public function get_all_contact()
	{
		$this->db->select('*');
		$this->db->from('contact');
		$this->db->order_by('id', 'desc');
		$this->db->limit(10);
		$query = $this->db->get();

		return $query;
	}
	//取得所有新聞
	public function get_contact_time($time)
	{
		$this->db->select('*');
		$this->db->from('contact');
		$this->db->like('time',$time);
		$this->db->order_by('id', 'desc');
		$this->db->limit(10);
		$query = $this->db->get();

		return $query;
	}

	
	public function insert_contact($content,$name,$email,$phone,$title)
	{

		$data = array(
			'content' => $content,
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'title' => $title,
			);

		$query= $this->db->insert('contact', $data);	

		//判斷insert是否成功
		if($query == TRUE){
			return TRUE;
		} else{
			return FALSE;
		}
	}

}
