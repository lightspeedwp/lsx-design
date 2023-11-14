<?php
/**
 * The core file
 *
 * @package lsx-design
 */

namespace LSXD\Classes\WooCommerce;

/**
 * The main file loading file for the WooCommerce related functions
 *
 * @package   LSX
 * @author    LightSpeed
 * @license   GPL3
 * @link
 * @copyright 2023 LightSpeed
 */
class WooCommerce {

	/**
	 * Undocumented variable
	 *
	 * @var Assets()
	 */
	public $assets;

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
			$this->load_classes();
		}
	}

	/**
	 * Loads the classes
	 */
	public function load_classes() {
		require get_template_directory() . '/includes/classes/woocommerce/class-assets.php';
		$this->assets = new Assets();
	}
}
