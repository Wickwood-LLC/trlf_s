<?php global $wp_locale;
if (isset($wp_locale)) {
	$wp_locale->text_direction = 'ltr';
} ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!-- Created by Artisteer v4.2.0.60623 -->
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />
<!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="ie"> <!--<![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php
remove_action('wp_head', 'wp_generator');
if (is_singular() && get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
}
wp_head();
?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<div id="page">

<?php if(theme_has_layout_part("header")) : ?>
<header class="masthead<?php echo (theme_get_option('theme_header_clickable') ? ' clickable' : ''); ?>">
	<div class="masthead-inner">
		<div class="site-header-container">
			<?php get_sidebar('header'); ?>
		</div>

		<?php if (theme_get_option('theme_use_default_menu')) { wp_nav_menu( array('theme_location' => 'primary-menu') );} else { ?><nav id="site-navigation" class="main-navigation" role="navigation">
		    <button class="menu-toggle"><?php _e( 'Primary Menu', 'trlf_s' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

		    <?php get_sidebar('nav'); ?> 
		</nav><?php } ?>
	</div>
</header>
<?php endif; ?>
