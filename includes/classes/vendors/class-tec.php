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
class TEC {

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
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
	}

	/**
	 * Returns an array of the block assets.
	 *
	 * @return array
	 */
	private function get_assets() {
		$this->assets = array(
			'tec/archive-events' => array(
				'handle' => 'lsxd-tec-archive-events',
				'src'    => get_template_directory_uri() . '/assets/css/tec/archive-events.css',
				'path'   => get_template_directory() . '/assets/css/tec/archive-events.css',
			),
			'tribe/archive-events' => array(
				'handle' => 'lsxd-tec-archive-events',
				'src'    => get_template_directory_uri() . '/assets/css/tec/archive-events.css',
				'path'   => get_template_directory() . '/assets/css/tec/archive-events.css',
			),
			'tec/single-event' => array(
				'handle' => 'lsxd-tec-single-events',
				'src'    => get_template_directory_uri() . '/assets/css/tec/single-events.css',
				'path'   => get_template_directory() . '/assets/css/tec/single-events.css',
			),
			'tribe/single-event' => array(
				'handle' => 'lsxd-tec-single-events',
				'src'    => get_template_directory_uri() . '/assets/css/tec/single-events.css',
				'path'   => get_template_directory() . '/assets/css/tec/single-events.css',
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

	/**
	 * A temporary fix for the single event styling.
	 *
	 * @return void
	 */
	public function enqueue_styles() {
		global $post;

		if ( ! function_exists( 'tribe_is_event_query' ) ) {
			return;
		}

		$should_enqueue = (
			( tribe_is_event_query() && is_singular( array( 'tribe_events' ) ) )
			|| ( $post instanceof \WP_Post && has_shortcode( $post->post_content, 'tribe_events' ) )
		);

		if ( $should_enqueue ) {
			wp_enqueue_style( 'lsxd-wpjm-styles', get_template_directory_uri() . '/assets/css/tec/single-events.css', array(), time() );
		}
	}
}
