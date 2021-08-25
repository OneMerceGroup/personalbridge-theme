<?php
/*
 * Template Name: Front Page
 * Template Post Type: post, page, whatever
 */

get_header();
?>

<div class="relative bg-gray-50 overflow-hidden">
  <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
	<svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784" fill="none" viewBox="0 0 640 784">
	  <defs>
		<pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
		  <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
		</pattern>
	  </defs>
	  <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
	  <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
	</svg>
  </div>

  <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
  	<div x-data="Components.popover({ open: false, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
	  <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
		<div class="flex items-center flex-1">
		  <div class="flex items-center justify-between w-full md:w-auto">
			<a href="<?php echo esc_url( home_url('/') ); ?>">
			  <span class="sr-only">PersonalBridge</span>
			  <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
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
			<a href="<?php echo esc_url( home_url('/') ); ?>" class="font-medium text-gray-900 hover:text-gray-900">Home</a>

			<a href="#features" class="font-medium text-gray-500 hover:text-gray-900">Features</a>

			<a href="https://personalbridge.myshopify.com/" class="font-medium text-gray-500 hover:text-gray-900">Demos</a>

			<a href="#pricing" class="font-medium text-gray-500 hover:text-gray-900">Pricing</a>

			<a href="#partners" class="font-medium text-gray-500 hover:text-gray-900">Partners</a>

            <a href="https://support.personalbridge.com" class="font-medium text-gray-500 hover:text-gray-900">Helps</a>
		  </div>
		</div>
		<div class="hidden md:block text-right">
		  <span class="inline-flex rounded-md shadow-md ring-1 ring-black ring-opacity-5">
			<a href="https://dashboard.personalbridge.com" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
			  Log in
			</a>
		  </span>
		</div>
	  </nav>

	  <div x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-description="Mobile menu, show/hide based on menu open state." class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-ref="panel" @click.away="open = false" style="display: none;">
		<div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
		  <div class="px-5 pt-4 flex items-center justify-between">
			<div>
			  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
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
			<a href="<?php echo esc_url( home_url('/') ); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>

			<a href="#features" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

			<a href="https://personalbridge.myshopify.com/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Demos</a>

			<a href="#pricing" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Pricing</a>
			<a href="#partners" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Partners</a>
			<a href="https://support.personalbridge.com" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Helps</a>
		  </div>
		  <a href="https://dashboard.personalbridge.com" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
			Log in
		  </a>
		</div>
	  </div>
	</div>

	<main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
	  <div class="lg:grid lg:grid-cols-12 lg:gap-8">
		<div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
		  <h1>
			<span class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">PersonalBridge</span>
			<span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-5xl">
			  <span class="block text-gray-900">Design, sell, and print </span>
			  <span class="block text-indigo-600">custom products faster</span>
			</span>
		  </h1>
		  <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
          Making better ecommerce user experience with the best tools for personalized products.
		  </p>
		  <?php get_template_part( 'templates/partials/install', 'app' ); ?>
		  
		</div>
		<div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
		  <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden" width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
			<defs>
			  <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
				<rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
			  </pattern>
			</defs>
			<rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
			<rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
		  </svg>
		  <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
			<button type="button" class="relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
			  <span class="sr-only">Watch our video to learn more</span>
			  <img class="w-full" src="https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
			  <div class="absolute inset-0 w-full h-full flex items-center justify-center" aria-hidden="true">
				<svg class="h-20 w-20 text-indigo-500" fill="currentColor" viewBox="0 0 84 84">
				  <circle opacity="0.9" cx="42" cy="42" r="42" fill="white" />
				  <path d="M55.5039 40.3359L37.1094 28.0729C35.7803 27.1869 34 28.1396 34 29.737V54.263C34 55.8604 35.7803 56.8131 37.1094 55.9271L55.5038 43.6641C56.6913 42.8725 56.6913 41.1275 55.5039 40.3359Z" />
				</svg>
			  </div>
			</button>
		  </div>
		</div>
	  </div>
	</main>
  </div>
</div>

