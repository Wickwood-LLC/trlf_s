<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package TRLF_s Custom Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

<?php if ( dynamic_sidebar('secondary_widget_area') ) : else : endif; ?>
