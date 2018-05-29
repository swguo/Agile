<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Login extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			
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

				$account = trim($this->input->post("account",""));
				$password = trim($this->input->post("password",""));


				//正確的話
				if($account == "admin" && $account == "admin"){
					$_SESSION["user"] = 1;
				redirect(site_url("/login"));
				}


				redirect(site_url("/login"));
				

				//$_SESSION["user"] = $user;
				//redirect(site_url("/")); //轉回首頁
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