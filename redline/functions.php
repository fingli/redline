<?php
/**
 * Functions - Framework gatekeeper
 *
 * This file defines a few constants variables, loads up the core framework file, 
 * and finally initialises the main WP Framework Class.
 *
 * @package RedLine
 * @subpackage Functions
 */
 
	// default header style
	$header_defaults = array(
	'default-image'          =>  get_template_directory_uri() .'/library/media/images/header.jpg',
	'random-default'         => false,
	'width'                  => 960,
	'height'                 => 200,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => 'FFF',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => 'header_style',
	'admin-head-callback'    => 'admin_header_style',
	'admin-preview-callback' => '',
);
	add_theme_support( 'custom-header', $header_defaults ); // custom header

	if ( ! isset( $content_width ) ) $content_width = 520; // set the global width of the media content

	set_post_thumbnail_size( 150, 150 ); // 150 pixels wide by 150 pixels tall, box resize mode
	
	load_theme_textdomain( 'redline' , get_template_directory() . '/lang' ); // load localization files

	
	/* Blast you red baron! Initialise WP Framework */

	require_once( get_template_directory() . '/library/framework.php' );
		WPFramework::init();
	
?>