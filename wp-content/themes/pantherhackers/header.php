<?php if(is_home() && $_POST){ $message = member_save();} ?>
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
		<style type="text/css">
			@keyframes popup {
				from {top:-21px;}
				to {top:0px;}
			}
			.subscribe-form {
				display:inline-flex;
				flex-flow:column nowrap;
				width:350px;
			}
			.subscribe-form label {
				color:white;
				font-size:18pt;
				font-weight:normal;
			}
			.subscribe-form .subscribe-fields {
				background:#eee;
				display:inline-flex;
				flex-flow:column nowrap;
				padding:5px;
				border-radius:5px;
				z-index:1;
			}
			.subscribe-form .name-field {
				border:none;
				outline:none;
				background:none;
				padding:10px 5px;
				margin:0 2.5%;
			}
			.subscribe-form hr {
				margin:5px auto;
				width:97%;
				border-top:1px solid #bbb;
				display:block;
			}
			.subscribe-form .email-field {
				border:none;
				outline:none;
				background:none;
				padding:10px 5px;
				margin:0 2.5%;
			}
			.submit-button {
				border:none;
				outline:none;
				border-radius:3px;
				padding:7px 10px;
				margin-top:5px;
				background-color:#4c94dc;
				color:white;
				transition:.3s all ease-in-out;
			}
			.submit-button:hover {
				background-color:#6cb4fc;
			}
			.button-x2 {
				padding:12px 15px;
				font-size: 2.5rem;
			}
			.subscribe-form .message {
				display:inline-block;
				position:relative;
				margin-top:-5px;
				padding-top:5px;
				z-index:0;
				border-radius:0 0 5px 5px;
				animation: popup 0.3s cubic-bezier(.17,.67,.69,1.33) forwards;
			}
			.subscribe-form .message.success {
				color:rgb(0,123,0);
				background-color:rgba(100,233,100,0.8);
			}
			.subscribe-form .message.error {
				color:rgb(180,26,0);
				background-color:rgba(255,120,110,0.8);
			}

			.main-event {
				margin-bottom:9%;
			}
		</style>
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
					<hgroup class="pitch-group" style="margin-top: 12%;">
						<h1>PantherHackers</h1>
						<h2 style="text-transform:capitalize;">Simple Solutions for Complex Problems</h2>
					</hgroup>
					<hgroup class="main-event">
						<a class="submit-button button-x2" href="https://www.eventbrite.com/e/pantherhackers-meeting-1-tickets-31292788573">RSVP for Meeting[1]</a>
					</hgroup>

					<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" class="subscribe-form">
						<?php wp_nonce_field( 'secretkeywordissecretkeywordpantherhackers', 'member_save_content_nonce' ); ?>
						<label>Sign up for news</label>
						<div class="subscribe-fields">
  							<input type="text" placeholder="Steve Jobs" class="name-field" name="user_name"><hr>
							<input type="text" placeholder="sjobs2@student.gsu.edu" class="email-field" name="panther_id">
							<input type="submit" value="SUBSCRIBE" class="submit-button">
						</div>
						<?php if($_POST): ?>
							<?php if(isset($message['error'])): ?>
								<span class="message error">
									<?php echo $message['error']; ?>
								</span>
							<?php elseif(isset($message['success'])): ?>
								<span class="message success">
									<?php echo $message['success']; ?>
								</span>
							<?php endif ?>
						<?php endif; ?>
						<input type="hidden" name="experience" value="A little bit">
					</form>
				<?php endif; ?>
			</div>

		
			<?php if(is_home()): ?> 
				</div>
			<?php endif; ?>
		</header>