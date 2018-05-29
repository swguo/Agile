<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Lib {
	public function __get($var)
	{
		return get_instance()->$var;
	}
	public function __construct()
	{
		$this->load->database();
		$this->load->library('session');
	}

	public function month($month)
	{
		switch ($month) {
			case '01':
			$month = 'JAN';
			break;

			case '02':
			$month = 'FEB';
			break;

			case '03':
			$month = 'MAR';
			break;

			case '04':
			$month = 'APR';
			break;

			case '05':
			$month = 'MAY';
			break;

			case '06':
			$month = 'JUN';
			break;

			case '07':
			$month = 'JUL';
			break;

			case '08':
			$month = 'AUG';
			break;

			case '09':
			$month = 'SEP';
			break;

			case '10':
			$month = 'OCT';
			break;

			case '11':
			$month = 'NOV';
			break;

			case '12':
			$month = 'DEC';
			break;

			default:
			$month = 'ERR';
			break;
		}
		return $month;
	}

	public function memberAccess()
	{
		if(!$this->session->userdata('account')){
			redirect(site_url('home/index'));
		}
	}

	public function supervisorAccess()
	{
		if($this->session->userdata('permission') != ''){
			if($this->session->userdata('permission') > 2 ){
				redirect(site_url('home/index'));
			}
		}else{
			redirect(site_url('home/index'));
		}
	}

	public function adminAccess()
	{
		if($this->session->userdata('permission') && $this->session->userdata('permission') == 1){
		}else{
			redirect(site_url('home/index'));
		}
	}
}

/* End of file Someclass.php */