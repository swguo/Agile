<!DOCTYPE html>
<html>
	<head>
		<title>管理後臺</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css' media='all'>
		<link rel='stylesheet' type='text/css' href='<?=base_url('assets/css/customer.css');?>' media='all'>
		<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
		<style type="text/css">
			body {
				background: url('http://westernbusinessalliance.ca/images/%E5%81%A5%E5%BA%B7/%E5%81%A5%E5%BA%B7.jpg') fixed;
				background-size: cover;
				padding: 0;
				margin: 0;
			}
			p.form-title{
				font-family: 'Open Sans' , sans-serif;
				font-size: 30px;
				font-weight: 1000;
				text-align: center;
				color: #000000;
				margin-top: 5%;
				text-transform: uppercase;
				letter-spacing: 4px;
			}
			.wrap{
				width: 100%;
				height: 100%;
				min-height: 100%;
				position: absolute;
				top: 0;
				left: 0;
				z-index: 99;
			}
			form{
				width: 250px;
				margin: 0 auto;
			}
			form.login input[type="text"], form.login input[type="password"]{
				width: 100%;
				font-weight:bolder;
				margin: 0;
				padding: 5px 10px;
				background: 0;
				border: 0;
				border-bottom: 1px solid #000000;
				outline: 0;
				font-style: italic;
				font-size: 12px;
				font-weight: 400;
				letter-spacing: 1px;
				margin-bottom: 5px;
				color: #000000;
				outline: 0;
			}
			form.login input[type="submit"]{
				width: 100%;
				font-weight:bolder;
				font-size: 14px;
				text-transform: uppercase;
				font-weight: 500;
				margin-top: 16px;
				outline: 0;
				cursor: pointer;
				letter-spacing: 1px;
			}
			form.login input[type="submit"]:hover{
				transition: background-color 0.5s ease;
			}
			form.login label, form.login a{
				font-size: 12px;
				font-weight: 400;
				color: #FFFFFF;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div style="cursor:pointer">
					<img src="<?=base_url('assets/images/logo.png')?>" onClick="location.href='<?=site_url('home/index')?>'" style="max-height: 40px;padding:5px 0 0 10px;">
				</div>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<?php
					if($this->session->userdata('account')){
				?>
					<form class="navbar-form navbar-right" style="margin-right:5px;" action="<?=site_url('home/logout')?>" method="post">
						<div class="form-group" id="hello">
							<a>Hello, <?=$this->session->userdata('account')?></a>
						</div>
						<input type="submit" class="btn btn-primary" name="logoutBtn" value="登出">
					</form>
				<?php
					}
				?>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="pr-wrap">
					</div>
					<div class="wrap">
						<p class="form-title">
							後臺登入</p>
						<form class="login">
							<input type="text" placeholder="帳號" />
							<input type="password" placeholder="密碼" />
							<input type="submit" value="登入" class="btn btn-success btn-sm" />
						</form>
					</div>   
				</div>
			</div>
		</div>
	</body>
</html>