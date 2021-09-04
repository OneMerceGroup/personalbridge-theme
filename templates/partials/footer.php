<?php
	$footer_bg_class = 'bg-white';
if ( ! is_page_template( 'templates/frontpage-template.php' ) ) {
	$footer_bg_class = 'bg-gray-50';
	?>
			</div><!-- #content -->
		</div><!-- .site -->
	<?php
}
?>

	<!-- This example requires Tailwind CSS v2.0+ -->

	<footer class="<?php echo esc_attr( $footer_bg_class ); ?>" aria-labelledby="footer-heading">
		<h2 id="footer-heading" class="sr-only">Footer</h2>
		<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
			<div class="xl:grid xl:grid-cols-3 xl:gap-8">
			<div class="space-y-8 xl:col-span-1">
				<img class="h-10" src="https://p198.p4.n0.cdn.getcloudapp.com/items/mXurb4Dx/1de29d3c-40a1-4368-994e-5a035eea02a7.png" alt="PersonalBridge">
				<p class="text-gray-500 text-base">
				Making better ecommerce user experience with the best tools for personalized products.
				</p>
				<div class="flex space-x-6">

				<a href="https://www.facebook.com/PersonalBridge" target="_blank" class="text-gray-400 hover:text-gray-500">
					<span class="sr-only">Facebook Fanpage</span>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<title>fb 3@1x</title>
						<g id="FBPage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="FBPage-1" transform="translate(-1041.000000, -8376.000000)">
								<g id="fbp" transform="translate(1041.000000, 8376.000000)" >
									<rect id="Rectangle" x="0" y="9.09494702e-13" width="24" height="24"/>
									<path d="M9.03153,23 L9,13 L5,13 L5,9 L9,9 L9,6.5 C9,2.7886 11.29832,1 14.60914,1 C16.19506,1 17.55807,1.11807 17.95529,1.17085 L17.95529,5.04948 L15.65906,5.05052 C13.85845,5.05052 13.50981,5.90614 13.50981,7.16171 L13.50981,9 L18.75,9 L16.75,13 L13.50981,13 L13.50981,23 L9.03153,23 Z" id="Icon-Color" fill="currentColor" fill-rule="nonzero"/>
								</g>
							</g>
						</g>
					</svg>
				</a>

				<a href="https://www.facebook.com/groups/1440391576391257" target="_blank" class="text-gray-400 hover:text-gray-500">
					<span class="sr-only">Facebook Local Group</span>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19px" height="22px" viewBox="0 0 19 22" version="1.1">
						<title>fb 2@1x</title>
						<g id="FBGroup" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="FBGroup-1" transform="translate(-1115.000000, -8377.000000)" fill="currentColor" fill-rule="nonzero">
								<g id="fbg" transform="translate(1115.000000, 8377.000000)">
									<path d="M9.60914,0 C11.19506,0 12.55807,0.11807 12.95529,0.17085 L12.95529,4.04948 L10.65906,4.05052 C8.85845,4.05052 8.50981,4.90614 8.50981,6.16171 L8.50981,8 L13.75,8 C11.6541226,8.3228287 9.9873171,9.9354396 9.5901688,11.9998246 L8.50981,12 L8.50981,22 L4.03153,22 L4,12 L0,12 L0,8 L4,8 L4,5.5 C4,1.7886 6.29832,0 9.60914,0 Z M19,20.5 L19,22 L10,22 L10,20.5 L19,20.5 Z M14.5,9.45 C16.4329966,9.45 18,11.0170034 18,12.95 C18,14.6252637 16.8230064,16.0256259 15.2508322,16.3692733 L15.25,19.5 L13.75,19.5 L13.7501592,16.3694899 C12.1774884,16.0262145 11,14.6256158 11,12.95 C11,11.0170034 12.5670034,9.45 14.5,9.45 Z" id="Shape"/>
								</g>
							</g>
						</g>
					</svg>
				</a>

				<a href="https://www.youtube.com/channel/UCANC566iEL-1ecyQ9uQ-gyQ" target="_blank" class="text-gray-400 hover:text-gray-500">
					<span class="sr-only">Youtube Chanel</span>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="24px" viewBox="0 0 28 24" version="1.1">
						<path d="M10 9.333l5.333 2.662-5.333 2.672v-5.334zm14-4.333v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-4 7c-.02-4.123-.323-5.7-2.923-5.877-2.403-.164-7.754-.163-10.153 0-2.598.177-2.904 1.747-2.924 5.877.02 4.123.323 5.7 2.923 5.877 2.399.163 7.75.164 10.153 0 2.598-.177 2.904-1.747 2.924-5.877z" fill="currentColor" fill-rule="nonzero"/>
					</svg>
				</a>

				</div>
			</div>
			<div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
				<?php
					$footer_menus = array(
						'Footer Menu 1' => wp_nav_menu(
							array(
								'theme_location'  => 'footer-menu-1',
								'menu_class'      => 'footer-menu-wrapper',
								'container_class' => 'footer-menu-container',
								'items_wrap'      => '<ul class="%2$s mt-4 space-y-4">%3$s</ul>',
								'fallback_cb'     => false,
								'echo'            => false,
							)
						),
						'Footer Menu 2' => wp_nav_menu(
							array(
								'theme_location'  => 'footer-menu-2',
								'menu_class'      => 'footer-menu-wrapper',
								'container_class' => 'footer-menu-container',
								'items_wrap'      => '<ul class="%2$s mt-4 space-y-4">%3$s</ul>',
								'fallback_cb'     => false,
								'echo'            => false,
							)
						),
					);
					foreach ( $footer_menus as $location => $menu_content ) {
						$menu_slug_location = sanitize_title( $location );
						$menu_name          = wp_get_nav_menu_name( $menu_slug_location );

						if ( ! empty( $menu_content ) ) {
							?>
						<div class="md:grid md:grid-cols-2 grid-cols-1 md:gap-8">
							<div class="md:block hidden pb-sm-hidden"></div>
							<div class="mt-12 md:mt-0">
								<h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
									<?php echo esc_html( $menu_name ); ?>
								</h3>
								<?php echo $menu_content; ?>
							</div>
						</div>
							<?php
						} else {
							?>
							<p>Please go to <strong>Appearance -> Menus</strong> to create or assign a menu to location <strong><?php echo esc_html( $location ); ?></strong></p>
							<?php
						}
					}
					?>
			</div>
			</div>
			<div class="mt-12 border-t border-gray-200 pt-8">
			<p class="text-base text-gray-400 xl:text-center">
				&copy; <?php echo date( 'Y' ); ?> PersonalBridge, Inc. All rights reserved.
			</p>
			</div>
		</div>
		<?php wp_footer(); ?>
	</footer>
	
</body>
</html>
