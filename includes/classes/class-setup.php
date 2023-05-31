<?php
/**
 * The Setup Class
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
class Setup {

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
		add_action( 'after_setup_theme', array( $this, 'theme_setup' ) );
	}

	/**
	 * Adds the old menu options back in for site transition
	 *
	 * @deprecated in version 1.0.0
	 * @todo Remove in Version 1.1.0
	 * @return void
	 */
	public function theme_setup() {
		add_theme_support( 'menus' );
	}
}
