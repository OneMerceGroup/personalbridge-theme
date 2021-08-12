<?php
/*
 * Template Name: Front Page
 * Template Post Type: post, page, whatever
 */

get_header();
?>
<div class="" style="">
  <div class="min-h-[700px] flex">
    <div class="w-full bg-white flex items-center justify-center px-4 sm:px-6 lg:px-8" style="height: 700px;">
      <div class="w-72">
        <div x-data="{ open: true }" @keydown.window.escape="open = false">
          <div class="relative group flex flex-col-reverse">
            <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900 space-x-8">
              <h3>
                <a href="#">
                  Basic Tee 6-Pack 
                </a>
              </h3>
              <p>$192</p>
            </div>
            <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
              <img src="https://tailwindui.com/img/ecommerce-images/product-quick-preview-02-preview.jpg" alt="Model wearing gray t-shirt." class="object-center object-cover">
              <div class="flex items-end p-4">
                <button type="button" class="relative z-10 w-full bg-white bg-opacity-75 py-2 px-4 rounded-md text-sm text-gray-900 opacity-0 group-hover:opacity-100 focus:opacity-100" @click="open = true">Quick View<span class="sr-only">, Basic Tee 6-Pack </span></button>
              </div>
            </div>
          </div>
          
  
    <div x-show="open" class="fixed z-10 inset-0 overflow-y-auto" x-ref="dialog" aria-modal="true" style="display: none;">
      <div class="flex min-h-screen text-center md:block md:px-2 lg:px-4" style="font-size: 0;">
        
          <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block" @click="open = false" aria-hidden="true" style="display: none;">
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&ZeroWidthSpace;</span>
        
          <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" x-transition:enter-end="opacity-100 translate-y-0 md:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 md:scale-100" x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" x-description="Modal panel, show/hide based on modal state." class="flex text-base text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl" style="display: none;">
            <div class="w-full relative flex items-center bg-white px-4 pt-14 pb-8 overflow-hidden shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
              <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8" @click="open = false">
                <span class="sr-only">Close</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
</svg>
              </button>

              <div class="w-full grid grid-cols-1 gap-y-8 gap-x-6 items-start sm:grid-cols-12 lg:gap-x-8">
                <div class="aspect-w-2 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden sm:col-span-4 lg:col-span-5">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-quick-preview-02-detail.jpg" alt="Two each of gray, white, and black shirts arranged on table." class="object-center object-cover">
                </div>
                <div class="sm:col-span-8 lg:col-span-7">
                  <h2 class="text-2xl font-extrabold text-gray-900 sm:pr-12">
                    Basic Tee 6-Pack 
                  </h2>

                  <section aria-labelledby="information-heading" class="mt-2">
                    <h3 id="information-heading" class="sr-only">Product information</h3>

                    <p class="text-2xl text-gray-900">
                      $192
                    </p>

                    <!-- Reviews -->
                    <div class="mt-6">
                      <h4 class="sr-only">Reviews</h4>
                      <div class="flex items-center">
                        <div class="flex items-center">
                          
                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" x-state:on="Active" x-state:off="Default" x-state-description="Active: &quot;text-gray-900&quot;, Default: &quot;text-gray-200&quot;" x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
</svg>
                          
                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" x-state-description="undefined: &quot;text-gray-900&quot;, undefined: &quot;text-gray-200&quot;" x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
</svg>
                          
                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" x-state-description="undefined: &quot;text-gray-900&quot;, undefined: &quot;text-gray-200&quot;" x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
</svg>
                          
                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" x-state-description="undefined: &quot;text-gray-900&quot;, undefined: &quot;text-gray-200&quot;" x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
</svg>
                          
                            <svg class="text-gray-200 h-5 w-5 flex-shrink-0" x-state-description="undefined: &quot;text-gray-900&quot;, undefined: &quot;text-gray-200&quot;" x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
