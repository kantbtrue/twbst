<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Core
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function product_docs_style() {
	wp_enqueue_style(
		'product-docs-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_style(
		'product-docs-tailwind',
		get_theme_file_uri( '/build/css/style.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'product_docs_style' );