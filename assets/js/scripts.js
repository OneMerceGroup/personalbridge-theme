(function ($) {
	"use strict";

	$(document).ready(function () {
		function activeTab(obj) {
			var tabId = $(obj).attr("data-tab_id");
			var closest = $(obj).closest(".pb-tab");
			$(closest).find('.pb-tab-content').addClass("hidden");
			$(closest).find('.pb-tab-label').removeClass("text-indigo-600 border-indigo-600").addClass("text-gray-500");
			$(closest).find('.pb-tab-label svg').removeClass("text-indigo-700").addClass("group-hover:text-gray-700");

			$(closest).find('.pb-tab-content[data-tab_id="'+tabId+'"]').removeClass("hidden");
			$(closest).find('.pb-tab-label[data-tab_id="'+tabId+'"]').removeClass("text-gray-500").addClass("text-indigo-600 border-indigo-600");
			$(closest).find('.pb-tab-label[data-tab_id="'+tabId+'"] svg').removeClass("group-hover:text-gray-700").addClass("text-indigo-700");
		}

		$(document).on("click", ".pb-tab .pb-tab-label", function (e) {
			e.preventDefault();
			activeTab(this);
		});

		$(document).on("focus", ".shop-domain", function(e) {
			var tabContent = $(this).closest(".pb-tab-content");
			tabContent.find('.error-message').addClass('hidden');
			$(this).removeClass("border-red-500 border-2").addClass("focus:ring-indigo-500 focus:border-indigo-500");
		});

		$(document).on("click", ".install-shop-app", function(e) {
			e.preventDefault();
			var $this = $(this);
			var closest = $(this).closest("form");
			var tabContent = $(this).closest(".pb-tab-content");

			var target = 'shopify';
			if ($this.is("#install-shopbase-app")) {
				target = 'shopbase';
			}
			var targetDom = $(closest).find(".shop-domain");
			if (targetDom) {
				var getDomain = targetDom.val();
				if (getDomain.length > 0) {
					var domainContains = 'myshopify.com';
					var targetURL = 'https://[DOMAIN]/admin/oauth/authorize?client_id=f413b83913bfd2684978a7f9969b6cbb&scope=read_script_tags,write_script_tags,read_products,write_products,read_product_listings,read_collection_listings,read_orders,write_orders,read_customers,read_themes,write_themes,read_content,read_fulfillments,write_fulfillments,write_merchant_managed_fulfillment_orders,read_shipping,write_shipping,read_discounts,write_discounts,read_inventory&redirect_uri=https://api.personalbridge.com/auth_callback/shopify&state=none';
					if ( 'shopbase' == target ) {
						targetURL = 'https://[DOMAIN]/admin/oauth/authorize?client_id=bcbbb3567ee40943462324d482048f2e&scope=read_products,write_products,read_orders,write_orders,read_customers,write_fulfillments,read_fulfillments&redirect_uri=https://api.personalbridge.com/auth_callback/shopbase?action_type=NEW_INSTALL';
						domainContains = 'onshopbase.com';
					}
					if (!getDomain.includes(domainContains)) {
						targetDom.removeClass("focus:ring-indigo-500 focus:border-indigo-500").addClass("border-red-500 border-2");
						if ( 'shopbase' == target ) {
							$(tabContent).find('.error-message').removeClass('hidden').html("<span>Please enter a valid domain like: https://store_name.onshopbase.com</span>");
						} else {
							$(tabContent).find('.error-message').removeClass('hidden').html("<span>Please enter a valid domain like: https://store_name.myshopify.com</span>");
						}
						$this.blur();
						setTimeout(function(){
							targetDom.focus();
						}, 5000);
					} else {
						targetURL = targetURL.replace('https://', '');
						targetURL = targetURL.replace('[DOMAIN]', getDomain);
						window.location.href = targetURL;
					}
					targetDom.val('');
				} else {
					targetDom.removeClass("focus:ring-indigo-500 focus:border-indigo-500").addClass("border-red-500 border-2");
					$this.blur();
				}
			} 
		});

		$(document).on('click', 'a[href^="#"]', function(e){
			e.preventDefault();
			var targetId = $(this).attr('href'); // $.attr(this, 'href')
			if ( $(targetId).length > 0 ) {
				$('html, body').animate({
					scrollTop: $(targetId).offset().top
				}, 650);
			}
		});
	});
})(jQuery);
