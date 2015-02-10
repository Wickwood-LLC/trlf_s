<?php get_header(); ?>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_sidebar('top'); ?>
			<?php
			if (have_posts()) {
				/* Display navigation to next/previous pages when applicable */
				if (theme_get_option('theme_' . (theme_is_home() ? 'home_' : '') . 'top_posts_navigation')) {
					theme_page_navigation();
				}

				for ($i = 0; $i < $wp_query->post_count; $i++) { ?>
				  	<div class="post-container">
					  <?php theme_get_next_post(); ?>
  
					  <span class="post_tags"><?php the_tags(); ?></span>
		  			</div><?php
				}

				/* Display navigation to next/previous pages when applicable */
				if (theme_get_option('theme_bottom_posts_navigation')) {
					theme_page_navigation();
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