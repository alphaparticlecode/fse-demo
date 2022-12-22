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

	register_block_style(
		'core/heading',
		array(
			'name'  => 'fsedemo-bordered-heading',
			'label' => __( 'With Border' ),
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'  => 'fsedemo-bubble-heading',
			'label' => __( 'With Bubble' ),
		)
	);
}
add_action( 'init', 'fsedemo_register_block_styles' );