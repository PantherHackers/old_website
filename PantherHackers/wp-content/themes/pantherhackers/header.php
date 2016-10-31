<html>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta charset="utf-8">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Alice|Montserrat|Gentium+Basic|Raleway:600|Work+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" type="text/css"/>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/mobile.css" type="text/css"/>
	</head>
	<body>
		<?php if (is_home()): ?>
			<div class="overlay-group">
				<div class="overlay-top"></div>
		<?php endif; ?>
		
		<header class="top-page-header <?php if (is_home()){ echo "home-page-header"; }?>">
			<div class="overlay-group mobile-top-nav-area">
			<div class="overlay-top"></div>
			<div class="overlay-bottom mobile-top-nav">
				<p class="close-button"><i class="fa fa-times"></i></p>
				
				<?php
					$menuItems = wp_get_nav_menu_items("mainnav", array());
					for($i=0; count($menuItems) > $i; $i++):
					$item =  $menuItems[$i];
				?>
					<p><a href="<?php echo $item->url; ?>"> <?php echo $item->title; ?> </a></p>
				
				<?php endfor; ?>
				<p><a href="index.html">Blog</a></p>
				<p class="text-small text-center">Stay in touch</p>
				<p class="social-media">
					<a href="https://www.facebook.com/PantherHackers"><i class="fa fa-facebook"></i></a> 
					<a href="https://twitter.com/PantherHackers"><i class="fa fa-twitter"></i></a> 
					<a href="https://instagram.com/pantherhackers/"> <i class="fa fa-instagram"></i></a>
					<!-- <a href="#"> <i class="fa fa-vine"></i></a> -->
					<!-- <a href="#"> <i class="fa fa-youtube-play"></i></a> -->
					<a href="mailto:hello@pantherhackers.com"> <i class="fa fa-envelope-o"></i></a>
				</p>
			</div>
		</div>
			<div class="<?php if (is_home()){ echo "overlay-bottom"; }?> wrapper clearfix">
				<div class="navigation-area">
					<ul class="navigation">
					<?php
						$menuItems = wp_get_nav_menu_items("mainnav", array());
						for($i=0; count($menuItems) > $i; $i++):
						$item =  $menuItems[$i];
					?>
						<li><a href="<?php echo $item->url; ?>"> <?php echo $item->title; ?> </a></li>
					 <?php endfor; ?>
					 <li><a href="index.html">Blog</a>
					 </ul>
				</div>
				
				<a class="logo-area" href="<?php echo get_home_url(); ?>"> <img src="<?php bloginfo('template_directory');?>/img/logo-01.png" class="logo"></a>
				
				<div class="social-media-area">
					<ul>
						<li> <a href="https://www.facebook.com/PantherHackers"><i class="fa fa-facebook"></i></a> </li> 
					<li> <a href="https://twitter.com/PantherHackers"><i class="fa fa-twitter"></i></a> </li> 
					<li> <a href="https://instagram.com/pantherhackers/"> <i class="fa fa-instagram"></i></a></li> 
					<!-- <li> <a href="#"> <i class="fa fa-vine"></i></a> </li> -->
					<!-- <li> <a href="#"> <i class="fa fa-youtube-play"></i></a></li>  -->
					<li> <a href="mailto:hello@pantherhackers.com"> <i class="fa fa-envelope-o"></i></a></li> 
					</ul>
				</div>
				<div class="mobile-hamburger-area">
					<button class="btn"><i class="fa fa-bars"></i></button>
				</div>
				
				<?php if(is_home()): ?>
					<hgroup class="pitch-group">
						<h1>PantherHackers</h1>
						<h2 style="text-transform:capitalize;">Simple Solutions for Complex Problems</h2>
					</hgroup>
					<div class="more-area">
						<a style="padding: 14px 47px; font-size: 1.05em;" href="http://pantherhackers.com/news/" class="btn">
							Sign up for our weekly newsletter!
						</a>
					</div>
				<?php endif; ?>
			</div>

		
			<?php if(is_home()): ?> 
				</div>
			<?php endif; ?>
		</header>