<?php
/**
 * The frontend file
 *
 * @package lsx-design
 */

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
		// Styles and Scripts.
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'yoast_faq_asset_files' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'woo_asset_files' ) );
		add_filter( 'script_loader_tag', array( $this, 'cf_async_disable' ), 10, 3 );

		// Output on the frontend.
		add_filter( 'wpforms_frontend_form_data', array( $this, 'wpforms_match_button_block' ) );
		add_filter( 'woocommerce_account_menu_items', array( $this, 'woocommerce_account_menu_items_fix' ), 10, 2 );

		// Yoast FAQ Block.
		add_filter( 'render_block', array( $this, 'yoast_faq_tabindex' ), 20, 3 );
		add_filter( 'render_block', array( $this, 'remove_version_from_svg' ), 25, 2 );
	}

	/**
	 * Enqueues the frontend styles
	 *
	 * @return void
	 */
	public function enqueue_styles() {
		//wp_get_theme()->get( 'Version' )
		wp_enqueue_style( 'lsxd-styles', get_template_directory_uri() . '/style.css', array(), time() );
	}


	/**
	 * Load the assets files for Yoast
	 *
	 * @return void
	 */
	public function yoast_faq_asset_files() {
		if ( function_exists( 'wpseo_init' ) ) {
			wp_enqueue_style( 'lsxd-yoast-faq-css', get_template_directory_uri() . '/assets/css/faq/style.css', array(), wp_get_theme()->get( 'Version' ) );
			wp_enqueue_script( 'lsxd-yoast-faq-js', get_template_directory_uri() . '/assets/js/faq.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
		}
	}

	/**
	 * Load the assets files for Yoast
	 *
	 * @return void
	 */
	public function woo_asset_files() {
		if ( class_exists( 'woocommerce' ) ) {
			wp_enqueue_style( 'lsxd-woo-css', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), time() );
		}
	}

	/**
	 * WPForms submit button, match Gutenberg button block
	 *
	 * @param array $form_data WPForms array.
	 * @return array
	 */
	public function wpforms_match_button_block( $form_data ) {
		$form_data['settings']['submit_class'] .= ' btn';
		return $form_data;
	}

	/**
	 * Fixes the plural for the edit address my account menu.
	 *
	 * @param array $items array of nav items.
	 * @param array $endpoints array of endpoints.
	 * @return array
	 */
	public function woocommerce_account_menu_items_fix( $items, $endpoints ) {
		if ( ! function_exists( 'wc_shipping_enabled' ) ) {
			return $items;
		}
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
	 *
	 * @param string $tag The current tag being used.
	 * @param string $handle The current handle outputting.
	 * @param string $src The current image src.
	 * @return string
	 */
	public function cf_async_disable( $tag, $handle, $src ) {
		if ( 'comment-reply' !== $handle ) {
			return $tag;
		}
		return str_replace( ' src', ' data-cfasync="false" src', $tag );
	}

	/**
	 * Add a tabindex to the strong tag of the Yoast FAQ block.
	 *
	 * @param string|null   $block_content   The pre-rendered content. Default null.
	 * @param array         $parsed_block The block being rendered.
	 * @param WP_Block|null $block_obj If this is a nested block, a reference to the parent block.
	 */
	public function yoast_faq_tabindex( $block_content, $parsed_block, $block_obj ) {
		// Determine if this is the custom block variation.
		if ( isset( $parsed_block['blockName'] ) && 'yoast/faq-block' === $parsed_block['blockName'] ) {
			$block_content = str_replace( 'schema-faq-question"', 'schema-faq-question" tabindex="0"', $block_content );
		}
		return $block_content;
	}

	/**
	 * Undocumented function
	 *
	 * @param string|null   $block_content   The pre-rendered content. Default null.
	 * @param array         $parsed_block The block being rendered.
	 * @param WP_Block|null $block_obj If this is a nested block, a reference to the parent block.
	 */
	public function remove_version_from_svg( $block_content, $block ) {
		// Use regular expression to find and remove 'version' attribute
		if ( $block['blockName'] === 'core/social-link' || $block['blockName'] === 'core/image' || $block['blockName'] === 'lsx/lsx-sharing-link' ) {
			$block_content = preg_replace( '/\s+version=["\'][^"\']*["\']/', '', $block_content );
		}
		return $block_content;
	}
}
