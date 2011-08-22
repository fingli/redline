<?php
/** 
* Template: SidebarTop.php
* 
* @package RedLine 
* @subpackage Template 
*/
?>
<?php if ( ! dynamic_sidebar( 'first-widget-area' ) ) : ?>
	<!--BEGIN #widget-tags-->
	<div class="widget">
		<h3 class="widget-title"><?php _e( 'Tags', 'redline' );?></h3>
		<?php if ( function_exists( 'wp_tag_cloud' ) ) { wp_tag_cloud( 'largest=20' ); } ?>
	</div><!--END #widget-tags-->
<?php endif; /* (!function_exists( 'dynamic_sidebar' ) */ ?>