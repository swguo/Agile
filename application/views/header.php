<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>金衣生命科學股份有限公司</title>
	<!-- jQuery -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
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
							<a href="<?=site_url('about/index')?>">
								<span>關於金衣<span class="border"></span></span>
							</a>
						</li>
						<li>
							<a href="<?=site_url('news/index')?>">
								<span>最新消息<span class="border"></span></span>
							</a>
						</li>
						<li>
							<a href="<?=site_url('product/index')?>">
								<span>產品資訊<span class="border"></span></span>
							</a>
						</li>
						<li>
							<a href="<?=site_url('service/index')?>">
								<span>服務資訊<span class="border"></span></span>
							</a>
						</li>
						<li>
							<a href="<?=site_url('hr/recruitment')?>">
								<span>人力資源<span class="border"></span></span>
							</a>
						</li>
						<li>
							<a href="<?=site_url('contact/contactme')?>">
								<span>聯絡我們<span class="border"></span></span>
							</a>
						</li>
						<li>
							<a href="#" class="tren">
								<span>English<span class="border"></span></span>
							</a>
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
								<a href="<?=site_url('about/index')?>">
									<span>關於金衣<span class="border"></span></span>
									<span class="triangle"></span>
								</a>
								<ul class="menu" style="width:470px;">
									<li><a href="<?=site_url('about/index')?>">公司簡介</a></li>
									<li><a href="<?=site_url('about/history')?>">發展沿革</a></li>
									<li><a href="<?=site_url('about/organization')?>">公司組織</a></li>									
									<li><a href="<?=site_url('about/patent')?>">得獎專利</a></li>
								</ul>
							</li>
							<li class="mainmenu">
								<a href="<?=site_url('news/index')?>">
									<span>最新消息<span class="border"></span></span>
									<span class="triangle"></span>
								</a>
								<ul class="menu" style="width:470px;">
									<li><a href="<?=site_url('news/index')?>">最新消息</a></li>
									<li><a href="<?=site_url('news/history')?>">歷史消息</a></li>
									<li><a href="<?=site_url('news/promotion')?>">產品促銷</a></li>
									<li><a href="<?=site_url('photo/index')?>">活動花絮</a></li>
								</ul>
							</li>
							<li class="mainmenu">
								<a href="<?=site_url('product/index')?>">
									<span>產品資訊<span class="border"></span></span>
									<span class="triangle"></span>
								</a>
								<ul class="menu" style="width:240px;">
									<li><a href="<?=site_url('product/index')?>">產品介紹</a></li>
									<li><a href="<?=site_url('product/batch')?>">原料購買</a></li>
								</ul>
							</li>
							<li class="mainmenu">
								<a href="<?=site_url('service/index')?>">
									<span>服務資訊<span class="border"></span></span>
									<span class="triangle"></span>
								</a>
								<ul class="menu" style="width:240px;">
									<li><a href="<?=site_url('service/index')?>">顧客服務</a></li>
									<li><a href="<?=site_url('service/advisory')?>">健康諮詢</a></li>
								</ul>
							</li>
							
							<li class="mainmenu">
								<a href="<?=site_url('hr/recruitment')?>">
									<span>人力資源<span class="border"></span></span>
								</a>
								<ul class="menu" style="width:360px;">
									<li><a href="<?=site_url('hr/recruitment#hr1')?>">公司福利</a></li>
									<li><a href="<?=site_url('hr/recruitment#hr2')?>">工作機會</a></li>
									<li><a href="<?=site_url('hr/recruitment#hr3')?>">交通資訊</a></li>
								</ul>
							</li>
							<li class="mainmenu">
								<a href="<?=site_url('contact/contactme')?>">
									<span>聯絡我們<span class="border"></span></span>
									<span class="triangle"></span>
								</a>
								<ul class="menu" style="width:240px;">
									<li><a href="<?=site_url('contact/contactme')?>">聯絡我們</a></li>
									<li><a href="<?=site_url('contact/traffic')?>">交通資訊</a></li>
								</ul>
							</li>
							<li class="mainmenu">
								<a id="translateLink">
									<span>簡体<span class="border"></span></span>
								</a>
							</li>
							<li class="mainmenu">
								<a class="tren">
									<span>English<span class="border"></span></span>
								</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</nav>
		<div id="submenu"></div>
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