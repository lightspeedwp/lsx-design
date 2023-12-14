<?php
/**
 * The block styles file
 *
 * @package lsx-design
 */

namespace LSXD\Classes\Vendors;

/**
 * All the functions that run on the frontend and the rendering of the blocks.
 *
 * @package   LSX
 * @author    LightSpeed
 * @license   GPL3
 * @link
 * @copyright 2023 LightSpeed
 */
class WooCommerce {

	/**
	 * Handles the conditional loading of the WooCommerce files.
	 *
	 * @var array
	 */
	private $assets = array();

	/**
	 * Contructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'enqueue_block_styles' ), 10 );
	}

	/**
	 * Returns an array of the block assets.
	 *
	 * @return array
	 */
	private function get_assets() {
		$this->assets = array(
			'woocommerce/order-confirmation-totals' => array(
				'handle' => 'lsxd-wc-order-confirmation-totals',
				'src'    => get_template_directory_uri() . '/assets/css/woocommerce/order-confirmation-totals.css',
				'path'   => get_template_directory() . '/assets/css/woocommerce/order-confirmation-totals.css',
			),
			'woocommerce/order-confirmation-billing-wrapper' => array(
				'handle' => 'lsxd-wc-order-confirmation-billing-wrapper',
				'src'    => get_template_directory_uri() . '/assets/css/woocommerce/order-confirmation-billing-wrapper.css',
				'path'   => get_template_directory() . '/assets/css/woocommerce/order-confirmation-billing-wrapper.css',
			),
			'woocommerce/product-on-sale' => array(
				'handle' => 'lsxd-wc-product-on-sale',
				'src'    => get_template_directory_uri() . '/assets/css/woocommerce/product-on-sale.css',
				'path'   => get_template_directory() . '/assets/css/woocommerce/product-on-sale.css',
			),
			'woocommerce/checkout-totals-block' => array(
				'handle' => 'lsxd-wc-checkout-totals-block',
				'src'    => get_template_directory_uri() . '/assets/css/woocommerce/checkout-totals-block.css',
				'path'   => get_template_directory() . '/assets/css/woocommerce/checkout-totals-block.css',
			),

			 


		);
		return $this->assets;
	}

	/**
	 * Registers our block specific styles.
	 *
	 * @return void
	 */
	public function enqueue_block_styles() {
		foreach ( $this->get_assets() as $name => $asset ) {
			wp_enqueue_block_style(
				$name,
				array(
					'handle' => $asset['handle'],
					'src'    => $asset['src'],
					'path'   => $asset['path'],
				),
			);
		}
	}
}
