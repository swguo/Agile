<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Material extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('material_model');
		$this->load->model('product_model');		
	}
	
	// ?�次購買-?�台
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
	// ?�次購買-後台
	public function backIndex()
	{		
    $filter = $this->input->post('filter','');
    if('' != $filter){
      $filter = array(
        'name'     => $this->input->post('name',''),
        'startTime'=> $this->input->post('startTime',''),
        'endTime'  => $this->input->post('endTime',''),
        'shipped'  => $this->input->post('shipped',''),
      );
      $data = $this->material_model->get_filted_order($filter);
    } else {
      $data = $this->material_model->get_orderForm();
    }
    if($data == false){
      $data = array();
    } 
		$this->load->view('back_header');
		$this->load->view('material/b_index',array('data' => $data, 'filter' => $filter));
	}
   
	public function shipping(){
    $id = $this->input->post('id','');
    $data = $this->material_model->shipping($id);
    redirect('material/backIndex', 'location', 301); 
  }
}
