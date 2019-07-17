<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {

register_nav_menus(
array(
	'primary-menu' => __( 'Primary Menu'),
)
);
}
add_action( 'init', 'register_theme_menus' );



function wpt_theme_styles(){
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/foundation.css');
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/normalize.css');

	if( is_page_template( 'page.php') ){
		wp_enqueue_style( 'page_css', get_stylesheet_directory_uri() . '/custom.css' );
	}
	
	wp_enqueue_style( 'contactstylesheet_css', get_template_directory_uri() . '/contactstylesheet/.css');
	wp_enqueue_style( 'servicestyle_css', get_template_directory_uri() . '/servicestyle.css');
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

