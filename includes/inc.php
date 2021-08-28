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
				'primary-menu'  => __( 'Primary Menu', 'personalbridge' ),
				'footer-menu-1' => __( 'Footer Menu 1', 'personalbridge' ),
				'footer-menu-2' => __( 'Footer Menu 2', 'personalbridge' ),
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


add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style( 'personalbridge-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '2.2.7' );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'alpine', get_template_directory_uri() . '/assets/js/alpine.js', array(), '0.01', true );
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '0.01', true );
	}
);

add_filter(
	'nav_menu_css_class',
	function( $classes, $item, $args, $depth ) {
		if ( is_object( $args ) && property_exists( $args, 'theme_location' ) && ! empty( $args->theme_location ) ) {
			if ( 'primary-menu' == $args->theme_location ) {
				$classes[] = 'relative font-medium hover:text-gray-900 md:ml-10 px-3 py-2 md:px-0 md:py-0';
				// block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50
				if ( is_object( $item ) && property_exists( $item, 'current' ) && $item->current ) {
					$classes[] = 'text-gray-900';
				} else {
					$classes[] = 'text-gray-500';
				}
			} else {
				$classes[] = 'text-base text-gray-500 hover:text-gray-900';
			}
		}

		return $classes;
	},
	100,
	4
);

function personalbridge_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'personalbridge_custom_excerpt_length', 999 );

function personalbridge_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'personalbridge_excerpt_more' );

