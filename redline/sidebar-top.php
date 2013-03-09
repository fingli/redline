<?php
/** 
* Template: SidebarTop.php
* 
* @package RedLine 
* @subpackage Template 
*/
?>
<?php if ( ! dynamic_sidebar( 'first-widget-area' ) ) : ?>
	<!--BEGIN #widget-picture-->
	<div class="widget">
		<h3 class="widget-title"><?php _e( 'Picture', 'redline' );?></h3>
		<img src="<?php echo get_template_directory_uri() .'/library/media/images/Country-Road-with-Balloons_400x250.jpg' ?>" alt="Country Road with Balloons" />
		<p>Public domain via<br />www.burningwell.org/gallery2/v/Artwork/Country-Road-with-Balloons.jpg.html</p>
	</div><!--END #widget-picture-->	
	
	<!--BEGIN #widget-tags-->
	<div class="widget">
		<h3 class="widget-title"><?php _e( 'Tags', 'redline' );?></h3>
		<?php if ( function_exists( 'wp_tag_cloud' ) ) { wp_tag_cloud( 'largest=20' ); } ?>
	</div><!--END #widget-tags-->	
	
<?php endif; /* (!function_exists( 'dynamic_sidebar' ) */ ?>