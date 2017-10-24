<?php

// For Boostrap's Cards
// https://v4-alpha.getbootstrap.com/components/card/


function bss_bootstrap_card( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'width' => '300px',
		'img' => '',
		'alt' => '',
		'float' => 'right'
		), $atts )
	);

	if ( $float == 'center' ) {
		return '
			<div class="card mx-auto d-block" style="max-width:' . esc_attr($width) . 'px;">
				<img class="card-img-top" src="' . esc_attr($img) . '" alt="' . esc_attr($alt) . '">
				<div class="card-block">
					<p class="card-text">' . esc_attr($content) . '</p>
				</div>
			</div>
		';
	} else {
		return '
			<div class="card" style="max-width:' . esc_attr($width) . 'px;float:' . esc_attr($float) . '">
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
add_shortcode('card', 'bss_bootstrap_card');
