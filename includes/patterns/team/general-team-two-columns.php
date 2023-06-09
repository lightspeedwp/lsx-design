<?php
/**
 * Team 2 Column
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Team 2 Column', 'lsx-design' ),
	'categories' => array( 'team' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|x-large","right":"30px","bottom":"var:preset|spacing|x-large","left":"30px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" id="our-team">' . esc_html__( 'Our Team', 'lsx-design' ) . '</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--medium)">' . esc_html__( 'The people who are ready to serve you.', 'lsx-design' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrast-800x800.jpg' . '" alt="Sample Image" class="wp-image-3489"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="has-medium-font-size" id="member-name-1">' . esc_html__( 'Member Name', 'lsx-design' ) . '</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectet adipiscing lectus. Vestibulum mi justo, luctus. <a href="#">' . esc_html__( 'View profile', 'lsx-design' ) . '</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrast-800x800.jpg' . '" alt="Sample Image" class="wp-image-3489"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="has-medium-font-size" id="member-name-2">' . esc_html__( 'Member Name', 'lsx-design' ) . '</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectet adipiscing lectus. Vestibulum mi justo, luctus. <a href="#">' . esc_html__( 'View profile', 'lsx-design' ) . '</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrast-800x800.jpg' . '" alt="Sample Image" class="wp-image-3489"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="has-medium-font-size" id="member-name">' . esc_html__( 'Member Name', 'lsx-design' ) . '</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectet adipiscing lectus. Vestibulum mi justo, luctus. <a href="#">' . esc_html__( 'View profile', 'lsx-design' ) . '</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrast-800x800.jpg' . '" alt="Sample Image" class="wp-image-3489"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="has-medium-font-size" id="member-name">' . esc_html__( 'Member Name', 'lsx-design' ) . '</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectet adipiscing lectus. Vestibulum mi justo, luctus. <a href="#">' . esc_html__( 'View profile', 'lsx-design' ) . '</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrast-800x800.jpg' . '" alt="Sample Image" class="wp-image-3489"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="has-medium-font-size" id="member-name">' . esc_html__( 'Member Name', 'lsx-design' ) . '</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectet adipiscing lectus. Vestibulum mi justo, luctus. <a href="#">' . esc_html__( 'View profile', 'lsx-design' ) . '</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrast-800x800.jpg' . '" alt="Sample Image" class="wp-image-3489"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="has-medium-font-size" id="member-name">' . esc_html__( 'Member Name', 'lsx-design' ) . '</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectet adipiscing lectus. Vestibulum mi justo, luctus. <a href="#">' . esc_html__( 'View profile', 'lsx-design' ) . '</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
