<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico">
	<title>AGENCIA</title>

	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Rosarivo' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo get_template_directory_uri();?>/less/style.less" rel="stylesheet/less">
	<script src="<?php echo get_template_directory_uri();?>/js/less-1.7.5.js"></script>

	<link href="<?php echo get_template_directory_uri();?>/css/huge.css" rel="stylesheet" type="text/css">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri();?>/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="<?php echo get_template_directory_uri();?>/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="<?php echo get_template_directory_uri();?>/js/html5shiv.min.js"></script>
	  <script src="<?php echo get_template_directory_uri();?>/js/respond.min.js"></script>
	<![endif]-->

	<?php wp_head();?>

  </head>
  <body class="homepage">


  	<nav>
		<div class="bar">
			<a id="logo" href="<?php site_url();?>"></a>
			<a id="toggle" href="#"><div class="patty"></div></a>
			<div class="toggle-search"></div>
			<div class="search-form">
				<?php get_search_form(); ?>
			</div>
		</div>

		<div class="nav-container">
		    	<div class="nav-menu">
		    		<div class="icons">
		    			<p class="menu-title">Menu</p>
		    		</div>
			    	<?php
				  wp_nav_menu(array(
				    'menu'            => 'Main Menu',
				    'container'       => '',
				    'menu_class'      => '',
				  ));?>
		    	</div>
	    	</div>
    
	</nav>
	<div id="wrap">