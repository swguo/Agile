<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

	public function __construct() {
		parent:: __construct();		
		$this->load->model('books_model');	
	}

	// 書籍介紹-前台
	public function index()
	{	
			$this->load->view('books/header');
			$result = $this->books_model->get();
			$this->load->view('books/index',array("result"=>$result));
			//$this->load->view('footer');		
	}
	// 書籍介紹-後台
	public function backIndex()
	{	
			$this->load->view('books/header');
			$result = $this->books_model->get();
			$this->load->view('books/b_index',array("result"=>$result));
			//$this->load->view('footer');		
	}
	public function add(){
			$this->load->view('books/header');
			$this->load->view('books/add');
	}
	public function add_action(){
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$isdn = $this->input->post('isdn');
		$obj = array(
			'name'=>$name,
			'price'=>$price,
			'isdn'=>$isdn
		);
		$this->books_model->add($obj);
		 redirect('../books/index');

	}
	public function example(){
		$this->load->view('books/header');
		$this->load->view('example');
	}
	
}
