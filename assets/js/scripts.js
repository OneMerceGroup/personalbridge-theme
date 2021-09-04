(function ($) {
	"use strict";

	$(document).ready(function () {
		$('.featurescroll').removeClass('opacity-0');

		$(document).on('click', '#action-estimate-cost', function() {
			$('#box-calc-cost').toggleClass('hidden');
			if ( $('#box-calc-cost').hasClass('hidden') ) {
				$(this).html('<span class="inline-flex items-center text-indigo-600"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg><span class="ml-1">Estimate your cost</span></span>');
				$('#pb-app-pricing').text('$39');
			} else {
				$(this).html('<div><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div>');
				$('#calc-total-cost').val('').focus();
			}
			
		});
		$(document).on('keyup', '#calc-total-cost', function(){
			let val = $(this).val();
			if ( val.length > 7 ) {
				val = val.slice(0, 7);
			}
			val = val.replace(/[^\d]/,'');
			$(this).val(val);
		});

		var timeout;
		$(document).on('keyup change', '#calc-total-cost', function(){
			if(timeout) {
                clearTimeout(timeout);
            }
            timeout = setTimeout(function() {
                calcCost();
            }, 300);
		});

		function calcCost() {
			var totalOrder = 0;
			var inputTag = $('#calc-total-cost');
			if( inputTag.length > 0 && inputTag.val() ) {
				totalOrder = parseInt( inputTag.val() );
			}
			if ( totalOrder > 0 ) {
				var cost = calcBillingCost(totalOrder);
				if ( cost > 0 ) {
					var boxPricingVal = $('#pb-app-pricing');
					if ( boxPricingVal.length > 0 ) {
						boxPricingVal.html( '$' + cost ); 
					}
				}
			}
		}

		function calcBillingCost(value) {
			if (value > 0) {
				let priceSettings = [
					{
						limitOrder: 20,
						price: 0
					},
					{
						limitOrder: 200,
						price: 0.4
					},
					{
						limitOrder: 1000,
						price: 0.3
					},
					{
						limitOrder: 5000,
						price: 0.2
					},
					{
						limitOrder: -1,
						price: 0.1
					}
				];
				let fixedPrice = 39;
				let totalPrice = 0;
				let countOrder = 0;
				let totalOrder = 0;
				for (var i = 0; i < priceSettings.length; i++) {
					totalOrder = value - countOrder;
					if (priceSettings[i].limitOrder > 0) {
						if (priceSettings[i].limitOrder <= value) {
							const orderCal = priceSettings[i].limitOrder - countOrder;
							totalPrice += priceSettings[i].price * orderCal;
							if (priceSettings[i].limitOrder === value) {
							break;
							}
							countOrder += orderCal;
						} else {
							totalPrice += priceSettings[i].price * totalOrder;
							break;
						}
					} else {
						totalPrice += priceSettings[i].price * totalOrder;
					}
				}

				if ( totalPrice > 0 ) {
					var returnCost = totalPrice + fixedPrice;
					if ( (returnCost % 1) > 0 ) {
						returnCost = returnCost.toFixed(2);
					}
					return returnCost;
				}
			}
			return 0;
		}
		
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

		function featured_scroll() {
			var blockText = $('.featurescroll .block-text')
			blockText.find('.textscroll-wrap').slideUp();
			blockText.find('.textscroll-wrap').eq(0).slideDown();
			blockText.addClass('hidetext');
			blockText.eq(0).removeClass('hidetext');
			window.addEventListener('scroll', function () {
				var pageOffset = window.pageYOffset;
				$('.featurescroll .imagescroll').each(function (index, val) {
					if ($('.featurescroll .imagescroll').eq(0).offset().top < pageOffset + 700 && $('.featurescroll .imagescroll').eq(0).offset().top + 460 > pageOffset ) {
						blockText.find('.textscroll-wrap').eq(0).slideDown();
						blockText.eq(0).removeClass('hidetext');
					}
					else if ($('.featurescroll .imagescroll').eq(index).offset().top - 500 < pageOffset && $('.featurescroll .imagescroll').eq(index).offset().top + 460 > pageOffset) {
						blockText.find('.textscroll-wrap').eq(index).slideDown();
						blockText.eq(index).removeClass('hidetext');
					}
					else {
						blockText.find('.textscroll-wrap').eq(index).slideUp();
						blockText.eq(index).addClass('hidetext');
					}
				});
			});

			$(document).on('click', '.headingtextscroll', function() {
				var closest = $(this).closest('.block-text');
				var dataDom = closest.find('p.textscroll').attr('data-img-scroll');
				if ( dataDom.length > 0 && $('#' + dataDom).length > 0 ) {
					$('html, body').animate({
						scrollTop: $('#' + dataDom).offset().top
					}, 1500);
				}
			});
		}
		featured_scroll();

	});
})(jQuery);
