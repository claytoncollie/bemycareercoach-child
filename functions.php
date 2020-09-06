<?php
/**
 * Functions
 * 
 * @since 1.0.0
 */

add_action( 'wp_enqueue_scripts', 'twentysixteen_child_enqueue_assets' );
/**
 * Enqueue Assets
 */
function twentysixteen_child_enqueue_assets() {
	wp_enqueue_style( 'parent-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-css', get_stylesheet_uri(), array(), '1.0.1' );
}