<!-- Partners -->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white" id="partners">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
      <div>
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
            Automatic Fulfillment Partners
        </h2>
        <p class="mt-3 max-w-3xl text-lg text-gray-500">
        Automatic send orders with ready to print files to your fulfillment service and update tracking order to your store.
        </p>
        <div class="mt-8 sm:flex">
          <div class="rounded-md shadow">
            <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
              Create Account
            </a>
          </div>
          <div class="mt-3 sm:mt-0 sm:ml-3">
            <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
              Contact Us
            </a>
          </div>
        </div>
      </div>
      <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
        <div class="col-span-1  justify-center py-8 px-8 bg-gray-50">
          <img class="max-w-12" src="https://customcat.com/wp-content/uploads/2020/08/CC_Logo_2020_Horizontal_EYS-e1598347452413.png" alt="Workcation">
        </div>
        <div class="col-span-1  justify-center py-8 px-8 bg-gray-50">
          <img class="max-w-12" src="https://cdn2.hubspot.net/hub/3942223/hubfs/Scalable%20Press%20November2017/image/scalablepress_logo-Scalable-Black.png" alt="Mirage">
        </div>
        <div class="col-span-1  justify-center py-8 px-8 bg-gray-50">
          <img class="" src="https://gearment.com/gearment/themes/gearment/assets/images/logo_gearment.png" alt="Tuple">
        </div>
        <div class="col-span-1  justify-center py-8 px-8 bg-gray-50">
          <img class="max-w-12" src="https://merchize.com/wp-content/uploads/2021/04/logo_retina.png" alt="Laravel">
        </div>
        <div class="col-span-1  justify-center py-8 px-8 bg-gray-50">
          <img class="max-w-12" src="https://assets.inkgo.io/img/logo/dreamship.svg" alt="StaticKit">
        </div>
        <div class="col-span-1  justify-center py-8 px-8 bg-gray-50">
          <div class="text-sm text-gray-500">More coming soon!</div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Pricing -->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-100" id="pricing">
  <div class="pt-12 sm:pt-16 lg:pt-20">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
	  <div class="text-center">
		<h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl lg:text-5xl">
		  Simple no-tricks pricing
		</h2>
		<p class="mt-4 text-xl text-gray-600">
		  If you're not satisfied, contact us within the first 14 days and we'll send you a full refund.
		</p>
	  </div>
	</div>
  </div>
  <div class="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
	<div class="relative">
	  <div class="absolute inset-0 h-1/2 bg-gray-100"></div>
	  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
		  <div class="flex-1 bg-white px-6 py-8 lg:p-12">
			<h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
                PAY AS YOU GO
			</h3>
			<p class="mt-6 text-base text-gray-500">
                Simple usage based pricing with no long term commitments.
			</p>
			<div class="mt-8">
			  <div class="flex items-center">
				<div class="flex-1 border-t-2 border-gray-200"></div>
			  </div>
			  <ul role="list" class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
				<li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
                    14 day free trial
				  </p>
				</li>

				<li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
                    Unlimited product previews
				  </p>
				</li>

				<li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
                    Unlimited ready to print file exports or API
				  </p>
				</li>

				<li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
                    Unlimited number of stores
				  </p>
				</li>

                <li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
                    Unlimited number of stores
				  </p>
				</li>

                <li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
                    Unlimited number of stores
				  </p>
				</li>


			  </ul>
			</div>
		  </div>
		  <div class="py-8 px-6 bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
			<div class="flex items-center justify-center text-5xl font-extrabold text-gray-900">
			  <span>
				$39
			  </span>
			  <span class="ml-3 text-xl font-medium text-gray-500">
				USD/MONTH
			  </span>
			</div>
			<p class="mt-4 text-sm font-medium">Plus transaction fee:</p>
            <p class="mt-2 text-sm text-gray-500">Free transaction fee for first 20 orders</p>
            <p class="mt-2 text-sm text-gray-500">$0.4 transaction fee up to 1.000 orders</p>
            <p class="mt-2 text-sm text-gray-500">$0.2 transaction fee up to 5.000 orders</p>
            <p class="mt-2 text-sm text-gray-500">$0.1 transaction fee from 5.000 and above.</p>
			<div class="mt-6">
			  <div class="rounded-md shadow">
				<a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-900">
				  Get Started
				</a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- FAQs -->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50">
	<div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
		<div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
			<h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">
				Frequently asked questions
			</h2>
			<dl class="mt-6 space-y-6 divide-y divide-gray-200">
				<div x-data="{ open: true }" class="pt-6">
					<dt class="text-lg">
						<button type="button" x-description="Expand/collapse question button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-0" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
							<span class="font-medium text-gray-900">
							What's the best thing about Switzerland?
							</span>
							<span class="ml-6 h-7 flex items-center">
								<svg class="h-6 w-6 transform rotate-0" x-description="Expand/collapse icon, toggle classes based on question open state.
									Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
								</svg>
							</span>
						</button>
					</dt>
					<dd class="mt-2 pr-12" id="faq-0" x-show="open" style="display: none;">
						<p class="text-base text-gray-500">
							I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
						</p>
					</dd>
				</div>
				<div x-data="{ open: false }" class="pt-6">
					<dt class="text-lg">
						<button type="button" x-description="Expand/collapse question button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-1" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
							<span class="font-medium text-gray-900">
							How do you make holy water?
							</span>
							<span class="ml-6 h-7 flex items-center">
								<svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state.
									Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
								</svg>
							</span>
						</button>
					</dt>
					<dd class="mt-2 pr-12" id="faq-1" x-show="open" style="display: none;">
						<p class="text-base text-gray-500">
							You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aut tempora vitae odio inventore fuga aliquam nostrum quod porro. Delectus quia facere id sequi expedita natus.
						</p>
					</dd>
				</div>
				
			</dl>
		</div>
	</div>
