<?php
namespace LSXD\Classes;

/**
 * All the functions for setting up the theme.
 *
 * @package   LSX
 * @author    LightSpeed
 * @license   GPL3
 * @link
 * @copyright 2023 LightSpeed
 */
class Frontend {

	/**
	 * Contructor
	 */
	public function __construct() {
	}

	/**
	 * Initiate our class.
	 *
	 * @return void
	 */
	public function init() {
		// Styles and Scripts
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'yoast_faq_asset_files' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'woo_asset_files' ) );
		add_filter( 'script_loader_tag', array( $this, 'cf_async_disable' ), 10, 3);

		//Output on the frontend.
		add_filter( 'wpforms_frontend_form_data', array( $this, 'wpforms_match_button_block' ) );
		add_filter( 'woocommerce_account_menu_items', array( $this, 'woocommerce_account_menu_items_fix' ), 10, 2 );
		
	}

	/**
	 * Enqueues the frontend styles
	 *
	 * @return void
	 */
	public function enqueue_styles() {
		wp_enqueue_style( 'lsxd-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}


	/**
	 * Load the assets files for Yoast
	 *
	 * @return void
	 */
	public function yoast_faq_asset_files() {
		if ( function_exists( 'wpseo_init' ) ) {
			wp_enqueue_style( 'lsxd-yoast-faq-css', get_template_directory_uri() . '/assets/css/faq/style.css', array() );
			wp_enqueue_script( 'lsxd-yoast-faq-js', get_template_directory_uri()  . '/assets/js/faq.js', array( "jquery" ), "1.0", true );
		}
	}

	/**
	 * Load the assets files for Yoast
	 *
	 * @return void
	 */
	public function woo_asset_files() {
		if ( class_exists( 'woocommerce' ) ) {
			wp_enqueue_style( 'lsxd-woo-css', get_template_directory_uri() . '/assets/css/woocommerce.css', array() );
		}
	}

	/**
	 * WPForms submit button, match Gutenberg button block
	 *
	 * @param [type] $form_data
	 * @return void
	 */
	function wpforms_match_button_block( $form_data ) {
		$form_data['settings']['submit_class'] .= ' btn';
		return $form_data;
	}

	/**
	 * Fixes the plural for the edit address my account menu.
	 *
	 * @return array
	 */
	public function woocommerce_account_menu_items_fix( $items, $endpoints ) {
		if ( ! isset( $items['edit-address'] ) || '' !== $items['edit-address'] ) {
			return $items;
		}

		if ( true === wc_shipping_enabled() ) {
			$items['edit-address'] = __( 'Addresses', 'lsx-design' );
		} else {
			$items['edit-address'] = __( 'Address', 'lsx-design' );
		}

		return $items;
	}

	/**
	 * Make comment reply button work with CloudFlare Rocket Loader
	 * @see https://support.cloudflare.com/hc/en-us/articles/200169436-How-can-I-have-Rocket-Loader-ignore-specific-JavaScripts-
	 */
	public function cf_async_disable( $tag, $handle, $src ) {
		if ( 'comment-reply' !== $handle ) {
			return $tag;
		}
		return str_replace( ' src', ' data-cfasync="false" src', $tag );
	}
}