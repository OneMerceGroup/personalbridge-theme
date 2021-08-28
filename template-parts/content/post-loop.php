<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
	<div class="flex-shrink-0">	
		<?php if ( has_post_thumbnail() ) { ?>
			<?php the_post_thumbnail( 'medium', array( 'class' => 'h-48 w-full object-cover' ) ); ?>
		<?php } else { ?>
			<div class="h-48 w-full object-cover bg-gray-300 flex justify-center items-center">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
				</svg>
			</div>
		<?php } ?>
	</div>
	<div class="flex-1 bg-white p-6 flex flex-col justify-between">
		<div class="flex-1">
			<h2 class="block mt-2">
				<a href="<?php the_permalink(); ?>" class="text-xl font-semibold text-gray-900"><?php the_title(); ?></a>
			</h2>
			<div class="mt-3 post-excerpt text-base text-gray-500">
				<?php the_excerpt(); ?>
			</div>
			<div class="mt-6">
				<a href="<?php the_permalink(); ?>" class="font-medium text-indigo-600">
					Read more
				</a>
			</div>
		</div>
	</div>
</div>