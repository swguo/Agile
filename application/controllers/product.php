<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
		parent:: __construct();		
		$this->load->model('Product_model');	
	}

	// 產品介紹-前台
	public function index() {	
		$result = $this->Product_model->getbackend();
		$this->load->view('header');
		$this->load->view('product/index', array("result"=>$result));
		$this->load->view('footer');		
	}
	// 產品介紹-後台
	public function backIndex() {		
		$this->load->view('back_header');
		$this->load->view('product/b_index');
	}
}
