<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Material extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('material_model');
		$this->load->model('product_model');
	}
<<<<<<< HEAD
=======


>>>>>>> origin/develper
	public function index()
	{
			$this->load->view('header');
			$this->load->view('material/index');
			$this->load->view('footer');		
	}
	public function batchex()
        {
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
<<<<<<< HEAD
=======

>>>>>>> origin/develper
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
<<<<<<< HEAD
=======

>>>>>>> origin/develper
			if($this->session->userdata('lg') == "en"){
				$product_info="Your order details : <br>";
				foreach ($orderArray as $key => $value) {
					if($value > 0){
						$product_info .= $nameArray_en[$key]." : ".$value." kilo x ".$priceArray[$key]." NT dollars<br>";
						$total += $priceArray[$key]*$value;
					}
				}
				$product_info .= "Total amount : ".$total." NT dollars<br>";
				//a��?a?!c�g|aR�Fa??
				$msg = "Dear ".$name." :<br>Thank you for your order, we will be in contact with you soon : <br>";
				$msg .= "Order ID : ".$order_id."<br>";
				$msg .= "Name : ".$name."<br>";
				$msg .= "Email :".$email."<br>";
				$msg .= "Phone :".$phone."<br>";
				$msg .= "Address :".$address."<br>";
				$msg .= "Note : ".$note."<br><hr><br>";
				$msg .= $product_info;
<<<<<<< HEAD
=======

>>>>>>> origin/develper
				$this->session->set_flashdata('msg', $name.' thank your ordering');
				//$this->email->from('nugen.tw@msa.hinet.net', "Nugen Bioscience(Taiwan)");
				$this->email->from('pucmrdb@gmail.com', "Nugen Bioscience(Taiwan)");
				$this->email->to($email);
<<<<<<< HEAD
				$this->email->subject('a��?Nugena�ᡥ Purchase order #'.$order_id);
=======
				$this->email->subject('ã€Nugenã€‘ Purchase order #'.$order_id);
>>>>>>> origin/develper
				$this->email->message($msg);
				$this->email->send();
				// echo $this->email->print_debugger();
			}else{
				$product_info="�q�ʩ��Ӧp�U : <br>";
				foreach ($orderArray as $key => $value) {
					if($value > 0){
						$product_info .= $nameArray[$key]." : ".$value." kilo  kilo x �x�� ".$priceArray[$key]." ��<br>";
						$total += $priceArray[$key]*$value;
					}
				}
<<<<<<< HEAD
				$product_info .= "�`���B : �x�� ".$total." ��<br>";
				$msg = $name."����/�p�j �z�n:<br>�P�±z���q�ʡA�H�U�O�z���q���T<br>";
				$msg .= "�q��s�� : ".$order_id."<br>";
				$msg .= "�m�W : ".$name."<br>";
				$msg .= "Email:".$email."<br>";
				$msg .= "�q�ܡG".$phone."<br>";
				$msg .= "�a�}�G".$address."<br>";
				$msg .= "�Ƶ� : ".$note."<br><hr><br>";
				$msg .= $product_info;
				$this->session->set_flashdata('msg', $name.'�z�n�A���±z���U��C');
				$this->email->from('pucmrdb@gmail.com', "�O�A���d��Ǫѥ����q");
				$this->email->to($email);
				$this->email->subject('�i�q��T�{�j');
=======
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
>>>>>>> origin/develper
				$this->email->message($msg);
				$this->email->send();
				// echo $this->email->print_debugger();
			}
<<<<<<< HEAD
			$this->session->set_flashdata('message_data',
				array('type' => 'success', 'message' => '�P�±z���U��A�w�H�T�{�H�ܱz���H�c'));
			redirect(site_url("material/batchex"));
		}
	}
=======


			$this->session->set_flashdata('message_data',
				array('type' => 'success', 'message' => '感謝您的下單，已寄確認信至您的信箱'));
			redirect(site_url("material/batchex"));
		}

	}

>>>>>>> origin/develper
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
<<<<<<< HEAD
=======


>>>>>>> origin/develper
	public function shipping(){
	    $id = $this->input->post('id','');
	    $data = $this->material_model->shipping($id);
	    redirect('material/backIndex', 'location', 301);
  	}
}
