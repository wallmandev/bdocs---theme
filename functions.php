<?php

/**
 * Theme Support
 */

	add_theme_support( 'post_thumbnails' );



/**
 * Register Navigation Locations
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 * 
 * Registers our locations for our header and sidebar menu. 
 * This will add a link to menus under appearence
 */ 

 if ( ! function_exists( 'bdocs_register_nav_menu' ) ) {

	function bdocs_register_nav_menu(){
		register_nav_menus( array(
	    	'header_menu' => __( 'Header Menu', 'bdocs_domain' ),
	    	'sidebar_menu'  => __( 'Sidebar Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'bdocs_register_nav_menu', 0 );
}