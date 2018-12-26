<?php

/**
 *
 * single.php
 *
 * The single post template. Used when a single post is queried.
 * 
 */
get_header();
?>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_sidebar('top'); ?>
			<?php
			if (have_posts()) {
				/* Display navigation to next/previous posts when applicable */
				if (theme_get_option('theme_top_single_navigation')) {
					theme_post_navigation(
							array(
								'prev_link' => theme_get_previous_post_link('&laquo; %link'),
								'next_link' => theme_get_next_post_link('%link &raquo;')
							)
					);
				}
				while (have_posts()) { ?>
					<div class="post-container">
					  <?php the_post();
					  get_template_part('content', 'single'); ?>
					  <span class="post_tags"><?php the_tags(); ?></span>
		  			</div><?php
				    
				}
				/* Display navigation to next/previous posts when applicable */
				if (theme_get_option('theme_bottom_single_navigation')) {
					theme_post_navigation(
							array(
								'prev_link' => theme_get_previous_post_link('&laquo; %link'),
								'next_link' => theme_get_next_post_link('%link &raquo;')
							)
					);
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