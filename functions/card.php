<?php


function bootstrap_card( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'width' => '300px',
		'img' => '',
		'title' => '',
		'alt' => ''
		), $atts )
	);

	if ( empty($title) ) {
		return '
			<div class="card" style="width:' . esc_attr($width) . '">
				<img class="card-img-top" src="' . esc_attr($img) . '" alt="' . esc_attr($alt) . '">
				<div class="card-block">
					<p class="card-text">' . esc_attr($content) . '</p>
				</div>
			</div>
		';
	} else {
		return '
			<div class="card" style="width:' . esc_attr($width) . '">
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
