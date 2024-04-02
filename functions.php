<?php
/**
* cassette functions and definitions
* @link https://developer.wordpress.org/themes/basics/theme-functions/
* @package cassette
*/

/* TODO: cross-reference with SmilePl and Foundation. */
/* Set container width here? */

/* Store the theme's directory path and uri in constants */
define('THEME_DIR_PATH', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());


/* Timestamp css files (works on js too):
https://www.youtube.com/watch?v=kHp_yz3_6rI */

/* Enqueue styles and scripts */
function cassette_scripts() {

    // load Bootstrap CSS v5.1
    wp_enqueue_style( 'cassette-bootstrap-css', THEME_DIR_URI . '/includes/css/bootstrap.min.css');

    // load website CSS, versioned
    wp_enqueue_style( 'cassette-css', THEME_DIR_URI . '/assets/css/style.css', [], filemtime( get_stylesheet_directory() . '/assets/css/style.css') );

	// load Bootstrap JS v5.1
	wp_enqueue_script( 'cassette-bootstrap-js', THEME_DIR_URI . '/includes/js/bootstrap.min.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'cassette_scripts' );

// ACF Options
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'menu_title'    => 'Homepage Content',
        'menu_slug'     => 'homepage-site-content',
        'parent_slug'   => '',
        'capability'    => 'edit_posts',
        'icon_url'      => 'dashicons-admin-home',
        'redirect'      => true
    ));
     acf_add_options_sub_page(array(
        'page_title'    => 'Hero Slider',
        'menu_title'    => 'Hero Slider',
        'parent_slug'   => 'homepage-site-content',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Download Section',
        'menu_title'    => 'Download Section',
        'parent_slug'   => 'homepage-site-content',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Inst Money Section',
        'menu_title'    => 'Inst Money Section',
        'parent_slug'   => 'homepage-site-content',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Newsletter Signup',
        'menu_title'    => 'Newsletter Signup',
        'parent_slug'   => 'homepage-site-content',
    ));

    acf_add_options_page(array(
        'menu_title'    => 'Additional',
        'menu_slug'     => 'additional-site-content',
        'parent_slug'   => '',
        'capability'    => 'edit_posts',
        'icon_url'      => 'dashicons-admin-settings',
        'redirect'      => true
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Content',
        'menu_title'    => 'Footer Content',
        'parent_slug'   => 'additional-site-content',
    ));
}

/* Register navigation */
function cassette_nav() {
    wp_nav_menu( 
        array( 
            'theme_location'    => 'primary',
            'depth'             => 2,
            'menu_id'           => 'primary-menu', 
            'container_class'   => 'ms-auto', 
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback', // check this
            'walker'            => new wp_bootstrap_navwalker(), // check this
        ) 
    );
}

/* Register menus */
if ( ! function_exists( 'cassette_setup' ) ) :
	function cassette_setup() {

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'cassette' ),
        'footer'  => __( 'Footer Menu', 'cassette' ),
    ) );

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    // To make the theme widget aware: https://developer.wordpress.org/themes/functionality/widgets/
}
endif;
add_action( 'after_setup_theme', 'cassette_setup');

/* Load custom WordPress nav walker */
require_once THEME_DIR_PATH . '/includes/wp-bootstrap-navwalker.php';
