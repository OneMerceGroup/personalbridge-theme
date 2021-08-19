<div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
	<div class="install-app pb-tab">
		<div class="border-b border-gray-200">
			<nav class="-mb-px flex space-x-8" aria-label="Tabs">
				<!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
				<a href="#" data-tab_id="shopify-app" class="pb-tab-label border-transparent text-indigo-600 border-indigo-600 hover:text-indigo-600 hover:border-indigo-600 group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm">
					<svg class="text-gray-400 group-hover:text-indigo-700 -ml-0.5 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> 
					<image id="image0" width="20" height="20" x="0" y="0"
						xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAQAAAAngNWGAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
					AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElN
					RQflCBMMLRW8bNRBAAABTUlEQVQoz33SsUpcURAG4G9v3NsEElARJY0EU1mkUWJ8gqBgFhMjpMgL
					pLPJAwQl0byBYLVsZUARbLSyS7Goaa66G9TGStLsEgiKN4XruXfj6plm5v//c/45w5Cd2KyKA01N
					ByreiXU4b/yS/hd10+2iB77dEt3EkigT3i1Lpb5mphl4ZcGkeZdt0hIFscTT8PaKh/7awSfPAlo3
					zGzb3femPAc9PuTwGSqh2DLY9sWii8CVIyOB2HZi1KZ93eDCSeBGIgOhONZlw5lVv1vIUeCe5Gbk
					2CN9znwOSC1kVxyGPnpbE50L9MfAJZFqC2w6N27ZuZdBeBiyamQtGPNK4rFyB+s1YnWp1A9DCvr1
					5bqO/JFK1RQLmPa9RTT8tGffrlPDxrwwIUbJ+rVg6d6l+JK3WLxnd/IjREntlqjmdacdL5pRlmho
					SJS9VczIfzz1ujxnenb0AAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIxLTA4LTE5VDEyOjQ1OjIxKzAz
					OjAwFYyV9gAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMS0wOC0xOVQxMjo0NToyMSswMzowMGTRLUoA
					AAAASUVORK5CYII=" />
					</svg>
					<span>Shopify</span>
				</a>
				<a href="#" data-tab_id="shopbase-app" class="pb-tab-label border-transparent text-gray-500 hover:text-indigo-700 hover:border-indigo-600 group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm">
					<!-- Heroicon name: solid/office-building -->
					
					<svg class="text-gray-400 group-hover:text-indigo-700 -ml-0.5 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
					</svg>
					<span>Shopbase</span>
				</a>
			</nav>
		</div>
		<div class="w-full pt-4 pb-tab-contents">
			<div class="pb-tab-content" data-tab_id="shopify-app">
				<p class="text-base font-medium text-gray-900">
					Enter your Shopify domain to install app.
				</p>
				<form action="#" method="GET" class="mt-3 sm:flex">
					<label for="shopify_store_domain" class="sr-only">Your Shopify domain</label>
					<input type="text" name="shopify_store_domain" id="shopify_store_domain" class="shop-domain block w-full py-3 px-3 text-base rounded-md placeholder-gray-500 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:flex-1 border-gray-300" placeholder="https://store_name.myshopify.com" required>
					<button type="submit" id="install-shopify-app" class="install-shop-app mt-3 w-full px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">
					Install
					</button>
				</form>
				<p class="hidden error-message text-red-700 italic text-sm"></p>
			</div>
			<div class="pb-tab-content hidden" data-tab_id="shopbase-app">
				<p class="text-base font-medium text-gray-900">
					Enter your Shopbase domain to install app.
				</p>
				<form action="#" method="GET" class="mt-3 sm:flex">
					<label for="shopbase_store_domain" class="sr-only">Your Shopbase domain</label>
					<input type="text" name="shopbase_store_domain" id="shopbase_store_domain" class="shop-domain block w-full py-3 px-3 text-base rounded-md placeholder-gray-500 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:flex-1 border-gray-300" placeholder="https://store_name.onshopbase.com" required>
					<button type="submit" id="install-shopbase-app" class="install-shop-app mt-3 w-full px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">
					Install
					</button>
				</form>
				<p class="hidden error-message text-red-700 italic text-sm"></p>
			</div>
		</div>
	</div>
	<p class="mt-3 text-sm text-gray-500">
		We care about the protection of your data. Read our
		<a href="#" class="font-medium text-gray-900 underline">Privacy Policy</a>.
	</p>
</div>