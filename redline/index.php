<?php
/**
 * Template: Index.php
 *
 * @package RedLine
 * @subpackage Template
 */
get_header();
?>
	<!--BEGIN #primary .hfeed-->
	<div id="primary" class="hfeed" role="main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

	<!--BEGIN .hentry-->
	<article id="post-<?php the_ID(); ?>"><div class="<?php semantic_entries(); ?>">
	<header class="post-title"><h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e(  'Permanent Link to' ,'redline' );?> <?php the_title(); ?>"><?php the_title(); ?></a></h2></header>

		<!--BEGIN .entry-meta .entry-header-->
		<section class="meta-header"><div class="entry-meta entry-header">
		<span class="published"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e( 'Permanent Link to' ,'redline' );?> <?php the_title(); ?>"> <?php the_time( get_option( 'date_format' ) ); ?></a></span> | <?php _e( 'Author:', 'redline' );?>
		<span class="author vcard"> <?php printf( '<a class="url fn" href="' . get_author_posts_url( $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'redline' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
<?php edit_post_link( __( 'edit', 'redline' ), '<span class="edit-post">[', ']</span>' ); ?>
		</div></section><!--END .entry-meta .entry-header-->

		<!--BEGIN .entry-content-->
		<div class="entry-content">
		<?php the_post_thumbnail(); ?><?php the_content( __( 'Read more', 'redline' ) . ' &raquo;' ); ?><div class="clearfix"></div>
		<?php wp_link_pages( array( 'before' => '<div id="page-links"><p><strong>' . __( 'Pages:', 'redline' ) . '</strong> ', 'after' => '</p></div>', 'next_or_number' => 'number' ) ); ?>
		</div><!--END .entry-content-->

		<!--BEGIN .entry-meta .entry-footer-->
		<section class="meta-footer"><div class="entry-meta entry-footer">
		<span class="entry-categories"><?php _e( 'Posted in', 'redline' );?> <?php echo framework_get_terms( 'cats' ); ?></span>
		<span class="meta-sep">|</span>
		<span class="comment-count"><a href="<?php comments_link(); ?>"><?php comments_number( __( 'Leave a Comment', 'redline' ), __( '1 Comment', 'redline' ), __( '% Comments', 'redline' ) ); ?></a></span>
		</div></section><!--END .entry-meta .entry-footer-->

	</div></article><!--END .hentry-->

	<?php endwhile; ?>
	<?php get_template_part( 'navigation' ) ?>
	<?php else : ?>

				<!--BEGIN #post-0-->
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Not Found', 'redline' );?></h2>

					<!--BEGIN .entry-content-->
					<div class="entry-content">
						<p><?php _e( "Sorry, but you are looking for something that isn't here.", 'redline' );?></p>
						<?php get_search_form(); ?>
					<!--END .entry-content-->
					</div>
				<!--END #post-0-->
				</div>

	<?php endif; ?>

	</div><!--END #primary .hfeed-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>