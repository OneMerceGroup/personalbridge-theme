<?php

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main mt-16 mb-24 max-w-7xl mx-auto">
	
	<?php
	if ( ! is_front_page() && is_home() ) {
		?>
		<div class="text-center">
			<h1 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
			<?php _e( 'From the blog', 'personalbridge' ); ?>
			</h1>
			<p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
			<?php _e( 'Discover our latest blog post.', 'personalbridge' ); ?>
			</p>
		</div>
		<?php
	} else if ( is_search() ) {
		?>
		<div class="text-center">
			<h1 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
			<?php _e( 'Search results for: ', 'personalbridge' ); ?>
			</h1>
			<p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
			"<?php echo get_search_query(); ?>"
			</p>
		</div>
		<?php
	} else if ( is_archive() ) {
		?>
		<div class="text-center">
			<h1 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
			<?php the_archive_title(); ?>
			</h1>
			
		</div>
		<?php
	}
	?>
	<div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
	<?php
	if ( have_posts() ) {
		// Load posts loop.
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content/post', 'loop' );
		}
	} else {
		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content/content', 'none' );
	}
	?>
	</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php
get_footer();
