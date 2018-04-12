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

		<!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5SQQC9Z');</script>
        <!-- End Google Tag Manager -->


		<?php wp_head(); ?>

	</head>
	<body>
	<noscript>
	 	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SQQC9Z"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

	<header class="header container clearfix">
		<div class="col-12 sm-col-12 md-col-11 lg-col-10 mx-auto">
			<div class="header__inner inline-flex justify-between content-center">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="header__logo" src="<?php echo get_template_directory_uri()?>/assets/dist/img/db-logo.svg" alt="">
				</a>
				<div class="header__links right">
					<a class="header__a inline-block" href="tel:0730936515">
						<span class="header__heading block">Ring oss</span>
					</a>
					<a class="header__a inline-block" href="mailto:info@digitaliseringsbyran.se">
						<span class="header__heading block">Maila</span>
					</a>
				</div>
			</div>
		</div>
	</header>
