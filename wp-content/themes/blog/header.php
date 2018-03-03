<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body>

		<!-- wrapper -->
		<div class="container">

			<!-- header -->
			<header class="header py4 inline-flex justify-between" role="banner">
				<?php 
					$menuItems = wp_get_nav_menu_items("global-navigation" ); 
				?>
				<div class="header__logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				</div>

				<nav class="navigation">
					<?php foreach ($menuItems as $key => $value) : ?>
	                    <a class="ml3" href="<?php echo $value->url ?>">
	                        <span><?php echo $value->title ?></span>
	                    </a>
	                <?php endforeach ?>
				</nav>

			</header>
			<!-- /header -->
