<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Ashby Energy
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ashby_energy_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'ashby_energy_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function ashby_energy_jetpack_setup
add_action( 'after_setup_theme', 'ashby_energy_jetpack_setup' );

function ashby_energy_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function ashby_energy_infinite_scroll_render