</svg>
                          
                        </div>
                        <p class="sr-only">3.9 out of 5 stars</p>
                        <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                      </div>
                    </div>
                  </section>

                  <section aria-labelledby="options-heading" class="mt-10">
                    <h3 id="options-heading" class="sr-only">Product options</h3>

                    <form>
                      <!-- Colors -->
                      <div>
                        <h4 class="text-sm text-gray-900 font-medium">Color</h4>

                        <fieldset x-data="window.Components.radioGroup({ initialCheckedIndex: 0 })" x-init="init()" class="mt-4">
                          <legend class="sr-only">
                            Choose a color
                          </legend>
                          <div class="flex items-center space-x-3">
                            
                              <label x-radio-group-option="" class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400 ring-2" x-description="Active and Checked: &quot;ring ring-offset-1&quot;	Not Active and Checked: &quot;ring-2&quot;" :class="{ 'ring ring-offset-1': (active === 'White') &amp;&amp; (value === 'White'), 'undefined': !(active === 'White') || !(value === 'White'), 'ring-2': !(active === 'White') &amp;&amp; (value === 'White'), 'undefined': (active === 'White') || !(value === 'White') }">
<input type="radio" x-model="value" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-0-label">
                                <p id="color-choice-0-label" class="sr-only">
                                  White
                                </p>
                                <span aria-hidden="true" class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                              </label>
                            
                              <label x-radio-group-option="" class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400 undefined" x-description="Active and Checked: &quot;ring ring-offset-1&quot;	Not Active and Checked: &quot;ring-2&quot;" :class="{ 'ring ring-offset-1': (active === 'Gray') &amp;&amp; (value === 'Gray'), 'undefined': !(active === 'Gray') || !(value === 'Gray'), 'ring-2': !(active === 'Gray') &amp;&amp; (value === 'Gray'), 'undefined': (active === 'Gray') || !(value === 'Gray') }">
<input type="radio" x-model="value" name="color-choice" value="Gray" class="sr-only" aria-labelledby="color-choice-1-label">
                                <p id="color-choice-1-label" class="sr-only">
                                  Gray
                                </p>
                                <span aria-hidden="true" class="h-8 w-8 bg-gray-200 border border-black border-opacity-10 rounded-full"></span>
                              </label>
                            
                              <label x-radio-group-option="" class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-900 undefined" x-description="Active and Checked: &quot;ring ring-offset-1&quot;	Not Active and Checked: &quot;ring-2&quot;" :class="{ 'ring ring-offset-1': (active === 'Black') &amp;&amp; (value === 'Black'), 'undefined': !(active === 'Black') || !(value === 'Black'), 'ring-2': !(active === 'Black') &amp;&amp; (value === 'Black'), 'undefined': (active === 'Black') || !(value === 'Black') }">
<input type="radio" x-model="value" name="color-choice" value="Black" class="sr-only" aria-labelledby="color-choice-2-label">
                                <p id="color-choice-2-label" class="sr-only">
                                  Black
                                </p>
                                <span aria-hidden="true" class="h-8 w-8 bg-gray-900 border border-black border-opacity-10 rounded-full"></span>
                              </label>
                            
                          </div>
                        </fieldset>
                      </div>

                      <!-- Sizes -->
                      <div class="mt-10">
                        <div class="flex items-center justify-between">
                          <h4 class="text-sm text-gray-900 font-medium">Size</h4>
                          <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                        </div>

                        <fieldset x-data="window.Components.radioGroup({ initialCheckedIndex: 2 })" x-init="init()" class="mt-4">
                          <legend class="sr-only">
                            Choose a size
                          </legend>
                          <div class="grid grid-cols-4 gap-4">
                            
                              <label x-radio-group-option="" class="group relative border rounded-md shadow-sm py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white text-gray-900 cursor-pointer undefined" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-indigo-500&quot;" :class="{ 'ring-2 ring-indigo-500': (active === 'XXS'), 'undefined': !(active === 'XXS') }">
<input type="radio" x-model="value" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                                <p id="size-choice-0-label">
                                  XXS
                                </p>
                                
                                  <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'XXS'), 'border-2': !(active === 'XXS'), 'border-indigo-500': (value === 'XXS'), 'border-transparent': !(value === 'XXS') }"></div>
                                </label>
                            
                              <label x-radio-group-option="" class="group relative border rounded-md shadow-sm py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white text-gray-900 cursor-pointer undefined" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-indigo-500&quot;" :class="{ 'ring-2 ring-indigo-500': (active === 'XS'), 'undefined': !(active === 'XS') }">
