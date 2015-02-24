<!doctype HTML>
<!--[if IE 7]>    <html class="ie7 ie-lt-8 ie-lt-9 ie-lt-10" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie-lt-9 ie-lt-10" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9 ie-lt-10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>	
	<title><?php get_page_title(); ?></title>
		
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="resource-type" content="document" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en-us" />
	<meta name="author" content="Pablo Cazorla" />
	<meta name="contact" content="contact@pcazorla.com" />
	<meta name="copyright" content="Designed by Pablo Cazorla - All rights reserved - <?php echo date('Y'); ?>." />

	<link href='http://fonts.googleapis.com/css?family=Raleway:300,400' rel='stylesheet' type='text/css'>
	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />
	<noscript>	
		<link href="<?php bloginfo('template_url'); ?>/noscript.css" rel="stylesheet" type="text/css" />
	</noscript>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />	
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/html5-3.4-respond-1.1.0.min.js"></script>
	<script type="text/javascript">
		ltIE9 = true;
	</script>
	<![endif]-->	
	<script type="text/javascript">
		baseURL = "<?php bloginfo( 'url' ); ?>";
		baseTemplateURL = "<?php bloginfo('template_url'); ?>";
	</script>		
	<?php wp_head(); ?>	
</head>
<body>
	<noscript>	
		<div class="noscript-message">Please, enable javascript in your browser, in order to get a better experience.</div>
	</noscript>
	<header id="header-main">
		<div class="wrap clearfix">
			<a href="<?php bloginfo( 'url' ); ?>" class="brand"><?php bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );?></a>

			<menu id="menu-main">
				<ul>
					<?php wp_nav_menu(array( 'container' => '','items_wrap' => '%3$s' )); ?>

					<?php global $woocommerce; ?>
					<li class="menu-item-cart">
						<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d', $woocommerce->cart->cart_contents_count, 'woothemes'));?></a>
					</li>
					<li class="menu-item-account" style="display:none">
						<?php if ( is_user_logged_in() ) { ?>
						<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><?php _e('My Account','woothemes'); ?></a>
						<?php } else { ?>
						<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('Login/Register','woothemes'); ?></a>
						<?php } ?>
					</li>
				</ul>				
			</menu>
		</div>
	</header>
	<div id="header-responsive-dimmer"></div>
	<div id="header-responsive-button">
		<span></span>
		<span></span>
		<span></span>
	</div>		
	<div id="content-main">