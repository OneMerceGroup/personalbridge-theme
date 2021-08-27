<article id="post-<?php the_ID(); ?>" <?php post_class('prose-indigo prose-lg text-gray-500 mx-auto'); ?>>
	<?php
		if ( has_post_thumbnail() ) {
			?>
			<div class="post-thumbnail text-center my-10">
				<?php the_post_thumbnail('full', array( 'class' => 'm-auto' ) ); ?>
			</div>
			<?php
		}
	?>
	<h1 class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl p-10"><?php the_title(); ?></h1>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'personalbridge' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Post title. Only visible to screen readers. */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'personalbridge' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
