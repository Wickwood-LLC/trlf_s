<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TRLF_s Custom Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p><a href="[rss_url]" class="art-rss-tag-icon" title="[rss_title]" style="float: left; line-height: 0px;"></a></p>
			<p><a href="http://legalformsgenerator.com/?f=102&u=746d8756-f047-11e3-bbbe-fa163ec505ba&d=4" target="_blank">Legal & Policies</a> | <a href="http://legalformsgenerator.com/?f=100&u=746d8756-f047-11e3-bbbe-fa163ec505ba&d=4" target="_blank">Privacy</a></p>
			<p>Copyright © [year]. All Rights Reserved.</p>
			
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'trlf_s' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'trlf_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'trlf_s' ), 'TRLF_s Custom Theme', '<a href="http://www.wickwoodmarketing.com/wp/themes/trlf_s" rel="designer">Wickwood Marketing</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</div>

<?php if ( dynamic_sidebar('first_footer_widget_area') ) : else : endif; ?>
<?php if ( dynamic_sidebar('second_footer_widget_area') ) : else : endif; ?>
<?php if ( dynamic_sidebar('third_footer_widget_area') ) : else : endif; ?>
<?php if ( dynamic_sidebar('fourth_footer_widget_area') ) : else : endif; ?>

<div id="wp-footer">
	<?php wp_footer(); ?>
	<!-- <?php printf(__('%d queries. %s seconds.', THEME_NS), get_num_queries(), timer_stop(0, 3)); ?> -->
</div>

</body>
</html>
