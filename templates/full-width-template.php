<?php
/*
 * Template Name: Full Width
 * Template Post Type: post, page, whatever
 */

get_header();

if ( have_posts() ) {
	// Load posts loop.
	while ( have_posts() ) {
		the_post();
		the_content();
	}
}
get_footer();
