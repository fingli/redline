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
 
	// The height and width of your custom header
	define( 'HEADER_IMAGE_HEIGHT', 85 );
	define( 'HEADER_IMAGE_WIDTH', 960 );
	define( 'HEADER_TEXTCOLOR', 'FFFFFF' );
	define( 'HEADER_IMAGE', '%s/library/media/images/header.jpg' );

	if ( ! isset( $content_width ) ) $content_width = 515; // set the global width of the media content

	set_post_thumbnail_size( 140, 140 ); // 140 pixels wide by 140 pixels tall, box resize mode
	
	load_theme_textdomain( 'redline' , TEMPLATEPATH . '/lang' ); // load localization files

	add_editor_style();
	
	/* Blast you red baron! Initialise WP Framework */

	require_once( TEMPLATEPATH . '/library/framework.php' );
		WPFramework::init();
	
?>