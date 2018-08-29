<?php

// Enable Theme Support
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5' );
add_theme_support( 'title-tag' );


function theme_prefix_setup() {

    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width' => true,
    ) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function theme_prefix_the_custom_logo() {

    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
}

// Load Roboto Google Fonts
function roboto_google_fonts() {

    wp_enqueue_style( 'font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,500,700', false );
}
add_action( 'wp_enqueue_scripts', 'roboto_google_fonts' );

// Load Cinzel Google Fonts
function cinzel_google_fonts() {

    wp_enqueue_style( 'font-cinzel', 'https://fonts.googleapis.com/css?family=Cinzel:400,700', false );
}
add_action( 'wp_enqueue_scripts', 'cinzel_google_fonts' );


// Load Font Awesome
function font_awesome_styles() {
    wp_enqueue_style( 'fontawesome_css', get_template_directory_uri() . '/src/css/all.min.css' );
    wp_enqueue_style( 'owl-1_css', get_template_directory_uri() . '/src/css/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-2_css', get_template_directory_uri() . '/src/css/owl.theme.default.min.css' );

}
add_action( 'wp_enqueue_scripts', 'font_awesome_styles' );


// Load Theme Bootstrap
function bootstrap_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap.css' );

}
add_action( 'wp_enqueue_scripts', 'bootstrap_styles' );

// Load Theme JS
function theme_js() {

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/src/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/src/js/jquery.min.js', array('jquery','bootstrap_js'), '', true );

    wp_enqueue_script( 'owl_js', get_template_directory_uri() . '/src/js/owl.carousel.min.js', array('jquery','bootstrap_js'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

function wpb_adding_scripts() {

    wp_enqueue_script ('my_amazing_script', get_template_directory_uri() . '/src/js/app.js', array('jquery'),'1.1', true);

}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Create a custom menus
function register_theme_menus() {
  register_nav_menus(
    array(
        'primary' => __( 'Primary Menu' ),
        'footer' => __( 'Footer Menu' )
    )
);
}
add_action( 'after_setup_theme', 'register_theme_menus' );

function cptui_register_my_cpts_retreats() {

    /**
     * Post Type: Retreats.
     */

    $labels = array(
        "name" => __( "Retreats", "" ),
        "singular_name" => __( "Retreat", "" ),
    );

    $args = array(
        "label" => __( "Retreats", "" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "retreats", "with_front" => false ),
        "query_var" => true,
        "menu_icon" => "dashicons-format-image",
        "supports" => array( "title", "editor", "thumbnail", "page-attributes" ),
        "taxonomies" => array( "category", "post_tag", "product_cat", "product_tag", "product_shipping_class" ),
    );

    register_post_type( "retreats", $args );
}

add_action( 'init', 'cptui_register_my_cpts_retreats' );

function cptui_register_my_cpts_testimonials() {

    /**
     * Post Type: Testimonials.
     */

    $labels = array(
        "name" => __( "Testimonials", "" ),
        "singular_name" => __( "Testimonials", "" ),
    );

    $args = array(
        "label" => __( "Testimonials", "" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "testimonials", "with_front" => false ),
        "query_var" => true,
        "menu_icon" => "dashicons-groups",
        "supports" => array( "title", "editor", "thumbnail" ),
    );

    register_post_type( "testimonials", $args );
}

add_action( 'init', 'cptui_register_my_cpts_testimonials' );


?>
