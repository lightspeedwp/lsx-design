/**
 * Admin script.
 */
jQuery( function( $ ) {

	$( document ).on( 'click', '.lsx-theme-notice .notice-dismiss', function() {
		$.ajax( {
			url: ajaxurl,
			data: {
				action: 'lsxd_dismiss_theme_notice'
			}
		} );
	} );

} );
