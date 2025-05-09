<?php
/**
 * Functions and definitions.
 *
 * @package lsx
 */

use LSXD\Core;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LSXD_VERSION', '1.4.1' );

require_once get_template_directory() . '/includes/classes/class-core.php';

/**
 * Contains the theme object
 *
 * @return object
 */
function lsxd() {
	global $lsxd;
	if ( null === $lsxd ) {
		$lsxd = new Core();
		$lsxd->init();
	}
	return $lsxd;
}
lsxd();
