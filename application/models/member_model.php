<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login($account, $password)
	{
		$where = 'account = "'.$account.'" AND password = "'.$password.'"';
		$this->db->where($where);
		$query = $this->db->get('member');

		if($query->result()>0){
			return TRUE;
		}else
		return FALSE;
	}
}
