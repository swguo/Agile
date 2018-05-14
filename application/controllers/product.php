<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
		parent:: __construct();		
		$this->load->model('product_model');	
	}

	// 產品介紹-前台
	public function index()
	{	
			//$this->load->view('header');
			$this->load->view('product/index');
			//$this->load->view('footer');		
	}
	// 產品介紹-後台
	public function backIndex()
	{		
		$result = $this->product_model->getbackend();
		$this->load->view('back_header');
		$this->load->view('product/b_index',array("result"=>$result));
	}
}
