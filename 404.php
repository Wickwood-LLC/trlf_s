<?php
/**
 *
 * 404.php
 *
 * The template for displaying 404 pages (Not Found).
 * Used when WordPress cannot find a post or page that matches the query.
 *
 * To change the error message:
 * 1. Open functions.php file
 * 2. Find the theme_404_content() function
 * 3. Change the error_message variable value
 *
 * Additional settings are available under the Appearance -> Theme Options -> Pages.
 *
 */
get_header(); ?>
			<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_sidebar('top'); ?>
			<?php theme_404_content(); ?>
			<?php get_sidebar('bottom'); ?>
		</main> <!-- #main -->
	</div> <!-- #primary -->

	<?php get_sidebar(); ?>
	<?php get_sidebar('secondary'); ?>

</div> <!-- #content -->
<?php get_footer(); ?>