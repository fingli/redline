<?php
/**
 * The Footer widget areas
 *
 * @package RedLine
 * @subpackage Template
 */
?>
<?php
	if (
		! is_active_sidebar( 'first-footer-widget-area' )  &&
		! is_active_sidebar( 'second-footer-widget-area' ) &&
		! is_active_sidebar( 'third-footer-widget-area' )  &&
		! is_active_sidebar( 'fourth-footer-widget-area' )
	) :
?>
	<!--BEGIN #widget-tags-->
	<div class="widget">
		<h3 class="widget-title-footer"><?php _e( 'Tags', 'redline' );?></h3>
		<?php if ( function_exists( 'wp_tag_cloud' ) ) { wp_tag_cloud( 'largest=20' ); } ?>
	</div><!--END #widget-tags-->	
	
<?php endif; /* (!function_exists( 'dynamic_sidebar' ) */ ?>

<?php
	if (
		is_active_sidebar( 'first-footer-widget-area' )  ||
		is_active_sidebar( 'second-footer-widget-area' ) ||
		is_active_sidebar( 'third-footer-widget-area' )  ||
		is_active_sidebar( 'fourth-footer-widget-area' )
	) :
?>
	<div id="footer-widget-area" class="aside">
		<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
			<div id="first" class="widget-area">
				<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div><!-- End #first .widget-area -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
			<div id="second" class="widget-area">
				<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</div><!-- End #second .widget-area -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
			<div id="third" class="widget-area">
				<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			</div><!-- End #third .widget-area -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
			<div id="fourth" class="widget-area">
				<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
			</div><!-- End #fourth .widget-area -->
		<?php endif; ?>
	</div><!-- End #footer-widget-area -->
<?php endif; ?>
