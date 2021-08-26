<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main text-gray-800">
			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				?>
				<h1 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate block text-center p-10"><?php the_title(); ?></h1>
				<?php

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
