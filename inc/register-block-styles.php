<?php
/**
 * Block styles.
 *
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function fsedemo_register_block_styles() {

	// register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
	// 	'core/button',
	// 	array(
	// 		'name'  => 'fsedemo-flat-button',
	// 		'label' => __( 'Flat' ),
	// 	)
	// );
}
add_action( 'init', 'fsedemo_register_block_styles' );