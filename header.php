<!DOCTYPE html>
<html>

<head>
	<title><?php echo bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/../../plugins/js_composer/assets/css/js_composer.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/screen.css" />
	<?php do_action('wp_head'); ?>

</head>

<body>

	<header class="site-header">

		<h1 class="site-name">Purposefuel</h1>

		<nav class="site-nav">

			<ul>
				<li><a href="#">About</a></li>
				<li><a href="#">What we Do</a></li>
				<li><a href="#">Calendar</a></li>
				<li><a href="#">Get Involved</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
				<li class="button red-bg"><a href="#">Donate</a></li>
				<li class="social twitter"><a href="#">Twitter</a></li>
				<li class="social linkedin"><a href="#">LinkedIn</a></li>
				<li class="social facebook"><a href="#">Facebook</a></li>
				<li class="search"><a href="#">Search</a></li>
			</ul>

		</nav>

	</header>

	<?php 

	if( is_home() ){ 
		$pageType = 'home'; 
	}elseif( is_page() ){ 
		$pageType = 'page'; 
	}else{ $pageType = 'index'; }

	?>

	<section class="<?php echo $pageType; ?> site-content">