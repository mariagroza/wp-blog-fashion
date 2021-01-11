<?php

function blogfashion_styles() {

	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'blogfashion-style', get_stylesheet_uri(), array(), $version);
}
add_action ('wp_enqueue_style', 'blogfashion_styles');

function blogfashion_google_fonts()
{
	wp_enqueue_style('blogfashion_google_fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap');
}
add_action ('wp_enqueue_style', 'blogfashion_google_fonts');

?>