<?php

require get_stylesheet_directory() . '/includes/inc.php';

function personalbridge_post_thumbnail() {
	if ( is_singular() ) :
		?>

		<figure class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</figure><!-- .post-thumbnail -->

		<?php
	else :
		?>

	<figure class="post-thumbnail">
		<a class="post-thumbnail-inner" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( 'post-thumbnail' ); ?>
		</a>
	</figure>

		<?php
	endif; // End is_singular().
}

function personalbridge_the_posts_navigation() {
	the_posts_pagination(
		array(
			'mid_size'  => 2,
			'prev_text' => sprintf(
				'%s <span class="nav-prev-text">%s</span>',
				'<<',
				__( 'Newer posts', 'personalbridge' )
			),
			'next_text' => sprintf(
				'<span class="nav-next-text">%s</span> %s',
				__( 'Older posts', 'personalbridge' ),
				'>>'
			),
		)
	);
}

add_action( 'wp_head', 'personalbridge_head' );
function personalbridge_head() {
	if ( is_404() ) {
		?>
		<style>.st0{fill:#fff}.st1{fill:#b5dfea}.st2{opacity:.55;fill:#90cedd}.st3{fill:#d7f0f9}.st4{fill:#0582c1}.st5{fill:#79c9e8}.st6{fill:#ffbf4d}.st7{fill:#00668e}.st8{fill:#05556d}.st9{fill:#f98d3d}.st10{fill:#ed701b}.st11{fill:none}.st12{fill:#efaa3a}.st13{opacity:.29;fill:#f98d2b}.st14{fill:#49b4d6}.st15{fill:#ff9f50}.st16{fill:#f77e2d}.st17{opacity:.55;fill:url(#SVGID_1_)}</style>
		<?php
	}
}
