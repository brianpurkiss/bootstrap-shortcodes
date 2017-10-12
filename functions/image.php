<?php

// For Boostrap's Images
// https://v4-alpha.getbootstrap.com/content/images/


function bss_bootstrap_image( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'img' => '',
		'alt' => '',
		'float' => ''
		), $atts )
	);

	if ( empty($float) ) {
		return '
			<img src="' . esc_attr($img) . '" alt="' . esc_attr($alt) . '" class="img-thumbnail">
		';
	} elseif ( $float == 'center' ) {
		return '
			<img src="' . esc_attr($img) . '" alt="' . esc_attr($alt) . '" class="img-thumbnail mx-auto d-block">
		';
	} else {
		return '
			<img src="' . esc_attr($img) . '" alt="' . esc_attr($alt) . '" class="img-thumbnail float-' . esc_attr($float) . '">
		';
	}
}
add_shortcode('img', 'bss_bootstrap_image');
