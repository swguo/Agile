<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Material extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('material_model');
		$this->load->model('product_model');		
	}
	
	// 批次購買-前台
	public function index()
	{	
			//$this->load->view('header');
			$this->load->view('material/index');
			//$this->load->view('footer');		
	}
	public function batchex()
        {
               $data = $this->product_model->get();
                $this->load->view('header');
                $this->load->view('product/batchex',array('data' => $data));
                $this->load->view('footer');
        }
	// 批次購買-後台
	public function backIndex()
	{		
		$this->load->view('back_header');
		$this->load->view('material/b_index');
	}
	
}
