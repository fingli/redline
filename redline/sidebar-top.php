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
		<div class="wp-caption">
		<img src="<?php echo get_template_directory_uri() .'/library/media/images/security-lock.jpg' ?>" alt="Security Lock" />
		<p class="wp-caption-text">Image is Public Domain from<br />http://pixabay.com/en/security-lock-symbol-love-368498/</p>
		</div>
	</div><!--END #widget-picture-->

<?php endif; /* (!function_exists( 'dynamic_sidebar' ) */ ?>
