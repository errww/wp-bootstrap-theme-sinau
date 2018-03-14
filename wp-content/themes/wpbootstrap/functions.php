<?php 
// Register nav walker class_alias
require_once('wp-bootstrap-navwalker.php');

//Theme Support
function wpb_theme_setup(){

	add_theme_support('post-thumbnails');
	//nav menus
	register_nav_menus(array(

		'primary' => __('Primary Menu')

	));	
}

add_action('after_setup_theme','wpb_theme_setup');

//excerpt length control
function set_excerpt_length(){
	return 45;
}

add_filter('excerpt_length','set_excerpt_length');