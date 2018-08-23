<?php

// Enable Theme Support
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5' );
add_theme_support( 'title-tag' );

// Load Theme CSS
// function theme_styles() {
//     wp_enqueue_style( 'main_css', get_stylesheet_uri() );
// }
// add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Load Theme Bootstrap
function bootstrap_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap.css' );

}
add_action( 'wp_enqueue_scripts', 'bootstrap_styles' );

// Load Theme JS
function theme_js() {

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/src/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/src/js/jquery.min.js', array('jquery','bootstrap_js'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// Create a custom menus
function register_theme_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Main Menu' )
  )
);
}
add_action( 'init', 'register_theme_menus' );

?>
