<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Login extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('member_model');
			$this->load->library('session');

		}

		 public function login(){
				session_start();
				/*print_r($this->session->userdata('user'));
				if($this->session->userdata('user')){ //已經登入的話直接回首頁
					redirect(site_url("/material/backIndex")); //轉回首頁
					//$this->load->view("product/index");
					//return true;
				}else{*/

					$this->load->view("login");

				/*}*/
			}


		public function logining(){
				session_start();
				/*if(isset($_SESSION["user"]) && $_SESSION["user"] != null){ //已經登入的話
					redirect(site_url("material/backIndex")); //轉到product
					return true;
				}*/

				$account_in = trim($this->input->post("account",""));
				$password_in = trim($this->input->post("password",""));


				$result = $this->member_model->login($account_in,$password_in);
				//比對正確的話登入
				if($result){
					$array=array("user"=>"admin");
					$this->session->set_userdata($array);
					redirect(site_url("/product/backIndex")); //轉回首頁
					//$_SESSION["user"] = 1;
					//redirect(site_url("/login"));
					//print_r($array);
				}else{
					
					redirect(site_url("/login"));
				}
				//print_r($this->session->userdata("user"));

				//



			}
		public function index(){
				$this->login();
		}

		public function logout(){
			$array=array("user"=>"");
			$this->session->unset_userdata($array);
			$this->session->sess_destroy();
			redirect(site_url("/login")); //轉回登入頁
		}
	}
?>
