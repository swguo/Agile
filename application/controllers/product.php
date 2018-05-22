<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
		parent:: __construct();		
		$this->load->model('product_model');	
	}

	// 產品介紹-前台
	public function index() {	
		$result = $this->product_model->getbackend();
		$this->load->view('header');
		$this->load->view('product/index', array("result"=>$result));
		$this->load->view('footer');		
	}
	public function backIndex()
	{		
		$result = $this->product_model->getbackend();
		$this->load->view('back_header');
		$this->load->view('product/b_index',array("result"=>$result));
	}
	public function edit(){
		$this->load->helper('url');
		$id = $this->uri->segment(3,0);
		$result = $this->product_model->getbyid($id);

		$this->load->view('back_header');
		$this->load->view('product/edit',array("result"=>$result));
	}
	public function update(){
		$this->load->helper('url');
		$id = $this->uri->segment(3,0);
		$name = $this->input->post('name');
		$name_en = $this->input->post('name_en');
		$note = $this->input->post('note');
		$note_en = $this->input->post('note_en');
		$buyLink = $this->input->post('buyLink');		
		$price = $this->input->post('price');

		$config['upload_path'] = './assets/uploads/product';
		$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_size']	= '100';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload',$config);

		if (!$this->upload->do_upload())
		{
			//$error = array('error' => $this->upload->display_errors());
			//print_r($error);			
			$obj = array(
				'id'=>$id,
				'name'=>$name,
				'name_en'=>$name_en,
				'note'=>$note,
				'price'=>$price,
				'note_en'=>$note_en,				
				'buyLink'=>$buyLink,				
			);
			
			if( $this->product_model->update($obj) !=false){
				redirect('product/backIndex');
			}else{
				redirect('product/backIndex');
				//echo $this->db->last_query();
			}
		}
		else
		{
			$data = $this->upload->data();
			//print_r($data);
			$img = "assets/uploads/product/".$data['file_name']; 
			$obj = array(
				'id'=>$id,
				'name'=>$name,
				'name_en'=>$name_en,
				'note'=>$note,
				'price'=>$price,
				'note_en'=>$note_en,				
				'buyLink'=>$buyLink,
				'img'=>$img
			);
			
			if( $this->product_model->update($obj) !=false){
				redirect('product/backIndex');
			}else{
				echo $this->db->last_query();
			}

		}

	}
	public function add(){
			$this->load->view('back_header');
			$this->load->view('product/add');
	}
	public function del(){
		$this->load->helper('url');
		$id = $this->uri->segment(3,0);
		$obj = array(
				'id'=>$id
			);
			
			if( $this->product_model->delete($obj) !=false){
				redirect('product/backIndex');
			}else{
				echo $this->db->last_query();
			}
	}

	public function add_action(){
		$name = $this->input->post('name');
		$name_en = $this->input->post('name_en');
		$note = $this->input->post('note');
		$note_en = $this->input->post('note_en');
		$buyLink = $this->input->post('buyLink');		
		$price = $this->input->post('price');

		$config['upload_path'] = './assets/uploads/product';
		$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_size']	= '100';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload',$config);

		if (!$this->upload->do_upload())
		{
			//$error = array('error' => $this->upload->display_errors());
			//print_r($error);			
			//$this->load->view('upload_form'，$error);
			$img= "assets/uploads/product/Desert.jpg";
			$obj = array(
				'name'=>$name,
				'name_en'=>$name_en,
				'note'=>$note,
				'price'=>$price,
				'note_en'=>$note_en,				
				'buyLink'=>$buyLink,
				'img'=>$img
			);
			if( $this->product_model->add($obj) !=false){
				redirect('product/backIndex');
			}else{
				echo $this->db->last_query();
			}
		}
		else
		{
			$data = $this->upload->data();
			//print_r($data);
			$img = "assets/uploads/product/".$data['file_name']; 
			$obj = array(
				'name'=>$name,
				'name_en'=>$name_en,
				'note'=>$note,
				'price'=>$price,
				'note_en'=>$note_en,				
				'buyLink'=>$buyLink,
				'img'=>$img
			);
			
			if( $this->product_model->add($obj) !=false){
				redirect('product/backIndex');
			}else{
				echo $this->db->last_query();
			}

		}
	}
}
