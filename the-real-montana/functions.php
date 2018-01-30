<?php

function my_theme_enqueue_styles() {

    $parent_style = 'twentytwelve-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'after_setup_theme', 'register_primary_menu' );

function custom_sidebar() {

	$args = array(
		'id'            => 'featured-home',
		'name'          => __( 'Featured Home Widget', 'text_domain' ),
		'description'   => __( 'This is the area where the featured home section will live.', 'text_domain' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebar' );

function register_primary_menu() {
    register_nav_menu( 'montana-menu', __( 'Real Montana Menu', 'the-real-montana' ) );
}
?>
