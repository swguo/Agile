<footer id="fh5co-footer">
	<div class="container">
		<div class="row">
			<img src="<?=base_url('assets/images/logo.png')?>"  style="width:200px" />
		</div>
		<div class="row">
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead">關於金衣</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('about/index')?>">公司簡介</a></li>
						<li><a href="<?=site_url('about/history')?>">發展沿革</a></li>
						<li><a href="<?=site_url('about/organization')?>">公司組織</a></li>						
						<li><a href="<?=site_url('about/patent')?>">得獎專利</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead">最新消息</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('news/index')?>">最新消息</a></li>
						<li><a href="<?=site_url('news/history')?>">歷史消息</a></li>
						<li><a href="<?=site_url('news/promotion')?>">產品促銷</a></li>
						<li><a href="<?=site_url('news/active')?>">活動花絮</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead ">產品資訊</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('product/index')?>">產品介紹</a></li>
						<li><a href="<?=site_url('product/batch')?>">原料購買</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead ">服務資訊</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('service/index')?>">顧客服務</a></li>
						<li><a href="<?=site_url('service/advisory')?>">健康諮詢</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead ">人力資源</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('hr/recruitment#hr1')?>">公司福利</a></li>
						<li><a href="<?=site_url('hr/recruitment#hr2')?>">工作機會</a></li>
						<li><a href="<?=site_url('hr/recruitment#hr3')?>">交通資訊</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead ">聯絡我們</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('contact/contactme')?>">聯絡我們</a></li>
						<li><a href="<?=site_url('contact/traffic')?>">交通資訊</a></li>
					</ul>
				</div>
			</div>
		</div>

		
	</div>
</footer>
<a href="#" id="topButton"><span class="glyphicon glyphicon-arrow-up"></span></a>
<script type="text/javascript">
	$('#topButton').click(function() {
		$('html,body').animate({
			scrollTop: 0
		}, 1000);
		return false;
	});
</script>


<!-- jQuery Easing -->
<script src="<?=base_url('assets/js/jquery.easing.1.3.js')?>"></script>
<!-- Bootstrap -->
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<!-- Owl carousel -->
<script src="<?=base_url('assets/js/owl.carousel.min.js')?>"></script>
<!-- Waypoints -->
<script src="<?=base_url('assets/js/jquery.waypoints.min.js')?>"></script>
<!-- Magnific Popup -->
<script src="<?=base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
<!-- Main JS -->
<script src="<?=base_url('assets/js/main.js')?>"></script>
<!-- 繁體簡體 -->
<script src="<?=base_url('assets/js/tw_cn.js')?>"></script>
<script type="text/javascript">
	var defaultEncoding = 1;
	var translateDelay = 0;
	var cookieDomain = 'http://localhost/nugen/index.php/';
	var msgToTraditionalChinese = "繁體";
	var msgToSimplifiedChinese = "简体";
	var translateButtonId = "translateLink";
	translateInitilization();
</script>

</body>
</html>
<script type="text/javascript">
	$('#abgne_fade_pic').height($('#abgne_fade_pic a img').height());
	$(window).resize(function() {
		$('#abgne_fade_pic').height($('#abgne_fade_pic a img').height());
	});
</script>