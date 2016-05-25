<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove Editor Links from admin area

function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'inhabitent_remove_submenus', 102 );


// Customize the wp-admin login area

function inhabitent_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/customlogin.css" />';
}

add_action('login_head', 'inhabitent_custom_login');

function inhabitent_login_logo_url_title() {
    return 'Inhabitent';
}
add_filter( 'login_headertitle', 'inhabitent_login_logo_url_title' );

// Link the logo in the login area back to the homepage

function inhabitent_login_url( $url ) {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_url' );

// Put About Hero Image into the choose_from_most_used

function inhabitent_about_header_css() {

			if(!is_page_template( 'about.php' )) {
				return;
			}

			$background_image = CFS()->get('hero_image');
      $custom_css = "
                .about-header{
                        background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
																url('$background_image') center center no-repeat;
																background-size: cover;
                }";
        wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_about_header_css' );


// Display up to 16 products on Product Archive Pages

function inhabitent_filter_product_query( $query ) {

	if ( is_post_type_archive('product') && !is_admin() && $query->is_main_query() ) {
		$query->set( 'orderby', 'title' );
		$query->set( 'order', 'ASC' );
		$query->set( 'posts_per_page', 16 );
	}
}

add_action( 'pre_get_posts', 'inhabitent_filter_product_query' );
