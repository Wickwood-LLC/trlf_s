<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package TRLF_s Custom Theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function trlf_s_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'trlf_s_jetpack_setup' );
