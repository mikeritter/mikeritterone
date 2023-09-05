<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MRONE
 * @since 0.0.1
 */

/**
 * Enqueue the style.css file.
 *
 * @since 0.0.1
 */
function mrone_styles() {
    wp_enqueue_style(
        'mrone-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'mrone_styles' );

/**
 * Add support for block styles.
 *
 * @since 0.0.1
 */
if ( ! function_exists( 'mrone_setup' ) ) {
    function mrone_setup() {
        add_theme_support( 'wp-block-styles' );
    }
}
add_action( 'after_setup_theme', 'mrone_setup' );