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
				//a¡Â?a?!c£g|aR¢Fa??
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
				$this->email->subject('a£á?Nugena£á¡¥ Purchase order #'.$order_id);
=======
				$this->email->subject('Ã£â‚¬ÂNugenÃ£â‚¬â€˜ Purchase order #'.$order_id);
>>>>>>> origin/develper
				$this->email->message($msg);
				$this->email->send();
				// echo $this->email->print_debugger();
			}else{
				$product_info="­qÁÊ©ú²Ó¦p¤U : <br>";
				foreach ($orderArray as $key => $value) {
					if($value > 0){
						$product_info .= $nameArray[$key]." : ".$value." kilo  kilo x ¥x¹ô ".$priceArray[$key]." ¤¸<br>";
						$total += $priceArray[$key]*$value;
					}
				}
<<<<<<< HEAD
				$product_info .= "Á`ª÷ÃB : ¥x¹ô ".$total." ¤¸<br>";
				$msg = $name."¥ı¥Í/¤p©j ±z¦n:<br>·PÁÂ±zªº­qÁÊ¡A¥H¤U¬O±zªº­q³æ¸ê°T<br>";
				$msg .= "­q³æ½s¸¹ : ".$order_id."<br>";
				$msg .= "©m¦W : ".$name."<br>";
				$msg .= "Email:".$email."<br>";
				$msg .= "¹q¸Ü¡G".$phone."<br>";
				$msg .= "¦a§}¡G".$address."<br>";
				$msg .= "³Æµù : ".$note."<br><hr><br>";
				$msg .= $product_info;
				$this->session->set_flashdata('msg', $name.'±z¦n¡AÁÂÁÂ±zªº¤U³æ¡C');
				$this->email->from('pucmrdb@gmail.com', "«O§A°·±d¬ì¾ÇªÑ¥÷¤½¥q");
				$this->email->to($email);
				$this->email->subject('¡i­q³æ½T»{¡j');
=======
				$product_info .= "ç¸½é‡‘é¡ : å°å¹£ ".$total." å…ƒ<br>";

				$msg = $name."å…ˆç”Ÿ/å°å§ æ‚¨å¥½:<br>æ„Ÿè¬æ‚¨çš„è¨‚è³¼ï¼Œä»¥ä¸‹æ˜¯æ‚¨çš„è¨‚å–®è³‡è¨Š<br>";
				$msg .= "è¨‚å–®ç·¨è™Ÿ : ".$order_id."<br>";
				$msg .= "å§“å : ".$name."<br>";
				$msg .= "Email:".$email."<br>";
				$msg .= "é›»è©±ï¼š".$phone."<br>";
				$msg .= "åœ°å€ï¼š".$address."<br>";
				$msg .= "å‚™è¨» : ".$note."<br><hr><br>";

				$msg .= $product_info;
				$this->session->set_flashdata('msg', $name.'æ‚¨å¥½ï¼Œè¬è¬æ‚¨çš„ä¸‹å–®ã€‚');

				$this->email->from('pucmrdb@gmail.com', "ä¿ä½ å¥åº·ç§‘å­¸è‚¡ä»½å…¬å¸");
				$this->email->to($email);
				$this->email->subject('ã€è¨‚å–®ç¢ºèªã€‘');
>>>>>>> origin/develper
				$this->email->message($msg);
				$this->email->send();
				// echo $this->email->print_debugger();
			}
<<<<<<< HEAD
			$this->session->set_flashdata('message_data',
				array('type' => 'success', 'message' => '·PÁÂ±zªº¤U³æ¡A¤w±H½T»{«H¦Ü±zªº«H½c'));
			redirect(site_url("material/batchex"));
		}
	}
=======


			$this->session->set_flashdata('message_data',
				array('type' => 'success', 'message' => 'æ„Ÿè¬æ‚¨çš„ä¸‹å–®ï¼Œå·²å¯„ç¢ºèªä¿¡è‡³æ‚¨çš„ä¿¡ç®±'));
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