<input type="radio" x-model="value" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                                <p id="size-choice-1-label">
                                  XS
                                </p>
                                
                                  <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'XS'), 'border-2': !(active === 'XS'), 'border-indigo-500': (value === 'XS'), 'border-transparent': !(value === 'XS') }"></div>
                                </label>
                            
                              <label x-radio-group-option="" class="group relative border rounded-md shadow-sm py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white text-gray-900 cursor-pointer undefined" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-indigo-500&quot;" :class="{ 'ring-2 ring-indigo-500': (active === 'S'), 'undefined': !(active === 'S') }">
<input type="radio" x-model="value" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                                <p id="size-choice-2-label">
                                  S
                                </p>
                                
                                  <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-indigo-500" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'S'), 'border-2': !(active === 'S'), 'border-indigo-500': (value === 'S'), 'border-transparent': !(value === 'S') }"></div>
                                </label>
                            
                              <label x-radio-group-option="" class="group relative border rounded-md shadow-sm py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white text-gray-900 cursor-pointer undefined" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-indigo-500&quot;" :class="{ 'ring-2 ring-indigo-500': (active === 'M'), 'undefined': !(active === 'M') }">
<input type="radio" x-model="value" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                                <p id="size-choice-3-label">
                                  M
                                </p>
                                
                                  <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'M'), 'border-2': !(active === 'M'), 'border-indigo-500': (value === 'M'), 'border-transparent': !(value === 'M') }"></div>
                                </label>
                            
                              <label x-radio-group-option="" class="group relative border rounded-md shadow-sm py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white text-gray-900 cursor-pointer undefined" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-indigo-500&quot;" :class="{ 'ring-2 ring-indigo-500': (active === 'L'), 'undefined': !(active === 'L') }">
<input type="radio" x-model="value" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                                <p id="size-choice-4-label">
                                  L
                                </p>
                                
                                  <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'L'), 'border-2': !(active === 'L'), 'border-indigo-500': (value === 'L'), 'border-transparent': !(value === 'L') }"></div>
                                </label>
                            
                              <label x-radio-group-option="" class="group relative border rounded-md shadow-sm py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white text-gray-900 cursor-pointer undefined" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-indigo-500&quot;" :class="{ 'ring-2 ring-indigo-500': (active === 'XL'), 'undefined': !(active === 'XL') }">
<input type="radio" x-model="value" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                                <p id="size-choice-5-label">
                                  XL
                                </p>
                                
                                  <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'XL'), 'border-2': !(active === 'XL'), 'border-indigo-500': (value === 'XL'), 'border-transparent': !(value === 'XL') }"></div>
                                </label>
                            
                              <label x-radio-group-option="" class="group relative border rounded-md shadow-sm py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white text-gray-900 cursor-pointer undefined" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-indigo-500&quot;" :class="{ 'ring-2 ring-indigo-500': (active === 'XXL'), 'undefined': !(active === 'XXL') }">
<input type="radio" x-model="value" name="size-choice" value="XXL" class="sr-only" aria-labelledby="size-choice-6-label">
                                <p id="size-choice-6-label">
                                  XXL
                                </p>
                                
                                  <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'XXL'), 'border-2': !(active === 'XXL'), 'border-indigo-500': (value === 'XXL'), 'border-transparent': !(value === 'XXL') }"></div>
                                </label>
                            
                              <label x-radio-group-option="" class="group relative border rounded-md shadow-sm py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-gray-50 text-gray-200 cursor-not-allowed undefined" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-indigo-500&quot;" :class="{ 'ring-2 ring-indigo-500': (active === 'XXXL'), 'undefined': !(active === 'XXXL') }">
<input type="radio" x-model="value" name="size-choice" value="XXXL" disabled="" class="sr-only" aria-labelledby="size-choice-7-label">
                                <p id="size-choice-7-label">
                                  XXXL
                                </p>
                                
                                  <div aria-hidden="true" class="absolute -inset-px rounded-md border-2 border-gray-200 pointer-events-none">
                                    <svg class="absolute inset-0 w-full h-full text-gray-200 stroke-2" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                      <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke"></line>
                                    </svg>
                                  </div>
                                </label>
                            
                          </div>
                        </fieldset>
                      </div>

                      <button type="submit" class="mt-6 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add to bag</button>
                    </form>
                  </section>
                </div>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  

        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
