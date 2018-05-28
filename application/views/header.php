<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Title</title>
	<!-- jQuery -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
	<!-- Modernizr JS -->
	<script src="<?=base_url('assets/js/modernizr-2.6.2.min.js')?>"></script>
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url('assets/css/animate.css')?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url('assets/css/icomoon.css')?>">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/owl.theme.default.min.css')?>">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?=base_url('assets/css/magnific-popup.css')?>">
	<!-- Theme Style -->
	<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/font.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/customer.css')?>">
	<script type="text/javascript" src="<?=base_url("assets/js/tinymce/tinymce.min.js")?>"></script>
	<!--Switch Button CSS Setting-->
	<style>
		.testswitch{  
			position: relative;
			float: left;
			width: 90px;
			margin: 0;
			-webkit-user-select:none;
			-moz-user-select:none;
			-ms-user-select: none;
		}
		.testswitch-checkbox{  
			display: none;
		}
		.testswitch-label{
			display: block;
			overflow: hidden;
			cursor: pointer;
			border: 2px solid #999999;
			border-radius: 20px;
		}
		.testswitch-inner{
			display: block;
			width: 200%;
			margin-left: -100%;
			transition: margin 0.3s ease-in 0s;
		}
		.testswitch-inner::before, .testswitch-inner::after{
			display: block;
			float: right;
			width: 50%;
			height: 30px;
			padding: 0;
			line-height: 30px;
			font-size: 14px;
			color: white;
			font-family:
			Trebuchet, Arial, sans-serif;
			font-weight: bold;
			box-sizing: border-box;
		}
		.testswitch-inner::after{  
			content: attr(data-on);
			padding-left: 20px;
			background-color: #00e500;
			color: #FFFFFF;
		}  
		.testswitch-inner::before{  
			content: attr(data-off);
			padding-right: 8px;
			background-color: #EEEEEE;
			color: #999999;
			text-align: right;
		}  
		.testswitch-switch{  
			position: absolute;
			display: block;
			width: 22px;
			height: 22px;
			margin: 4px;
			background: #FFFFFF;
			top: 12px;
			bottom: 0;
			right: 56px;
			border: 2px solid #999999;
			border-radius: 20px;
			transition: all 0.3s ease-in 0s;
		}
		.testswitch-checkbox:checked + .testswitch-label .testswitch-inner{  
			margin-left: 0;
		}  
		.testswitch-checkbox:checked + .testswitch-label .testswitch-switch{  
			right: 0px;
		}
	</style>
</head>
<body>
	<header id="fh5co-header" role="banner">
		<!-- mobile -->
		<nav class="navbar navbar-default" role="navigation" id="mobile_nav">
			<div class="container-fluid">
				<div class="navbar-header"> 
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="<?=site_url('home/index')?>"><img src="<?=base_url('assets/images/logo.png')?>"  style="margin-top:-5px;width:90px" /></a>
				</div>
				<div id="fh5co-navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?=site_url('product/index')?>">
								<span>產品介紹<span class="border"></span></span>
							</a>
						</li>
						<li>
							<a herf="<?=site_url('material/index')?>">
								<span>批次購買<span class="border"></span></span>
							</a>
						</li>
						<li>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<nav class="navbar navbar-default" role="navigation" id="web_nav">
			<div class="container-fluid">
				<div class="container">
					<div class="navbar-header"> 
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand" href="<?=site_url('home/index')?>"><img src="<?=base_url('assets/images/logo.png')?>"  style="margin-top:-5px;margin-left:-20px;width:90px" /></a>
					</div>
					<div id="fh5co-navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="mainmenu">
								<a href="<?=site_url('product/index')?>">
									<span>產品介紹<span class="border"></span></span>
									<span class="triangle"></span>
								</a>
							</li>
							<li class="mainmenu">
								<a href="<?=site_url('material/index')?>">
									<span>批次購買<span class="border"></span></span>
									<span class="triangle"></span>
								</a>
							</li>
							<li>
								<p></p>
								<input class="testswitch-checkbox" id="onoffswitch" type="checkbox">
								<label class="testswitch-label" for="onoffswitch">
									<span class="testswitch-inner" data-on="DRK" data-off="LIG"></span>
									<span class="testswitch-switch"></span>
								</label>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<div id="submenu">
		</div>
	</header>
	<!-- END .header -->
	<script type="text/javascript">
	$(document).ready(function(){
		$(".mainmenu").mouseenter(function(){
			$("#submenu").find("ul").hide();
			$(".mainmenu .triangle").hide();
			$("#submenu").show();
			$(this).find("ul").show();
			$(this).find("a .triangle").show();
		});
		$(".mainmenu").mouseleave(function(){
			$("#submenu").find("ul").hide();
			$(".mainmenu .triangle").hide();
			$("#submenu").hide();
			$(".mainmenu ul").hide();
			$(".triangle").hide();
		});
	});
	$(".tren").click(function(){
		var arr = location.pathname.split("/");
		var site = 0;
		for (var i = 0; i < arr.length; i++) {
			if(arr[i] == 'index.php'){
				site = i;
			}	
		};
		if(site == 0){
			document.location.href="<?=site_url('home/en/home/index')?>"
		}else{
			total = location.pathname.split("/").length;
			var x = '/'+location.pathname.split("/")[site+1]+'/'+location.pathname.split("/")[site+2];
			document.location.href="<?=site_url('home/en')?>"+x;
		}
	});
	$(function() {
		var pgurl = window.location.href;
		$(".nav li a").each(function(){
			if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
				$(this).parent().addClass("active");
		})
	});
	</script>
	<!--Event Controll
	$(document).ready(function(){
		$("#onoffswitch").on('click', function(){
			clickSwitch()
		});
		var clickSwitch = function() {  
			if ($("#onoffswitch").is(':checked')) {  
				console.log("DRK");  
			} else {  
				console.log("LIG");  
			}
		};
	});
	-->