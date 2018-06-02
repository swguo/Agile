<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct() {
		parent:: __construct();
		$this->load->model('product_model');
	}

  public function index() {
		$result = $this->product_model->getHomeProduct();
		$this->load->view('header');
		$this->load->view('home', array("result"=>$result));
		$this->load->view('footer');
	}
}
