(function ($) {
	"use strict";

	var addStylePanel = '<div class="stylepanel-on-right"> <div class="switcher-btn-bx"> <a class="switch-btn closed"> <span class="fa fa-cog"></span> </a> </div><div class="styleswitcher-inner"> <h6 class="switcher-title">Color Skin</h6> <ul class="color-skins"> <li><a data-menu-logo="assets/images/logo.png" data-pt-logo="assets/images/logo-white.png" data-header-transparent-logo="assets/images/logo-white.png" class="theme-skin skin-1" href="assets/css/color/color-1.css" title="Purple"></a></li><li><a data-menu-logo="assets/images/logo-2.png" data-pt-logo="assets/images/logo-white-2.png" data-header-transparent-logo="assets/images/logo-white-2.png" class="theme-skin skin-2" href="assets/css/color/color-2.css" title="Orange"></a></li><li><a data-menu-logo="assets/images/logo-3.png" data-pt-logo="assets/images/logo-white-3.png" data-header-transparent-logo="assets/images/logo-white-3.png" class="theme-skin skin-3" href="assets/css/color/color-3.css" title="Blue"></a></li><li><a data-menu-logo="assets/images/logo-4.png" data-pt-logo="assets/images/logo-white-4.png" data-header-transparent-logo="assets/images/logo-white-4.png" class="theme-skin skin-4" href="assets/css/color/color-4.css" title="Red"></a></li></ul> </div></div>';

	var demoWork = '<a target="_blank" href="https://themeforest.net/item/Codewife-education-html-template-admin-panel/23248258" class="buynow">Buy Now <i class="ti-shopping-cart-full"></i></a>';

	var shareThisButton = "<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cebe0cc5676af001119e971&product=sticky-share-buttons' async='async'></script>";

	var addThisButton = '<!-- Go to www.addthis.com/dashboard to customize your tools --><script type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c7aa492bf4a3d15"></script>';

	jQuery(window).on('load', function () {
		jQuery('.stylepanel-on-right').animate({
			'right': '-220px',
			'left': 'auto'
		});
		jQuery('body').append(addStylePanel).append(demoWork).append(addThisButton);
	});


	jQuery('.switch-btn').on('click', function () {
		if (jQuery(this).hasClass('open')) {
			jQuery(this).addClass('closed').removeClass('open');
			jQuery('.stylepanel-on-right').animate({
				'right': '-220px',
				'left': 'auto'
			});
		} else {
			if (jQuery(this).hasClass('closed')) {
				jQuery(this).addClass('open').removeClass('closed');
				jQuery('.stylepanel-on-right').animate({
					'right': '0',
					'left': 'auto'
				});
			}
		}
	});

	jQuery('.theme-skin').on('click', function () {
		jQuery('.skin').attr('href', jQuery(this).attr('href'));
		jQuery('.menu-logo img').attr('src', jQuery(this).attr('data-menu-logo'));
		jQuery('.header-transparent .menu-logo img').attr('src', jQuery(this).attr('data-header-transparent-logo'));
		jQuery('.pt-logo img').attr('src', jQuery(this).attr('data-pt-logo'));
		return false;
	});


})(jQuery);