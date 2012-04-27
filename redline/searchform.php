<?php
/**
 * Template: Searchform.php
 *
 * @package RedLine
 * @subpackage Template
 */
?>
<!--BEGIN #searchform-->
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" value="<?php _e( 'Search', 'redline' ); ?>" name="s" id="s" onfocus="if (this.value == '<?php _e( 'Search', 'redline' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e( 'Search', 'redline' ); ?>';}" />
	<input type="image" src="<?php echo get_template_directory_uri(); ?>/library/media/images/search.png" alt="Search" id="searchIcon" />
</form><!--END #searchform-->
