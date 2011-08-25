<?php
/**
 * Template: Sidebar.php
 *
 * @package RedLine
 * @subpackage Template
 */
?>
	<!--BEGIN #secondary .aside-->
<div id="secondary" class="aside" role="complementary">
	<div id="sidebar_top"> 
		<?php get_sidebar( 'top' ) ?>
	</div>
		
	<div id="sidebar_bottom">
		<div id="sidebar_left">
		<?php get_sidebar( 'left' ) ?>
		</div>
			
		<div id="sidebar_right">
		<?php get_sidebar( 'right' ) ?>
		
</div></div></div>