<?php

// For Boostrap's Images
// https://v4-alpha.getbootstrap.com/content/images/

function bootstrap_image( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'img' => '',
		'alt' => '',
		'float' => ''
		), $atts )
	);
float-left
	if ( empty($float) ) {
		return '
			<img src="' . esc_attr($img) . '" alt="' . esc_attr($alt) . '" class="img-thumbnail">
		';
	} else {
		return '
			<img src="' . esc_attr($img) . '" alt="' . esc_attr($alt) . '" class="img-thumbnail float-float-' . esc_attr($float) . '">
		';
	}
}
add_shortcode('img', 'bootstrap_image');
