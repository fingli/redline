<!DOCTYPE html>
<!--[if IE 6 ]>    <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress" />
	<!--
	+-+-+-+-+-+-+-+-+-+ +-+-+ +-+-+-+ +-+-+-+-+ 
	|W|o|r|d|P|r|e|s|s| |i|s| |t|h|e| |b|e|s|t| 
	+-+-+-+-+-+-+-+-+-+ +-+-+ +-+-+-+ +-+-+-+-+ -->

	<title><?php semantic_title(); ?></title>

	<link rel="profile" href="http://purl.org/uF/hAtom/0.1/" />
	<link rel="profile" href="http://purl.org/uF/2008/03/" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php echo CSS . '/print.css'; ?>" type="text/css" media="print" />
	<!--[if lt IE 9]> <script src="<?php echo JS . '/html5shiv.js'; ?>" type="text/javascript"</script> <![endif]-->

	<!-- Links: RSS + Atom Syndication + Pingback etc. -->
	<link rel="alternate" href="<?php echo get_feed_link( 'atom' ); ?>" type="application/atom+xml" title="Sitewide ATOM Feed" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) 
		wp_enqueue_script( 'comment-reply' ); /* loads script required for threaded comments */ ?>

	<!-- Theme Hook. Place any custom script or code here but not bellow wp_head() -->
	<?php wp_head(); ?>
</head><!--END head-->

<!--BEGIN body-->
<body <?php body_class(); ?>>

	<!--Begin infoarea-->
	<section id="siteinfo"><table id="feedarea" title="site information"><tr>
		<td style="float: left;"><?php bloginfo( 'description' ) ?></td>
		<td style="float: right;"><?php echo date_i18n( __( 'l, j F Y - G:i', 'redline' ) ); ?></td>
	</tr></table></section>
	<!--End infoarea -->

	<!--BEGIN #container-->
	<div id="container">
	
	<!--BEGIN .header-->
	<div id="header">

		<div id="topmenu" role="navigation"> 
			<!--Primary menu /Pages/--><nav id="prim_nav"><?php prim_redline_nav(); ?></nav><!--END Primary menu /Pages/--> 
		</div><!--END #topmenu-->

		<!--Logo-->
		<header role="banner"><div id="logo">
		<h1 id="blog_header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1></div></header><!--End Logo-->

		<!--Secondary menu-->
		<div id="sec_nav" role="navigation"><?php sec_redline_nav(); ?></div>

	</div><!--END .header-->

	<!--BEGIN #content-->
	<div id="content">
