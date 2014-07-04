<?php
/**
 * Framework - core of WP Framework which defines the main class
 */

/**
 * class WPFramework Main class loads all includes, adds/removes filters.
 * 
 * @since 0.1
 */
class WPFramework {

	/**
	 * init() Initialisation method which calls all other methods in turn.
	 *
	 * @since 0.1
	 */
	public static function init() {
		$theme = new WPFramework;

		$theme->enviroment();
		$theme->framework();
		$theme->extentions();
		$theme->defaults();
		$theme->ready();

		do_action( 'framework_init' );
	}

	/**
	 * enviroment() defines WP Framework directory constants
	 *
	 * @since 0.2.3
	 */
	function enviroment() {	
		define( 'THEMELIB', get_template_directory() . '/library' ); // Shortcut to point to the /library/ dir
		define( 'THEMECORE', THEMELIB . '/functions/' ); // Shortcut to point to the /functions/ dir
		define( 'THEMEMORE', THEMELIB . '/extensions/' ); // Shortcut to point to the /extensions/ dir
		define( 'THEMEMEDIA', THEMELIB . '/media' ); // Shortcut to point to the /media/ URI
		define( 'THEMECSS', THEMEMEDIA . '/css' );
		define( 'THEMEIMAGES', THEMEMEDIA . '/images' );
		define( 'THEMEJS', THEMEMEDIA . '/js' );

		// URI shortcuts
		define( 'THEME', get_template_directory_uri() , true );
		define( 'LIBRARY', THEME . '/library', true ); // Shortcut to point to the /library/ URI

		if ( get_stylesheet_directory() !== get_template_directory() ) 
			 define( 'MEDIA', get_stylesheet_directory_uri(), true ); // Shortcut to point to the /media/ URI
		else define( 'MEDIA', LIBRARY . '/media', true ); // Shortcut to point to the /media/ URI

		define( 'CSS', MEDIA . '/css', true );
		define( 'IMAGES', MEDIA . '/images', true );
		define( 'JS', MEDIA . '/js', true );

		do_action( 'enviroment' ); // Available action: load_enviroment
	}

	/**
	 * framework() includes all the core functions for WP Framework
	 *
	 * @since 0.2.3
	 */
	function framework() {
		require_once( THEMECORE . '/hooks.php' ); // load the WP Framework Hook System
		require_once( THEMECORE . '/functions.php' ); // load Framework functions
		require_once( THEMECORE . '/comments.php' ); // load comment functions
		require_once( THEMECORE . '/widgets.php' ); // load Widget functions
	}

	/**
	 * extentions() includes all extentions if they exist
	 *
	 * @since 0.2.3
	 */
	function extentions() {
		include_all( THEMEMORE );
	}

	/**
	 * defaults() connects WP Framework default behavior to their respective action
	 *
	 * @since 0.8
	 */
	function defaults() {
		add_action( 'init', 'framework_media' ); // framework_media() loads scripts and styles
		add_action( 'init', 'register_redline_menus' ); // add custom menus 
		add_theme_support( 'automatic-feed-links' ); // add default posts and comments RSS feed links to head
		add_theme_support( 'post-thumbnails' ); // support thumbnails in posts
		add_theme_support( 'post-formats', array( 'aside', 'chat', 'status' ) ); // add different layouts for post contnent
		add_filter( 'the_generator', 'remove_generator_link', 1 ); // remove_generator_link() Removes generator link - Credits: (http://www.plaintxt.org)
		add_filter( 'use_default_gallery_style', '__return_false' ); // remove inline styles printed when the gallery shortcode is used
		add_filter( 'wp_page_menu', 'framework_menu_ulclass' ); // adds a .nav class to the ul wp_page_menu generates
		add_theme_support( 'custom-background' ); // allows users to set a custom background
		add_editor_style();
	}

	/**
	 * ready() includes user's theme.php if it exists, calls the framework_init action, includes all pluggable functions and registers widgets
	 *
	 * @since 0.2.3
	 */
	function ready() {
		if ( file_exists( THEMEMEDIA . '/custom-functions.php' ) ) include_once( THEMEMEDIA . '/custom-functions.php' ); // include custom-functions.php if that file exist
		require_once( THEMECORE . '/pluggable.php' ); // load pluggable functions
		do_action( 'framework_init' ); // Available action: framework_init
	}
} // end of WPFramework;
?>
