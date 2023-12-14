<?php
/**
 * The core file
 *
 * @package lsx-design
 */

namespace LSXD;

use LSXD\Classes\Images;
use LSXD\Classes\Setup;
use LSXD\Classes\Block_Setup;
use LSXD\Classes\Block_Styles;
use LSXD\Classes\Frontend;
use LSXD\Classes\Vendors\Vendors;

/**
 * The main file loading the rest of the files
 *
 * @package   LSX
 * @author    LightSpeed
 * @license   GPL3
 * @link
 * @copyright 2023 LightSpeed
 */
class Core {

	/**
	 * Contains the class responsible for the images and sizes.
	 *
	 * @var object
	 */
	public $images;

	/**
	 * Contains the class responsible for setting up theme.
	 *
	 * @var object
	 */
	public $setup;

	/**
	 * Contains the class responsible for setting up our blocks.
	 *
	 * @var object
	 */
	public $block_setup;

	/**
	 * Contains the Block Styles.
	 *
	 * @var object
	 */
	public $block_styles;

	/**
	 * Contains the class responsible altering / displaying the blocks.
	 *
	 * @var object
	 */
	public $block_functions;

	/**
	 * All the functions for the output on the frontend.
	 *
	 * @var object
	 */
	public $frontend;

	/**
	 * All 3rd party integrations
	 *
	 * @var array
	 */
	public $integrations;

	/**
	 * Contructor
	 */
	public function __construct() {
	}

	/**
	 * Loads the actions we need.
	 *
	 * @return void
	 */
	public function init() {
		// Load our files and includes.
		$this->load_classes();

		// Initiate our classes.
		$this->images->init();
		$this->setup->init();
		$this->block_setup->init();
		$this->block_styles->init();
		$this->frontend->init();

		$this->load_vendors();
	}

	/**
	 * Loads the classes
	 */
	public function load_classes() {
		require get_template_directory() . '/includes/classes/class-setup.php';
		$this->setup = new Setup();

		require get_template_directory() . '/includes/classes/class-images.php';
		$this->images = new Images();

		require get_template_directory() . '/includes/classes/class-block-setup.php';
		$this->block_setup = new Block_Setup();

		require get_template_directory() . '/includes/classes/class-block-styles.php';
		$this->block_styles = new Block_Styles();

		require get_template_directory() . '/includes/classes/class-frontend.php';
		$this->frontend = new Frontend();
	}

	/**
	 * Loading the third party vendors.
	 *
	 * @return void
	 */
	public function load_vendors() {
		require get_template_directory() . '/includes/classes/vendors/class-vendors.php';
		$this->integrations['vendors'] = new Vendors();
	}
}
