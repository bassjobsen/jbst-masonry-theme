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

add_action( 'after_setup_theme', 'masonry_jbst_theme_setup',99);
function masonry_jbst_theme_setup()
{
	/* Load custom jbst onepxdeep Theme Customizer options. */
	if(jbst_customizer)require( get_stylesheet_directory() . '/functions/template-customizer.php' );
}		
add_filter('jbst_logo',function(){return;});
function jbstmansonry_homepage_scripts()
{
	if(is_home() || is_page_template('Masonry'))
	{
		global $wp_version;
		if ( version_compare( $wp_version, '3.9', '>=' ) ) {
			wp_enqueue_script( 'masonry');
			wp_enqueue_script( 'masonrysettings', get_stylesheet_directory_uri() . '/assets/js/masonry.js', array('jquery','masonry'));
		}
		else
		{
			wp_enqueue_script( 'imagesloaded', get_stylesheet_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'));
			wp_enqueue_script( 'masonry', get_stylesheet_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery','imagesloaded'));
			wp_enqueue_script( 'masonrysettings', get_stylesheet_directory_uri() . '/assets/js/masonry.js', array('masonry'));		
		}	
		

	}		
}	

add_action( 'wp_enqueue_scripts', 'jbstmansonry_homepage_scripts' );

