<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Login extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('member_model');

		}

		 public function login(){
				session_start();
				if(isset($_SESSION["user"]) && $_SESSION["user"] != null){ //已經登入的話直接回首頁
					redirect(site_url("/material/backIndex")); //轉回首頁
					//$this->load->view("product/index");
					return true;
				}

				$this->load->view("login");
			}


		public function logining(){
				session_start();
				if(isset($_SESSION["user"]) && $_SESSION["user"] != null){ //已經登入的話
					redirect(site_url("material/backIndex")); //轉到product
					return true;
				}

				$account_in = trim($this->input->post("account",""));
				$password_in = trim($this->input->post("password",""));


				$result = $this->member_model->login($account_in,$password_in);
				//比對正確的話登入
				if($result){
					$_SESSION["user"] = 1;
					redirect(site_url("/login"));
				}

				redirect(site_url("/login"));



			}





		public function index(){
				$this->login();


		}

		public function logout(){
			session_start();
			session_destroy();
			redirect(site_url("/login")); //轉回登入頁
		}
	}
?>
