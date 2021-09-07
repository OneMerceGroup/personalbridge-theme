<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php
	if ( ! is_page_template( 'templates/frontpage-template.php' ) && ! is_404() ) {
		?>
			<div class="site">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'personalbridge' ); ?></a>
					<header id="masthead" class="site-header">
						<!-- Start --> 
						<div class="relative bg-gray-50 shadow">
							
							<div class="relative pt-6 pb-6">
								<div x-data="Components.popover({ open: false, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
								<nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
									<div class="flex items-center flex-1">
										<div class="flex items-center justify-between w-full md:w-auto">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<span class="sr-only">PersonalBridge</span>
											<img class="h-8 w-auto sm:h-10" src="https://personalbridge.sgp1.digitaloceanspaces.com/fulfillments/logo.png" alt="">
											</a>
											<div class="-mr-2 flex items-center md:hidden">
											<button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
												<span class="sr-only">Open main menu</span>
												<!-- Heroicon name: outline/menu -->
												<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
												</svg>
											</button>
											</div>
										</div>
										<div class="hidden md:block md:ml-10 md:space-x-10">
										<?php
										wp_nav_menu(
											array(
												'theme_location'  => 'primary-menu',
												'menu_class'      => 'menu-wrapper',
												'container_class' => 'primary-menu-container',
												'items_wrap'      => '<ul id="primary-menu-list" class="%2$s md:flex">%3$s</ul>',
												'fallback_cb'     => false,
											)
										);
										?>
										</div>
									</div>
									<div class="hidden md:block text-right">
										<a href="https://dashboard.personalbridge.com" target="_blank" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
											Get Started
										</a>
									</div>			
								</nav>

								<div x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-description="Mobile menu, show/hide based on menu open state." class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden z-50" x-ref="panel" @click.away="open = false" style="display: none;">
									<div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
										<div class="px-5 pt-4 flex items-center justify-between">
											<div>
											<img class="h-8 w-auto" src="https://personalbridge.sgp1.digitaloceanspaces.com/fulfillments/logo.png" alt="">
											</div>
											<div class="-mr-2">
											<button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="toggle">
												<span class="sr-only">Close main menu</span>
												<!-- Heroicon name: outline/x -->
												<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
												</svg>
											</button>
											</div>
										</div>
										<div class="px-2 pt-2 pb-3 space-y-1">
											<?php
											wp_nav_menu(
												array(
													'theme_location' => 'primary-menu',
													'menu_class'  => 'menu-wrapper',
													'container_class' => 'primary-menu-container',
													'items_wrap'  => '<ul id="primary-menu-list" class="%2$s md:flex">%3$s</ul>',
													'fallback_cb' => false,
												)
											);
											?>
										</div>
										<a href="https://dashboard.personalbridge.com" target="_blank" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
										Get Started
										</a>
									
									</div>
								</div>
							</div>
						</div>
						<!-- End -->
						
					</header><!-- #masthead -->

				<div id="content" class="site-content relative max-w-7xl mx-auto px-4 sm:px-6">	
			<?php
	}
	?>
