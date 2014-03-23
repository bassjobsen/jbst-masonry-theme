<?php
/*
==========================================================
YOU CAN BUILD IN YOUR OWN CUSTOM FUNCTIONALITY HERE
==========================================================
*/

add_action('jbst_child_settings','masonry_jbst_child_settings');
function masonry_jbst_child_settings()
{
	define('jbst_customizer',0);
	
	if(!defined('navbar_account'))define('navbar_account',0);
	if(!defined('navbar_cart'))define('navbar_cart',0);
	
	/* logo */
	if(!defined('logo_image_position'))define('logo_image_position','outside-nav');
}	

add_action( 'after_setup_theme', 'masonry_jbst_theme_setup');
function masonry_jbst_theme_setup()
{
	/* Load custom jbst onepxdeep Theme Customizer options. */
	if(jbst_customizer)require( get_stylesheet_directory() . '/functions/template-customizer.php' );
}		
add_filter('jbst_logo',function(){return;});
