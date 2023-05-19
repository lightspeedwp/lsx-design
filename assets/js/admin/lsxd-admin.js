/**
 * Admin script.
 */
jQuery( function( $ ) {

	$( document ).on( 'click', '.lsxd-theme-notice .notice-dismiss', function() {
		$.ajax( {
			url: ajaxurl,
			data: {
				action: 'lsxd_dismiss_theme_notice'
			}
		} );
	} );

} );
