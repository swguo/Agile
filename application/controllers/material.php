<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Material extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('material_model');
		$this->load->model('product_model');

		
	}


	public function index()
	{
			$this->load->view('header');
			$this->load->view('material/index');
			$this->load->view('footer');		
	}
	public function batchex()
        {
        	if($this->session->userdata('user')!="admin"){	
				redirect(site_url("/login"));				
			}
                $data = $this->product_model->get();
                $this->load->view('header');
                $this->load->view('product/batchex',array('data' => $data));
                $this->load->view('footer');
        }

    public function sentMail()
	{
		if(isset($_POST['sentMail'])){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');
			$note = $this->input->post('note');
			// id
			$pidArray = $_POST["pid"];
			// quantity
			$orderArray = $_POST["order"];
			// name
			$nameArray = $_POST["name_tw"];
			// english name
			$nameArray_en = $_POST["name_en"];
			// price
			$priceArray = $_POST["price"];
			// id
			$order_id =date("Ym",time()).time();
			// total price
			$total = 0;
			//print_r($pidArray);
			// setting
			$this->load->library('email');

			$config['protocol'] = "smtp";
			$config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'pucmrdb@gmail.com';
            $config['smtp_pass'] = 'cmrdb_base@402';
			$config['mailtype'] = 'html';
			$config['charset'] = 'utf-8';
			$config['newline'] = "\r\n";
			$config['wordwrap'] = TRUE;
			$config['crlf'] = '\r\n';
			$this->email->initialize($config);

			// save
			$this->material_model->insert_orderForm($order_id,$name,$email,$phone,$address,$note);
			foreach ($orderArray as $key => $value) {
				if($value > 0){
					$this->material_model->insert_material($order_id,$pidArray[$key],$value);
				}
			}

			if($this->session->userdata('lg') == "en"){
				$product_info="Your order details : <br>";
				foreach ($orderArray as $key => $value) {
					if($value > 0){
						$product_info .= $nameArray_en[$key]." : ".$value." kilo x ".$priceArray[$key]." NT dollars<br>";
						$total += $priceArray[$key]*$value;
					}
				}
				$product_info .= "Total amount : ".$total." NT dollars<br>";
				//å¯„ä¿¡çµ¦å®¢æˆ¶
				$msg = "Dear ".$name." :<br>Thank you for your order, we will be in contact with you soon : <br>";
				$msg .= "Order ID : ".$order_id."<br>";
				$msg .= "Name : ".$name."<br>";
				$msg .= "Email :".$email."<br>";
				$msg .= "Phone :".$phone."<br>";
				$msg .= "Address :".$address."<br>";
				$msg .= "Note : ".$note."<br><hr><br>";
				$msg .= $product_info;

				$this->session->set_flashdata('msg', $name.' thank your ordering');
				//$this->email->from('nugen.tw@msa.hinet.net', "Nugen Bioscience(Taiwan)");
				$this->email->from('pucmrdb@gmail.com', "Nugen Bioscience(Taiwan)");
				$this->email->to($email);
				$this->email->subject('Purchase order #'.$order_id);
				$this->email->message($msg);
				$this->email->send();
				// echo $this->email->print_debugger();
			}else{

				$product_info="訂購明細如下 : <br>";
				foreach ($orderArray as $key => $value) {
					if($value > 0){
						$product_info .= $nameArray[$key]." : ".$value." kilo  kilo x 台幣 ".$priceArray[$key]." 元<br>";
						$total += $priceArray[$key]*$value;
					}
				}
				$product_info .= "總金額 : 台幣 ".$total." 元<br>";

				$msg = $name."先生/小姐 您好:<br>感謝您的訂購，以下是您的訂單資訊<br>";
				$msg .= "訂單編號 : ".$order_id."<br>";
				$msg .= "姓名 : ".$name."<br>";
				$msg .= "Email:".$email."<br>";
				$msg .= "電話：".$phone."<br>";
				$msg .= "地址：".$address."<br>";
				$msg .= "備註 : ".$note."<br><hr><br>";

				$msg .= $product_info;
				$this->session->set_flashdata('msg', $name.'您好，謝謝您的下單。');

				$this->email->from('pucmrdb@gmail.com', "保你健康科學股份公司");
				$this->email->to($email);
				$this->email->subject('【訂單確認】');
				$this->email->message($msg);
				$this->email->send();
				// echo $this->email->print_debugger();
			}


			$this->session->set_flashdata('message_data',
				array('type' => 'success', 'message' => '感謝您的下單，已寄確認信至您的信箱'));
			redirect(site_url("material/batchex"));
		}

	}
	public function filter_backIndex()
	{
		$this->lib->adminAccess();
		if($this->input->post("filter_btn")){
			$filter = 0;
			$filterString = "";
			$sql = "select * from orderform  ";
			if($this->input->post("filter_startTime")) {
				if($filter == 0){
					$sql .=  ' WHERE ';
				}
				$sql .= ' date > "'.$this->input->post("filter_startTime").'" ';
				$filterString[] = "開始時間：".$this->input->post("filter_startTime");
				$filter++;
			}
			if($this->input->post("filter_endTime")) {
				if($filter == 0){
					$sql .=  ' WHERE ';
				}
				if($filter > 0){
					$sql .=  ' AND ';
				}
				$sql .= ' date < "'.$this->input->post("filter_endTime").'" ';
				$filterString[] = "結束時間：".$this->input->post("filter_endTime");
				$filter++;
			}
			if($this->input->post("filter_status")) {
				if($filter == 0){
					$sql .=  ' WHERE ';
				}
				if($filter > 0 && $this->input->post("filter_status") < 2){
					$sql .=  ' AND ';
				}
				if($this->input->post("filter_status") == 1){
					$sql .= ' is_delete = "1" ';
					$filterString[] = "狀態：已出貨";
				}else if($this->input->post("filter_status") == 0){
					$sql .= ' is_delete = "0" ';
					$filterString[] = "狀態：待出貨";
				}else{
					$filterString[] = "狀態：全部";
				}
				
				$filter++;
			}
			if($this->input->post("filter_name")) {
				if($filter == 0){
					$sql .=  ' WHERE ';
				}
				if($filter > 0){
					$sql .=  ' AND ';
				}
				$sql .= ' name LIKE "%'.$this->input->post("filter_name").'%" ';
				$filterString[] = "名字：".$this->input->post("filter_name");
				$filter++;
			}
			$query = $this->db->query($sql);
			$data = array();
			foreach ($query->result() as $key => $row) {

				$data[$row->id]['id'] = $row->id;
				$data[$row->id]['name'] = $row->name;
				$data[$row->id]['email'] = $row->email;
				$data[$row->id]['phone'] = $row->phone;
				$data[$row->id]['address'] = $row->address;
				$data[$row->id]['note'] = $row->note;
				$data[$row->id]['is_delete'] = $row->is_delete;
				$data[$row->id]['date'] = $row->date;
				
				$data[$row->id]['data'] = $this->material_model->get_material($row->id)->result();
			}
			$this->load->view('back_header');
			$this->load->view('material/b_index',array('data' => $data,"filterString" => $filterString));
		}
	}
	public function backIndex()
	{
	    echo $filter = $this->input->post('filter','');
	    $data = array();
	    if('' != $filter){
	      $parm = array(
	        'name'     => $this->input->post('name',''),
	        'startTime'=> $this->input->post('startTime',''),
	        'endTime'  => $this->input->post('endTime',''),
	        'shipped'  => $this->input->post('shipped',''),
	      );
	      $data = $this->material_model->get_filted_order($parm);
	      //echo $this->db->last_query();
	      //print_r($data->result());
	      $this->load->view('back_header');
		  $this->load->view('material/b_index',array('data' => $data,'filter'=>$filter));
	    } else {
	      $data = $this->material_model->get_orderForm();
	      $this->load->view('back_header');
		  $this->load->view('material/b_index',array('data' => $data,'filter'=>$filter));
	    }
	    
		
	}


	public function shipping(){
	    $id = $this->input->post('id','');
	    $is_delete = $this->input->post('is_delete','');
	    
	    $this->material_model->shipping($id,$is_delete);
	    $data = $this->material_model->get_orderForm($id);
	    print_r($data);
	    if($data!=false){
	    	$this->session->set_flashdata('message_data',
				array('type' => 'success', 'message' => '狀態調整成功'));
	    	//redirect('material/backIndex', 'location', 301);
	    		$this->load->library('email');

				$config['protocol'] = "smtp";
				$config['smtp_host'] = 'ssl://smtp.gmail.com';
	            $config['smtp_port'] = '465';
	            $config['smtp_user'] = 'pucmrdb@gmail.com';
	            $config['smtp_pass'] = 'cmrdb_base@402';
				$config['mailtype'] = 'html';
				$config['charset'] = 'utf-8';
				$config['newline'] = "\r\n";
				$config['wordwrap'] = TRUE;
				$config['crlf'] = '\r\n';
				$this->email->initialize($config);
			
	    		$msg = $data[$id]['name']."先生/小姐 您好:<br>感謝您的訂購，以下是您的訂單資訊<br>";
				$msg .= "訂單編號 : ".$id."<br>";
				$sum=0;
				foreach ($data[$id]['data'] as $key => $value) {
					$msg .= "商品:".$value->name."<br>
							 數量:".$value->quantity."<br>
							 單價:".$value->price."<br>
							 小計:".($value->quantity*$value->price)."<br>
							 =============================================<br>";		
					$sum+=($value->quantity*$value->price);			 
				}
				$msg.="總計:".$sum;
				
				$this->email->from('pucmrdb@gmail.com', "保你健康科學股份公司");
				$this->email->to("swguo@gm.pu.edu.tw");//$data[$id]['email']);
				$this->email->subject('【訂單送出通知】'.$id);
				$this->email->message($msg);
				$this->email->send();
	    }else{
	    	$this->session->set_flashdata('message_data',
				array('type' => 'danger', 'message' => '狀態調整失敗'));
	    	//redirect('material/backIndex', 'location', 301);
	    }
	    
  	}


}
