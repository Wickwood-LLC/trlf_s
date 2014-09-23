<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TRLF_s Custom Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'trlf_s' ); ?></a>

	<header id="masthead" class="masthead" role="banner">

		<?php if ( dynamic_sidebar('header_widget_area') ) : else : endif; ?>

		<div class="masthead-inner">
			<div class="site-header-container">
				<div class="site-branding">
					<div class="site-branding-container">
						<a class="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<div class="logo"></div>
						</a>
						<div class="site-title-container">
							<h1 class="site-title-line1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">The</a></h1>
							<h1 class="site-title-line2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Randall Law Firm</a></h1>
							<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						</div>
						<div class="site-contact-container">
							<h3><span class="site-header-address">1777 Western Ave. Albany, NY 12203</span><span class="site-header-phone">Phone: 518-869-1205</span><span class="site-header-fax">Fax: 518-452-2145</span></h3>
							<div class="site-header-attorney-container">
								<h3 class="site-header-attorney">Denise McCarthy Randall</h3> 
								<h3 class="site-header-attorney">Robert G. Randall</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="header-image-container">
					<div class="header-image"></div>
				</div>
			</div>

			<?php
			global $options;
			foreach ($options as $value) {
			    if (get_option($value['id']) === FALSE) {
			        $$value['id'] = $value['std'];
			    }
			    else {
			        $$value['id'] = get_option( $value['id'] );
			    }
			}
			?>

			<?php if ( dynamic_sidebar('first_navigation_widget_area') ) : else : endif; ?>
			<?php if ( dynamic_sidebar('second_navigation_widget_area') ) : else : endif; ?>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'trlf_s' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
