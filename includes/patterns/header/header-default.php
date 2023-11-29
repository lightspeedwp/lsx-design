<?php
/**
 * Header default
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Header default', 'lsx-design' ),
	'categories' => array( 'header' ),
	'content'    => '
	<!-- wp:group {"style":{"position":{"type":""}},"className":"header-default has-base-background-color has-background"} -->
<div class="wp-block-group header-default has-base-background-color has-background"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-small","right":"0","bottom":"var:preset|spacing|x-small","left":"0"},"blockGap":"0"}},"layout":{"inherit":true,"type":"constrained"}} -->
  <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:0"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
  <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex"}} -->
  <div class="wp-block-group"><!-- wp:site-logo /--></div>
  <!-- /wp:group -->
  
  <!-- wp:navigation {"icon":"menu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"1.25rem"},"typography":{"lineHeight":"1"}}} /--></div>
  <!-- /wp:group --></div>
  <!-- /wp:group --></div>
  <!-- /wp:group -->
	',
);
