<?php

// For Boostrap's Cards
// https://v4-alpha.getbootstrap.com/components/card/

function bootstrap_card( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'width' => '300px',
		'img' => '',
		'title' => '',
		'alt' => '',
		'float' => 'right'
		), $atts )
	);

	if ( empty($title) ) {
		return '
			<div class="card" style="width:' . esc_attr($width) . ';float:' . esc_attr($float) . '">
				<img class="card-img-top" src="' . esc_attr($img) . '" alt="' . esc_attr($alt) . '">
				<div class="card-block">
					<p class="card-text">' . esc_attr($content) . '</p>
				</div>
			</div>
		';
	} else {
		return '
			<div class="card" style="width:' . esc_attr($width) . ';float:' . esc_attr($float) . '">
				<img class="card-img-top" src="' . esc_attr($img) . '" alt="' . esc_attr($alt) . '">
				<div class="card-block">
					<h5 class="card-title">' . esc_attr($title) . '</h5>
					lorem ipsum
					<p class="card-text">' . esc_attr($content) . '</p>
				</div>
			</div>
		';
	}
}
add_shortcode('card', 'bootstrap_card');
