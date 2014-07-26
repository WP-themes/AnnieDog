<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package AnnieDog
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function annie_dog_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'annie_dog_jetpack_setup' );
