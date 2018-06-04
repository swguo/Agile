<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login($account, $password)
	{
		$this->db->where('account', $account);
		$this->db->where('password', $password);
		$query = $this->db->get('member');
		if($query->result()!=null){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}
