<?php
/**
 * The block styles file
 *
 * @package lsx-design
 */

namespace LSXD\Classes;

/**
 * All the functions that run on the frontend and the rendering of the blocks.
 *
 * @package   LSX
 * @author    LightSpeed
 * @license   GPL3
 * @link
 * @copyright 2023 LightSpeed
 */
class Block_Styles {

	/**
	 * Holds the array of block stylesheets
	 *
	 * @var array $block_assets Holds the block assets array.
	 */
	public $block_assets = array();

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
		add_action( 'init', array( $this, 'register_block_styles' ), 10 );
		add_action( 'enqueue_block_editor_assets', array( $this, 'block_editor_styles' ) );
		add_action( 'after_setup_theme', array( $this, 'enqueue_block_styles' ), 10 );
	}

	/**
	 * Register our block styles.
	 *
	 * @return void
	 */
	public function register_block_styles() {

		$block_styles = array(
			'core/separator' => array(
				'wide' => __( 'Wide', 'lsx-design' ),
				'dashes' => __( 'Dashes', 'lsx-design' ),
				'dots-wide' => __( 'Dots Wide', 'lsx-design' ),
			),
			'core/search' => array(
				'header' => __( 'Header', 'lsx-design' ),
				'navigation' => __( 'Navigation', 'lsx-design' ),
			),
			'core/button'    => array(
				'cta'             => __( 'CTA', 'lsx-design' ),
				'lsx'             => __( 'LSX Button', 'lsx-design' ),
				'lsx-outline'     => __( 'LSX Outline', 'lsx-design' ),
				'icon'            => __( 'Icon Button', 'lsx-design' ),
				'shadow'          => __( 'Shadow', 'lsx-design' ),
				'outline-shadow'  => __( 'Outline Shadow', 'lsx-design' ),
				'link'            => __( 'Link', 'lsx-design' ),
				'underline-hover' => __( 'Underline Hover', 'lsx-design' ),
			),
			'core/quote'     => array(
				'contrast-background'  => __( 'Contrast', 'lsx-design' ),
				'primary-background'   => __( 'Primary', 'lsx-design' ),
				'secondary-background' => __( 'Secondary', 'lsx-design' ),
			),
			'core/pullquote' => array(
				'simple'  => __( 'Simple', 'lsx-design' ),
				'contrast-background'  => __( 'Contrast', 'lsx-design' ),
				'primary-background'   => __( 'Primary', 'lsx-design' ),
				'secondary-background' => __( 'Secondary', 'lsx-design' ),
			),
			'core/image'     => array(
				'inner-border' => __( 'Inner Border', 'lsx-design' ),
				'inner-border-dark'       => __( 'Dark Inner Border', 'lsx-design' ),
			),
			'core/paragraph' => array(
				'content-box'         => __( 'Content Box', 'lsx-design' ),
				'dark-content-box'    => __( 'Dark Content Box', 'lsx-design' ),
				'subheading-1' => __( 'Subheading Large', 'lsx-design' ),
				'subheading-2' => __( 'Subheading Medium', 'lsx-design' ),
				'subheading-3' => __( 'Subheading Small', 'lsx-design' ),
				'subheading-4' => __( 'Subheading X-Small', 'lsx-design' ),
			),
			'core/heading'   => array(
				'heading-1' => __( 'Heading Large', 'lsx-design' ),
				'heading-2' => __( 'Heading Medium', 'lsx-design' ),
				'heading-3' => __( 'Heading Small', 'lsx-design' ),
				'heading-4' => __( 'Heading x-Small', 'lsx-design' ),
			),
			'core/details'   => array(
				'plain-arrow' => __( 'Plain Arrow', 'lsx-design' ),
			),
			'core/list'   => array(
				'list-tick-light' => __( 'Ticks Light', 'lsx-design' ),
				'list-tick-dark' => __( 'Ticks Dark', 'lsx-design' ),
				'list-arrow-light' => __( 'Arrow Light', 'lsx-design' ),
				'list-arrow-dark' => __( 'Arrow Dark', 'lsx-design' ),
			),
			'core/post-terms'   => array(
				'primary-badge' => __( 'Primary Badge', 'lsx-design' ),
				'secondary-badge' => __( 'Secondary Badge', 'lsx-design' ),
				'white-badge' => __( 'White Badge', 'lsx-design' ),
			),
			'core/loginout'   => array(
				'compressed' => __( 'Compressed', 'lsx-design' ),
			),
			'core/post-template'   => array(
				'badges-img' => __( 'Badges on Image', 'lsx-design' ),
			),
			'woocommerce/featured-category'   => array(
				'rounded-cat' => __( 'Corners Round', 'lsx-design' ),
				'rounded-shadow-cat-s' => __( 'Small Shadow Round', 'lsx-design' ),
				'rounded-shadow-cat-m' => __( 'Medium Shadow Round', 'lsx-design' ),
				'rounded-shadow-cat-l' => __( 'Large Shadow Round', 'lsx-design' ),
			),
			'woocommerce/featured-product'   => array(
				'rounded-pro' => __( 'Corners Round', 'lsx-design' ),
				'rounded-shadow-pro-s' => __( 'Small Shadow Round', 'lsx-design' ),
				'rounded-shadow-pro-m' => __( 'Medium Shadow Round', 'lsx-design' ),
				'rounded-shadow-pro-l' => __( 'Large Shadow Round', 'lsx-design' ),
			),
			'core/columns'   => array(
				'col-seperator' => __( 'Seperator', 'lsx-design' ),
				'shadow-xsm' => __( 'Shadow x-S', 'lsx-design' ),
				'shadow-sm' => __( 'Shadow S', 'lsx-design' ),
				'shadow-m' => __( 'Shadow M', 'lsx-design' ),
				'shadow-l' => __( 'Shadow L', 'lsx-design' ),
				'shadow-xl' => __( 'Shadow x-L', 'lsx-design' ),
				'shadow-h' => __( 'Shadow Huge', 'lsx-design' ),

			),
			'core/group'   => array(
				'shadow-xsm' => __( 'Shadow x-S', 'lsx-design' ),
				'shadow-sm' => __( 'Shadow S', 'lsx-design' ),
				'shadow-m' => __( 'Shadow M', 'lsx-design' ),
				'shadow-l' => __( 'Shadow L', 'lsx-design' ),
				'shadow-xl' => __( 'Shadow x-L', 'lsx-design' ),
				'shadow-h' => __( 'Shadow Huge', 'lsx-design' ),

			),
			'core/query-pagination'   => array(
				'square' => __( 'Square', 'lsx-design' ),
			),
		);

		foreach ( $block_styles as $block => $styles ) {
			foreach ( $styles as $style_name => $style_label ) {
				register_block_style(
					$block,
					array(
						'name'  => $style_name,
						'label' => $style_label,
					)
				);
			}
		}
	}

	/**
	 * Registers the editor styles
	 *
	 * @return void
	 */
	public function block_editor_styles() {
		wp_enqueue_style( 'editor-styles', get_template_directory_uri() . '/assets/css/editor-style.css', false, LSXD_VERSION, 'all' );
		wp_enqueue_style( 'editor-styles', get_template_directory_uri() . '/assets/css/blocks/group.css', false, LSXD_VERSION, 'all' );
	}

	/**
	 * Returns an array of the block assets.
	 *
	 * @return array
	 */
	private function get_block_assets() {
		$this->block_assets = array(
			'core/separator' => array(
				'handle' => 'lsxd-separator-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/separator.css',
				'path'   => get_template_directory() . '/assets/css/blocks/separator.css',
			),
			'core/search' => array(
				'handle' => 'lsxd-search-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/search.css',
				'path'   => get_template_directory() . '/assets/css/blocks/search.css',
			),
			'core/button'    => array(
				'handle' => 'lsxd-button-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/button.css',
				'path'   => get_template_directory() . '/assets/css/blocks/button.css',
			),
			'core/heading'   => array(
				'handle' => 'lsxd-heading-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/heading.css',
				'path'   => get_template_directory() . '/assets/css/blocks/heading.css',
			),
			'core/image'     => array(
				'handle' => 'lsxd-image-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/image.css',
				'path'   => get_template_directory() . '/assets/css/blocks/image.css',
			),
			'core/pullquote' => array(
				'handle' => 'lsxd-pullquote-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/pullquote.css',
				'path'   => get_template_directory() . '/assets/css/blocks/pullquote.css',
			),
			'core/quote' => array(
				'handle' => 'lsxd-quote-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/quote.css',
				'path'   => get_template_directory() . '/assets/css/blocks/quote.css',
			),
			'core/paragraph' => array(
				'handle' => 'lsxd-paragraph-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/paragraph.css',
				'path'   => get_template_directory() . '/assets/css/blocks/paragraph.css',
			),
			'core/details' => array(
				'handle' => 'lsxd-details-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/details.css',
				'path'   => get_template_directory() . '/assets/css/blocks/details.css',
			),
			'core/columns' => array(
				'handle' => 'lsxd-columns-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/columns.css',
				'path'   => get_template_directory() . '/assets/css/blocks/columns.css',
			),
			'core/group' => array(
				'handle' => 'lsxd-group-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/group.css',
				'path'   => get_template_directory() . '/assets/css/blocks/group.css',
			),
			'core/list' => array(
				'handle' => 'lsxd-list-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/lists.css',
				'path'   => get_template_directory() . '/assets/css/blocks/lists.css',
			),
			'core/post-terms' => array(
				'handle' => 'lsxd-post-terms-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/post-terms.css',
				'path'   => get_template_directory() . '/assets/css/blocks/post-terms.css',
			),
			'core/loginout' => array(
				'handle' => 'lsxd-loginout-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/loginout.css',
				'path'   => get_template_directory() . '/assets/css/blocks/loginout.css',
			),
			'core/post-template' => array(
				'handle' => 'lsxd-post-template-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/post-template.css',
				'path'   => get_template_directory() . '/assets/css/blocks/post-template.css',
			),
			'woocommerce/featured-category' => array(
				'handle' => 'lsxd-wc-featured-category',
				'src'    => get_template_directory_uri() . '/assets/css/woocommerce/featured-category.css',
				'path'   => get_template_directory() . '/assets/css/woocommerce/featured-category.css',
			),
			'woocommerce/featured-product' => array(
				'handle' => 'lsxd-wc-featured-category',
				'src'    => get_template_directory_uri() . '/assets/css/woocommerce/featured-product.css',
				'path'   => get_template_directory() . '/assets/css/woocommerce/featured-product.css',
			),
			'core/navigation' => array(
				'handle' => 'lsxd-navigation-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/navigation.css',
				'path'   => get_template_directory() . '/assets/css/blocks/navigation.css',
			),
			'core/query-pagination' => array(
				'handle' => 'lsxd-navigation-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/pagination.css',
				'path'   => get_template_directory() . '/assets/css/blocks/pagination.css',
			),
		);
		return $this->block_assets;
	}

	/**
	 * Registers our block specific styles.
	 *
	 * @return void
	 */
	public function enqueue_block_styles() {
		foreach ( $this->get_block_assets() as $block_name => $block_asset ) {
			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => $block_asset['handle'],
					'src'    => $block_asset['src'],
					'path'   => $block_asset['path'],
				),
			);
		}
	}
}
