<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="container">
					<div class="site-branding">
						<div class="logo">
							<a href="<?php echo esc_url( home_url() );?>">
								<h1 class="site-title">
									<?php echo bloginfo('name'); ?>
								</h1>
							</a>
						</div>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							<a href="#" class="toggle-search"><i class="fa fa-search"></i></a>
						<div class="header-search">
								<?php get_search_form(); ?>
						</div>
					</nav><!-- #site-navigation -->


				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
