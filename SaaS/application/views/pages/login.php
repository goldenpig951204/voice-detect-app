<?php defined('ASSETS_URL') OR define('ASSETS_URL', base_url('assets'));?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>My Voice Admin - Login </title>
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?= ASSETS_URL . '/plugins/vendor_components/bootstrap/dist/css/bootstrap.min.css';?>">
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?= ASSETS_URL .'/styles/global/bootstrap-extend.css';?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= ASSETS_URL . '/styles/global/master_style.css';?>">
	<!-- AIUI Admin skins -->
	<link rel="stylesheet" href="<?= ASSETS_URL . '/styles/global/skins/_all-skins.css';?>">	
	<link rel="stylesheet" href="<?= ASSETS_URL . '/plugins/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css';?>"/>
</head>
<body class="hold-transition login-page bg-img" style="background-image:url(<?= base_url('/assets/images/error/bg-3.jpg');?>);">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-lg-4 col-md-8 col-12">
				<div class="login-box rounded bg-white">
				  <div class="login-box-body">
					<h3 class="text-center">Get started with Us</h3>
					<p class="login-box-msg">Sign in to start your session</p>

					<form action="<?= base_url('login/check')?>" method="post" class="form-element">
					  <div class="form-group has-feedback">
						<input type="email" class="form-control" name="email" placeholder="Email">
						<span class="ion ion-email form-control-feedback"></span>
					  </div>
					  <div class="form-group has-feedback">
						<input type="password" class="form-control" name="password" placeholder="Password">
						<span class="ion ion-locked form-control-feedback"></span>
					  </div>
					  <div class="row">
						<div class="col-6">
						  <div class="checkbox">
							<input type="checkbox" name="remember_me" id="basic_checkbox_1">
							<label for="basic_checkbox_1">Remember Me</label>
						  </div>
						</div>
						<div class="col-6">
						 <div class="fog-pwd text-right">
							<a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
						  </div>
						</div>
						<div class="col-12 text-center mb-5">
						  <button type="submit" class="btn btn-info btn-block margin-top-10">SIGN IN</button>
						</div>
					  </div>
					</form>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<!-- jQuery 3 -->
	<script src="<?= ASSETS_URL . '/plugins/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js';?>"></script>
	<!-- popper -->
	<script src="<?= ASSETS_URL . '/plugins/vendor_components/popper/dist/popper.min.js';?>"></script>
	<!-- Bootstrap 4.0-->
	<script src="<?= ASSETS_URL . '/plugins/vendor_components/bootstrap/dist/js/bootstrap.min.js';?>"></script>
	<script src="<?= ASSETS_URL . '/plugins/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js';?>"></script>
	<script>
		<?php if ($this->session->flashdata('error')): ?>
			$.toast({
            	heading: "Warning",
            	text: "<?= $this->session->flashdata("error"); ?>",
            	position: 'top-right',
            	loaderBg: '#ff6849',
            	icon: 'error',
            	hideAfter: 3000,
            	stack: 6
	        });
		<?php endif;?>
	</script>
</body>
</html>
