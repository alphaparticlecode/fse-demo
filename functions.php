<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jace
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Check if the WordPress version is 6.0 or higher, and if the PHP version is at least 7.4.
 * If not, do not activate.
 */
if ( version_compare( $GLOBALS['wp_version'], '6.0-RC4-53425', '<' ) || version_compare( PHP_VERSION_ID, '70400', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

function fsedemo_setup() {
    add_theme_support( 'wp-block-styles' );
    add_editor_style( './assets/css/min/style-shared.min.css' );
}
add_action( 'after_setup_theme', 'fsedemo_setup' );

function fsedemo_enqueue_block_variations() {
    wp_enqueue_script( 
        'fsedemo-enqueue-block-variations', 
        get_template_directory_uri() . '/assets/js/variations.js', 
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ) 
    );
}
add_action( 'enqueue_block_editor_assets', 'fsedemo_enqueue_block_variations' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function fsedemo_styles() {
    wp_enqueue_style(
        'fsedemo-style',
        get_stylesheet_uri(),
        [],
        THEME_VERSION
    );
    wp_enqueue_style(
        'fsedemo-shared-styles',
        get_theme_file_uri( 'assets/css/min/style-shared.min.css' ),
        [],
        THEME_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'fsedemo_styles' );

// Block styles.
require_once get_theme_file_path( 'inc/register-block-styles.php' );