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
class WPJM {

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
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
	}

	/**
	 * Enqueues the frontend styles
	 *
	 * @return void
	 */
	public function enqueue_styles() {
		if ( is_page( 'jobs' ) || is_post_type_archive( 'job_listing' ) || is_tax( 'job_listing_type' ) || is_singular( 'job_listing' ) ) {
			wp_enqueue_style( 'lsxd-wpjm-styles', get_template_directory_uri() . '/assets/css/wpjm/wpjm.css', array(), time() );
		}
	}
}
