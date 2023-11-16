var lsxDesignMobileNav = Object.create(null);

(function($, window, document, undefined) {
	"use strict";

	/**
	 * Detects the header height, and sets the full width menus accordingly.
	 *
	 * @package    lsx
	 * @subpackage scripts
	 */
	lsxDesignMobileNav.init = function() {
		let buttonSelector = '.wp-block-navigation-submenu__toggle';

		if ( 0 < jQuery( buttonSelector ).length ) {
			jQuery( buttonSelector ).on( 'click', function ( event ) {
				jQuery(this).parent('li').find('.wp-block-navigation__submenu-container').toggle();
			} );
		}
	};

	/**
	 * On window load.
	 *
	 * @package    lsx
	 * @subpackage scripts
	 */
	$(window).on( 'load', function () {
		lsxDesignMobileNav.init();
	});	
})(jQuery, window, document);