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
