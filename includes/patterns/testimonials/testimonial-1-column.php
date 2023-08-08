<?php
/**
 * Testimonial 1 Col
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Testimonial 1 Col', 'lsx-design' ),
	'categories' => array( 'testimonials' ),
	'content'    => '<!-- wp:quote {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"backgroundColor":"neutral","textColor":"contrast","className":"is-style-default"} -->
	<blockquote class="wp-block-quote is-style-default has-contrast-color has-neutral-background-color has-text-color has-background has-link-color" style="font-style:normal;font-weight:600"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":1414,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src=""' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-theme.png" alt="" class="wp-image-1414"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"large"} -->
	<p class="has-large-font-size" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:300"><em>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque gravida vitae non diam accumsan posuere, venenatis mi turpis.</em></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:image {"align":"left","id":1416,"width":-340,"height":-340,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px","width":"2px"}}} -->
	<figure class="wp-block-image alignleft size-full is-resized has-custom-border"><img src=""' . esc_url( get_theme_file_uri() ) . '/assets/images/favicon.png" alt="" class="wp-image-1416" style="border-width:2px;border-radius:100px" width="-340" height="-340"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --><cite>Client Name<br>Job Title<br><a href=""><strong>Company Name &amp; Link</strong></a></cite></blockquote>
	<!-- /wp:quote -->',
);
