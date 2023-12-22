<?php
/**
 * The core file
 *
 * @package lsx-design
 */

namespace LSXD\Classes\Vendors;

/**
 * The main file loading file for the Vendors related functionality.
 *
 * @package   LSX
 * @author    LightSpeed
 * @license   GPL3
 * @link
 * @copyright 2023 LightSpeed
 */
class Vendors {

	/**
	 * Holds the WooCommerce Object.
	 *
	 * @var WooCommerce()
	 */
	public $woocommerce;

	/**
	 * Holds The Events Calendar Object.
	 *
	 * @var TEC()
	 */
	public $tec;

	/**
	 * Contructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'init' ), 1 );
	}

	/**
	 * Loads the actions we need.
	 *
	 * @return void
	 */
	public function init() {
		if ( function_exists( 'WC' ) ) {
			$this->load_woocommerce();
		}
		if ( class_exists( 'Tribe__Events__Main' ) ) {
			$this->load_tec();
		}

		if ( function_exists( 'WPJM' ) ) {
			$this->load_wpjm();
		}
	}

	/**
	 * Load WooCommerce
	 */
	public function load_woocommerce() {
		require get_template_directory() . '/includes/classes/vendors/class-woocommerce.php';
		$this->woocommerce = new WooCommerce();
	}

	/**
	 * Loads The Events Calendar
	 */
	public function load_tec() {
		require get_template_directory() . '/includes/classes/vendors/class-tec.php';
		$this->tec = new TEC();
	}

	/**
	 * Loads The WP Job Manager
	 */
	public function load_wpjm() {
		require get_template_directory() . '/includes/classes/vendors/class-wpjm.php';
		$this->wpjm = new WPJM();
	}
}
