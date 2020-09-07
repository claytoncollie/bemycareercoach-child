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
	wp_enqueue_style( 'child-css', get_stylesheet_uri(), array(), '1.0.2' );
}

add_filter( 'algolia_should_index_searchable_post', 'twentysixteen_child_exclude_post_types', 10, 2 );
/**
 * @param bool    $should_index
 * @param WP_Post $post
 *
 * @return bool
 */
function twentysixteen_child_exclude_post_types( $should_index, $post ) {
	// Add all post types you don't want to make searchable.
	$excluded_post_types = array( 'page' );

	if ( false === $should_index ) {
		return false;
	}

	return ! in_array( $post->post_type, $excluded_post_types, true );
}
