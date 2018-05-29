<footer id="fh5co-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="<?=base_url('assets/images/logo.png')?>"  style="width:100px" />
			</div>
			<div class="col-md-9">
				<div class="row">
					<p style="font-size:20px"><b>Copyright &copy; Agile</b></p>
				</div>
				<div class="row">
					<p style="font-size:20px">Developer: 郭士煒, 謝政倫, 陳柏維, 吳冠瑋, 屠翔鈺, 羅士傑, 胡建安, 許懷中.</p>
				</div>
				<div class="row">
					<p style="font-size:20px">
						<a href="<?=site_url('product/index')?>">產品介紹</a>
						, 
						<a href="<?=site_url('material/index')?>">批次購買</a>
					</p>
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