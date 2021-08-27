<?php

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main mt-6 mb-24">

	<?php
	if ( have_posts() ) {

		// Load posts loop.
		while ( have_posts() ) {
			the_post();
			the_excerpt();
		}
	} else {
		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content/content', 'none' );
	}
	?>

	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php
get_footer();
