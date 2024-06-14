<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
$ism_ops = get_option('ism_ops'); ?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="p:domain_verify" content="051675201bd4fc8354ac31c0f9ab9b26" />
<!-— facebook open graph tags -->
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo get_permalink( $post->ID); ?>" />
<meta property="og:title" content="<?php wp_title(''); ?>" />
<!-— twitter card tags additive with the og: tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:domain" value="<?php echo home_url( '/' ); ?>" />
<meta name="twitter:title" value="<?php wp_title(''); ?>" />
<meta name="twitter:url" value="<?php echo get_permalink( $post->ID); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<?php echo get_post_meta($post->ID, 'page_head_code', true); ?>
</head>

<body <?php body_class(); ?>>
<?php echo $ism_ops['body_tracking']; ?>
<div id="page" class="hfeed">
<?php do_action( 'before' ); ?>
	<header id="branding" role="banner">
		<hgroup>
			<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/gelber-group.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" </a></h1>
		</hgroup>

		<nav id="access" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => new schema_walker(), 'items_wrap' => '<ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="%2$s" id="%1$s">%3$s</ul>' ) ); ?>
		</nav><!-- #access -->
		<a href="javascript://" id="menu-open">
			<span id="top-grip"></span>
			<span id="middle-grip"></span>
			<span id="bottom-grip"></span>
		</a>
		<nav id="mobile-access" role="navigation">
			<a href="javascript://" id="menu-close">&#10005;</a>
			<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>
		</nav><!-- #access -->
	</header><!-- #branding -->

	<div id="main">