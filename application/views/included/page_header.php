<!-- 
//////////////////////////////////////////////////////
Template Name# __workBook
Template Author# __ISLAM HOSSAIN
Template Author email# __islamhossainwork@gmail.com
Version# __ 1.0(d)
//////////////////////////////////////////////////////
 -->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(isset($siteinfo)){ echo $siteinfo->title; } ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php if(isset($siteinfo)){ echo $siteinfo->description; } ?>" />
  	<meta name="keywords" content="<?php if(isset($siteinfo)){ echo $siteinfo->keywords; } ?>" />
  	<meta name="author" content="<?php if(isset($siteinfo)){ echo $siteinfo->author; } ?>" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/gif"/>

	<!-- Google Webfont -->
	<link href='https://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/themify-icons.css">
	<!-- Icomoon Icons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/icomoon-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/magnific-popup.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/easy-responsive-tabs.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

	
	<!-- FOR IE9 below -->
	<!--[if lte IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
		<!-- Header -->
		<header id="fh5co-header" role="banner">
			<div class="container">
				<!-- Logo -->
				<div id="fh5co-logo">
					<a href="index.html">
						<img src="<?php echo base_url(); ?>images/<?php if(isset($siteinfo)){ echo $siteinfo->logo; } ?>" alt="Work Logo">
					</a>

				</div>
				<!-- Logo -->
				
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				
				<!-- Main Nav -->
				<div id="fh5co-main-nav">
					<nav id="fh5co-nav" role="navigation">
						<ul>

<?php if(!$this->session->userdata('userlogin')){ ?>
		<li class="<?php if(isset($activated_home)){ echo $activated_home; } ?>"> <a href="<?php echo base_url(); ?>">Home</a> </li>
		<li class="<?php if(isset($activated_about)){ echo $activated_about; } ?>"> <a href="<?php echo base_url('index.php/Home/AboutPage'); ?>">About S2S</a> </li>
		<li class="<?php if(isset($activated_trainer)){ echo $activated_trainer; } ?>"> <a href="<?php echo base_url('index.php/Home/TrainersPage'); ?>">About Trainers</a> </li>
		<li class="<?php if(isset($activated_trainings)){ echo $activated_trainings; } ?>"> <a href="<?php echo base_url('index.php/Home/ContactUs'); ?>">Contact Us</a> </li>
<?php 
	}else{ 

		$type = $this->session->userdata('type');


?>
		<li class="pull-right"> <a href="<?php echo base_url('index.php/UserHome/'); ?>"><b><?php echo $this->session->userdata('username'); ?></b> &mdash; <?php echo $this->session->userdata('type'); ?></a> </li>
<?php  }//end of session check ?>

						</ul>


<?php if(!$this->session->userdata('userlogin')){ ?>
<a href="#" class="fh5co-nav-call-to-action js-fh5co-nav-call-to-action"  data-toggle="modal" data-target="#LoginForm">Login</a>
<?php }else{ ?>
<a href="<?php echo base_url('index.php/User/Logout/'); ?>" class="fh5co-nav-call-to-action js-fh5co-nav-call-to-action" >Logout</a>
<?php  }//end of session check ?>
					</nav>
				</div>
				<!-- Main Nav -->
			</div>
		</header>
		<!-- Header -->

<!--=============================================================================================-->
<!-- Modal-> Login form -->
<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<form action="<?php echo base_url('index.php/User/'); ?>" method="post">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">S2S &mdash; Login Form</h4>
	      </div>
	      <div class="modal-body">
			<div class="form-group">
			   <label for="username">Username / Email</label>
			   <input name="username" type="text" class="form-control" id="username" placeholder="Username / Email">
			</div>
			<div class="form-group">
			   <label for="password">Password</label>
			   <input name="password" type="password" class="form-control" id="password" placeholder="Passwrod !">
			</div>
	      </div>
	      <div class="modal-footer">	        
	        <button type="submit" class="btn btn-primary">Login</button>
	      </div>
	    </div>
	  </div>
	</form>
</div>
<!--=============================================================================================-->

