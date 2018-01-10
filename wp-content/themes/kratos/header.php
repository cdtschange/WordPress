<?php
/**
 * The template for displaying the header
 *
 * @package Vtrois
 * @version 2.3
 */
?><!DOCTYPE HTML>
<html class="no-js">
	<head>
		<title><?php wp_title( '-', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="<?php kratos_description(); ?>" />
		<meta name="keywords" content="<?php kratos_keywords();?>" />
        <!-- <link rel='stylesheet'  href='http://39.106.218.20/wp-content/themes/kratos/css/google-prettify-monokai-theme-sub.css' type='text/css' /> -->

		<?php wp_head(); ?>
		<?php wp_print_scripts('jquery'); ?>
		<?php if ( kratos_option('site_bw')==1 ) : ?>
			<style type="text/css">html{filter: grayscale(100%);-webkit-filter: grayscale(100%);-moz-filter: grayscale(100%);-ms-filter: grayscale(100%);-o-filter: grayscale(100%);filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);filter: gray;-webkit-filter: grayscale(1); }
			</style>
		<?php endif; ?>
	</head>
	<?php flush(); ?>
	<body data-spy="scroll" data-target=".scrollspy">
    <!-- <script type='text/javascript' src='http://39.106.218.20/wp-content/themes/kratos/js/power.js' />
    <script type='text/javascript' src='http://39.106.218.20/wp-content/themes/kratos/js/clipboard-1.5.5.js' />
    <script type='text/javascript' src='http://39.106.218.20/wp-content/themes/kratos/js/prettify.min.js' /> -->

		<div id="kratos-wrapper">
			<div id="kratos-page">
				<div id="kratos-header">
					<header id="kratos-header-section">
						<div class="container">
							<div class="nav-header">
								<?php if ( has_nav_menu('header_menu') ) :?>
									<a href="#" class="js-kratos-nav-toggle kratos-nav-toggle"><i></i></a>
								<?php endif; ?>
								<?php $site_logo = kratos_option('site_logo');?>
								<?php if ( !empty( $site_logo ) ) {?>
									<a href="<?php echo get_option('home'); ?>">
									<h1 id="kratos-logo-img"><img src="<?php echo $site_logo; ?>"></h1>
									</a>
								<?php }else{?>
									<h1 id="kratos-logo"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
								<?php }?>
								<?php $defaults = array('theme_location' => 'header_menu', 'container' => 'nav', 'container_id' => 'kratos-menu-wrap', 'menu_class' => 'sf-menu', 'menu_id' => 'kratos-primary-menu', ); ?>
							 <?php wp_nav_menu($defaults); ?>
							</div>
						</div>
					</header>
				</div>