<?php

function enqueue_fashion_blog_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_fashion_blog_styles');


function enqueue_fashion_blog_google_fonts()
{
	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=PT+Serif&display=swap', false);
	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Darker+Grotesque&display=swap', false);
	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=PT+Sans&display=swap', false);
}
add_action('wp_enqueue_scripts', 'enqueue_fashion_blog_google_fonts');


function enqueue_fashion_blog_FontAwesome()
{
	wp_enqueue_style('font-awesone', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
}
add_action('wp_enqueue_scripts', 'enqueue_fashion_blog_FontAwesome');

add_theme_support('menus');

register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
	)
);

?>
