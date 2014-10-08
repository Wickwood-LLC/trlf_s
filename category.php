<?php get_header(); ?>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_sidebar('top'); ?>
			<?php

			if (have_posts()) {
				/* Start the Loop */
				while (have_posts()) {
					the_post();
					get_template_part('content', 'page');
				}
			} else {
				theme_404_content();
			}
			?>
			<?php get_sidebar('bottom'); ?>
		</main> <!-- #main -->
	</div> <!-- #primary -->

	<?php get_sidebar(); ?>
	<?php get_sidebar('secondary'); ?>

</div> <!-- #content -->
<?php get_footer(); ?>
