<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0, width=device-width" />
	<?php $color = '#00b09f'; ?>
	<meta name="theme-color" content="<?php echo $color; ?>">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="<?php echo $color; ?>">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $color; ?>">
	<link rel="mask-icon" href="<?php bloginfo('template_url') ?>/favicon/images/safari-pinned-tab.svg" color="<?php echo $color; ?>">
	<?php include (TEMPLATEPATH . '/favicon/favicon.php'); ?>
	<!--[if IE 8 ]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
		<div class="all line">
			<header class="header line principal-header">
				<div class="top">
					<div class="center">
						<?php if ( ! dynamic_sidebar( 'topoesquerda' ) ) : endif; ?>
						<?php if ( ! dynamic_sidebar( 'topodireita' ) ) : endif; ?>
					</div>

				</div>
				<div class="center">
					<div class="wrapper-header">
						<div class="wrapper-logo">
							<?php if (is_home()) { ?>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/logo-somadev.jpg" alt="logo somadev">
							<?php } else { ?>
								<a href="<?php echo esc_url( home_url() ); ?>" title="somadev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/logo-somadev.jpg" alt="logo somadev"></a>
							<?php } ?>
						</div
						><div class="wrapper-menu">
							<div class="nav-item">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<i>Menu</i>
							</div>
							<div class="menu-multinivel">
								<div class="rmm">
									<?php wp_nav_menu( array( 'container' => '', 'menu' => 'menu-principal' ) ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>