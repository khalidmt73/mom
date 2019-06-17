<!DOCTYPE html>
<html lang="ar">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">
		<title><?php echo $title; ?></title>
		<link rel="shortcut icon" href="<?php echo base_url('public/img/ic.png'); ?>" >
		<link href="<?php echo base_url('public/css/bootstrap.css'); ?>"  rel="stylesheet"/>
		<link href="<?php echo base_url('public/css/bootstrap-rtl.css'); ?>"  rel="stylesheet"/>
	    <link href="<?php echo base_url('public/css/font-awesome.css'); ?>" rel="stylesheet"  />
		<link href="<?php echo base_url('public/css/style.css'); ?>"  rel="stylesheet"/>

		<script src="<?php echo base_url('public/js/jquery-3.2.1.js'); ?>"></script>
		<script src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
		<script src="<?php echo base_url('public/js/plugins.js'); ?>"></script>
    </head>
    <body>
	<center> 
		<div class="container-fluid">
		<nav class="navbar nvMain  navbar-expand-lg fixed-top navbar-light bg-light" style="background-color: #ccc;">
			<a class="navbar-brand" href="<?php echo base_url('home/index');?>">
			<link rel="shortcut icon" href="<?php echo base_url('public/img/logo.ico'); ?>" >
			<img src="<?php echo base_url('public/img/Br.png'); ?>" width="80" height="31" border="0" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-list" aria-hidden="true"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="nav justify-content-start navbar-nav ">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('home/index');?>">الرئيسية<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('prices/index');?>">الأسعار</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('required/index');?>">متطلبات الفلتر</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('location/index');?>">كيف تحدد موقعك</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('design/index');?>">صمم فلترك</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('library/index');?>">مكتبة التصميم</a>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('email/index');?>">راسلنا</a>
					</li>
					<?php if ($this->session->userdata('userCC') != TRUE) {?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('login');?>">
							<!-- </li><i class="fa fa-sign-in ">&nbsp;&nbsp;</i> -->
						</a>
					</li>
					<?php } else{ ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('login/logout');?>">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('fltr/index');?>">
							صمم
						</a>
					</li>
					<?php } ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('cpanel/index');?>">
							<i class="fa fa-lock" aria-hidden="true"></i><?php echo  $this->session->userdata('userUser'); ?>
						</a>
					</li>
				</ul>
					
			</div>

		</nav>
		<nav class="navbar fixed-top  navbar-light bg-dark nv">
		اطلب فلترك 
		<img src="<?php echo base_url('public/img/whatsup.jpg');?>" width="20" height="20" alt="" />
		0507597594
		</nav>
</div>
		<div class="bn">
			<p>		صمم فلترك  على ذوقك 
			- <a href="<?php echo base_url('design/index');?>" class="aLink" >إقرأ ...</a> 
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <?php  if (isset($counter)) {?><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php echo $counter;} ?></p>
		</div>

	
		