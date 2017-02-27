<?php

if ( ! function_exists( 'blank_setup' ) ) :
function blank_setup() {
	load_theme_textdomain( 'blank', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'blank' ),
	) );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );
	add_theme_support( 'custom-background', apply_filters( 'blank_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'blank_setup' );

function blank_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'blank' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'blank_widgets_init' );

function marmalade_scripts_and_styles() {
	wp_enqueue_style( 'marmalade-style', get_stylesheet_uri() );
	wp_enqueue_script( 'marmalade-scripts', get_template_directory_uri() . '/js/script.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marmalade_scripts_and_styles' );
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';
