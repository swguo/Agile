<footer id="fh5co-footer">
	<div class="container">
		<div class="row">
			<img src="<?=base_url('assets/images/logo.png')?>"  style="width:200px" />
		</div>
		<div class="row">
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead">About</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('about/index')?>">Introduction</a></li>
						<li><a href="<?=site_url('about/history')?>">History</a></li>
						<li><a href="<?=site_url('about/organization')?>">Organization</a></li>
						<li><a href="<?=site_url('about/patent')?>">Patent</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead">news</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('news/index')?>">News</a></li>
						<li><a href="<?=site_url('news/history')?>">History News</a></li>
						<li><a href="<?=site_url('news/promotion')?>">Product Promotion</a></li>
						<li><a href="<?=site_url('news/active')?>">Activity Highlights</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead ">products</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('product/index')?>">Product Description</a></li>
						<li><a href="<?=site_url('product/batch')?>">Batch Buy</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead ">services</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('service/index')?>">Customer Service</a></li>
						<li><a href="<?=site_url('service/advisory')?>">Health Advisory</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead ">Human Resources</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('hr/recruitment#hr1')?>">Welfare</a></li>
						<li><a href="<?=site_url('hr/recruitment#hr2')?>">Work Opportunity</a></li>
						<li><a href="<?=site_url('hr/recruitment#hr3')?>">Traffic Information</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-6">
				<div class="fh5co-footer-widget top-level">
					<h4 class="fh5co-footer-lead ">contact us</h4>
					<ul class="fh5co-list-check">
						<li><a href="<?=site_url('contact/contactme')?>">Contact</a></li>
						<li><a href="<?=site_url('contact/traffic')?>">Traffic Information</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row fh5co-row-padded fh5co-copyright">
			<div class="col-md-5">
				<p><small>Copyright &copy; NUGEN <a href="http://www.cmrdb.cs.pu.edu.tw/" target="_blank">CMRDB</a>Web Design</small></p>
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
