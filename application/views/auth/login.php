<!doctype html>
<html class="fixed">
<head>
<!-- Basic -->
	<meta charset="UTF-8">

	<meta name="keywords" content="FTI UII" />
	<meta name="developer" content="andhika15@gmail.com">

	<title><?= $title ?></title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/bootstrap-datepicker/css/datepicker3.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>stylesheets/theme-custom.css">

	<!-- Head Libs -->
	<script src="<?= base_url('assets/') ?>vendor/modernizr/modernizr.js"></script>

</head>
<body>
		<!-- start: page -->
<section class="body-sign">
	<div class="center-sign">
		<a href="/" class="logo pull-left"></a>

		<div class="panel panel-sign">
			<div class="panel-title-sign mt-xl text-right">
				<h2 class="title text-uppercase"><i class="fa fa-envelope mr-xs"></i> FTI UII | Sistem Surat</h2>
			</div>
			<div class="panel-body">
			<?= $this->session->flashdata('message'); ?>
				<form method="post" action="<?= base_url('auth') ?>">
					<div class="form-group mb-lg">
						<label>Username</label>
						<div class="input-group input-group-icon">
							<input name="username" id="username" type="text" class="form-control input-lg"/>
							<?= form_error('username', '</small class="text-danger"', '</small>') ?>
							<span class="input-group-addon">
								<span class="icon icon-lg">
									<i class="fa fa-user"></i>
								</span>
							</span>
						</div>
					</div>

					<div class="form-group mb-lg">

						<div class="input-group input-group-icon">
							<input name="password" id="password" type="password" class="form-control input-lg" />
							<span class="input-group-addon">
								<span class="icon icon-lg">
									<i class="fa fa-lock"></i>
								</span>
							</span>
						</div>
						<?= form_error('password', '</small class="text-danger"', '</small>') ?>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Login sebagai</label>
						<div class="col-md-5">
						<select data-plugin-selectTwo class="form-control populate" name="akses" required>
							<option value="" selected disabled>--Pilih--</option>
							<option value="1">Mahasiswa</option>
							<option value="2">Pegawai</option>
						</select>
						</div>
						<?= form_error('akses', '</small class="text-danger"', '</small>') ?>
					</div>

					<div class="row">
						<div class="col-sm-8">

						</div>
						<div class="col-sm-4 text-right">
							<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
							<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
						</div>
					</div>

					<span class="mt-lg mb-lg line-thru text-center text-uppercase">
						<span>SISTEM SURAT FTI</span>
					</span>

					<p class="text-center">Panduan penggunaan Sistem Pemesanan Surat <a href="#"><b>di sini</b></a>

				</form>
			</div>
		</div>
		<?php
	$tgl = getdate();
	?>

		<p class="text-center text-muted mt-md mb-md">&copy; FTI UII</p>
	</div>
</section>
<!-- end: page -->

<!-- Vendor -->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?= base_url('assets/') ?>vendor/nanoscroller/nanoscroller.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url('assets/') ?>vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?= base_url('assets/') ?>javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="<?= base_url('assets/') ?>javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?= base_url('assets/') ?>javascripts/theme.init.js"></script>

</body>
</html>
