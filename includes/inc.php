<?php


if ( ! function_exists( 'personalbridge_setup' ) ) {
	function personalbridge_setup() {
		load_theme_textdomain( 'personalbridge', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 350, 350 );

		register_nav_menus(
			array(
				'primary-menu' => __( 'Primary Menu', 'personalbridge' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);
	}
}
add_action( 'after_setup_theme', 'personalbridge_setup' );


add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '2.2.7' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'alpine', get_template_directory_uri() . '/assets/js/alpine.js', array(), '0.01', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '0.01', true );
} );

add_filter( 'nav_menu_css_class', function( $classes, $item, $args, $depth ) {
	$classes[] = 'relative font-medium hover:text-gray-900 ml-10';
	if ( is_object( $item ) && property_exists( $item, 'current' ) && $item->current ) {
		$classes[] = 'text-gray-900';
	} else {
		$classes[] = 'text-gray-500';
	}
	
	return $classes;
}, 100, 4 );
