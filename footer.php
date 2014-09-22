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
			<p><a href="http://dev.randalllawfirm.com/feed/" class="rss-tag-icon" title="Randall Law Firm RSS Feed" style="float: left; line-height: 0px;"></a></p>
			<p><a href="http://legalformsgenerator.com/?f=102&u=746d8756-f047-11e3-bbbe-fa163ec505ba&d=4" target="_blank">Legal & Policies</a> | <a href="http://legalformsgenerator.com/?f=100&u=746d8756-f047-11e3-bbbe-fa163ec505ba&d=4" target="_blank">Privacy</a></p>
			<p>Copyright © 2014. All Rights Reserved.</p>

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
