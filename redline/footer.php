<?php
/**
 * Template: Footer.php
 *
 * @package RedLine
 * @subpackage Template
 */
?>
	</div><!--END #content-->

<!--BEGIN #footer-->
	<div id="footer">
		<div id="sidebar_footer" role="complementary"><?php get_sidebar( 'footer' ); ?></div>

		<!--BEGIN #copyright-->
		<footer role="contentinfo"><div id="copyright">&copy; <a href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>. <?php redline_credits(); ?></div></footer>
		<!--END #copyright-->

	</div><!--END #footer-->

	</div><!--END #container-->

<!-- Theme Hook 
	(Place any custom script and code here or bellow)
-->
	<?php wp_footer(); ?><!--END Theme-->
</body><!--END body-->
</html><!--END html(kthxbye)-->