</div>
<!-- Footer -->

<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-white" aria-labelledby="footer-heading">
  <h2 id="footer-heading" class="sr-only">Footer</h2>
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
	<div class="xl:grid xl:grid-cols-3 xl:gap-8">
	  <div class="space-y-8 xl:col-span-1">
		<img class="h-10" src="https://tailwindui.com/img/logos/workflow-mark-gray-300.svg" alt="Company name">
		<p class="text-gray-500 text-base">
		  Making better ecommerce user experience with the best tools for personalized products.
		</p>
		<div class="flex space-x-6">

		  <a href="#" class="text-gray-400 hover:text-gray-500">
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

          <a href="#" class="text-gray-400 hover:text-gray-500">
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

		</div>
	  </div>
	  <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
		<div class="md:grid md:grid-cols-2 md:gap-8">
		  <div>
			<h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
			  Solutions
			</h3>
			<ul role="list" class="mt-4 space-y-4">
			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Marketing
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Analytics
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Commerce
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Insights
				</a>
			  </li>
			</ul>
		  </div>
		  <div class="mt-12 md:mt-0">
			<h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
			  Support
			</h3>
			<ul role="list" class="mt-4 space-y-4">
			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Pricing
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Documentation
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Guides
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  API Status
				</a>
			  </li>
			</ul>
		  </div>
		</div>
		<div class="md:grid md:grid-cols-2 md:gap-8">
		  <div>
			<h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
			  Company
			</h3>
			<ul role="list" class="mt-4 space-y-4">
			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  About
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Blog
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Jobs
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Press
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Partners
				</a>
			  </li>
			</ul>
		  </div>
		  <div class="mt-12 md:mt-0">
			<h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
			  Legal
			</h3>
			<ul role="list" class="mt-4 space-y-4">
			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Claim
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Privacy
				</a>
			  </li>

			  <li>
				<a href="#" class="text-base text-gray-500 hover:text-gray-900">
				  Terms
				</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
	<div class="mt-12 border-t border-gray-200 pt-8">
	  <p class="text-base text-gray-400 xl:text-center">
		&copy; 2021 PersonalBridge, Inc. All rights reserved.
	  </p>
	</div>
  </div>
</footer>


<?php
get_footer();
