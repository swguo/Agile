<<<<<<< HEAD


<!DOCTYPE html>
<html lang="en">



<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->



<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" action="<?=site_url("login/logining")?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Account" name="account" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            
                        </div>
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login"  >
                    </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

=======
<!DOCTYPE html>
<html>
	<head>
		<title>管理後臺</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css' media='all'>
		<link rel='stylesheet' type='text/css' href='<?=base_url('assets/css/customer.css');?>' media='all'>
		<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
		<link rel='stylesheet' type='text/css' href='<?=base_url('assets/css/loginstyle.css');?>' media='all'>
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
>>>>>>> origin/User7
