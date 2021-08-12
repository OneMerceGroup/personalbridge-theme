<?php

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'taiwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '2.2.7' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '0.01', true );
} );

