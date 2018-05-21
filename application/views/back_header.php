<!DOCTYPE html>
<html>
<head>
	<title>管理後臺</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>

	<link rel='stylesheet' type='text/css' href='<?=base_url('assets/bootstrap_origin/css/bootstrap.css');?>' media='all'>
	<link rel='stylesheet' type='text/css' href='<?=base_url('assets/bootstrap_origin/css/bootstrap-theme.css');?>' media='all'>
	<script src="<?=base_url('assets/bootstrap_origin/js/bootstrap.js')?>"></script>


	<link rel='stylesheet' type='text/css' href='<?=base_url('assets/css/customer.css');?>' media='all'>
	<link rel='stylesheet' type='text/css' href='<?=base_url('assets/css/font.css');?>' media='all'>
</head>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div style="cursor:pointer">
			<a href="<?=site_url('home/index')?>">
				
			</a>
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

<body>
	<div class="container-fluid" style="margin-top:60px;">
		<div class="row">
			<div class="col-sm-3 col-md-2" style="margin-top:20px;">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?=site_url('home/b_index')?>">首頁</a></li>
					<li><a href="<?=site_url('member/backIndex')?>">會員管理</a></li>
					<li><a href="<?=site_url('news/backIndex')?>">新聞管理</a></li>
					<li><a href="<?=site_url('contact/backIndex')?>">連絡我們管理</a></li>
					<li><a href="<?=site_url('hr/backIndex')?>">工作機會管理</a></li>
					<li><a href="<?=site_url('product/backIndex')?>">產品管理</a></li>
					<li><a href="<?=site_url('material/backIndex')?>">原料管理</a></li>
					<li><a href="<?=site_url('material/report')?>">列印報表</a></li>
					<li><a href="<?=site_url('about/backIndex')?>">發展沿革</a></li>
					<li><a href="<?=site_url('photo/backIndex')?>">活動花絮</a></li>
				</ul>
			</div>

