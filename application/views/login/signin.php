<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ubiquitous Learning</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>res/assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/assets/css/main.css">
<!--===============================================================================================-->

<style>
     .error{
      color:red;
     }
    </style>
</head>
<body style="background-color: #999999;">
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url(<?php echo $url?>);"></div>
			<?php echo form_open('C_login/masuk'); ?>
			<div class="wrap-login100 p-l-20 p-r-20 p-t-52 p-b-30">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Masuk
					</span> 

					
					
					<div class="wrap-input100 validate-input" >
						<span class="label-input100">Nama Pengguna</span>
						<input class="input100" type="text" name="username" placeholder="Nama Pengguna..." required>
						
						
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="label-input100">Kata Sandi</span>
						<input class="input100" type="password" name="password" placeholder="*************" required>
						
						
					</div>
                    
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Masuk
							</button>
						</div>

						<a href="<?php echo site_url('signup') ?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Daftar
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>

					<!-- <?php
						if(isset($pesan))
						{
							echo $pesan;
						}
					
					?> -->
					<?php echo form_close(); ?>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>res/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>res/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>res/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>res/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>res/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>res/assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>res/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>res/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>res/assets/js/main.js"></script>

</form>
</body>
</html>