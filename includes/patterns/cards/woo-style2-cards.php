<?php
/**
 * Woo Style 2 Cards 
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Woo Style 2 Cards ', 'lsx-design' ),
	'categories' => array( 'cards' ),
	'content'    => '<!-- wp:woocommerce/product-collection {"id":"25513cf9-2185-48c0-a5a3-0cee66a51aa3","queryId":0,"query":{"perPage":12,"pages":2,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"queryContextIncludes":["collection","id"],"align":"wide"} -->
    <div class="wp-block-woocommerce-product-collection alignwide"><!-- wp:woocommerce/product-template -->
    <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"radius":"12px","width":"1px"}},"borderColor":"cyan-bluish-gray","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-cyan-bluish-gray-border-color" style="border-width:1px;border-radius:12px"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"12px","topRight":"12px"}}}} /-->
    
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"10px","left":"10px","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"},"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-small);padding-right:10px;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:10px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
    
    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"tiny","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}}} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:post-excerpt {"moreText":"READ MORE","showMoreOnNewLine":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"__woocommerceNamespace":"woocommerce/product-collection/product-summary"} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"fontSize":"small","style":{"border":{"radius":{"bottomLeft":"12px","bottomRight":"12px"}}}} /--></div>
    <!-- /wp:group -->
    <!-- /wp:woocommerce/product-template -->
    
    <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
    <!-- wp:query-pagination-previous /-->
    
    <!-- wp:query-pagination-numbers /-->
    
    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->
    
    <!-- wp:woocommerce/product-collection-no-results -->
    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
    <p class="has-medium-font-size"><strong>No results found</strong></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p>You can try <a class="wc-link-clear-any-filters" href="#">clearing any filters</a> or head to our <a class="wc-link-stores-home" href="#">shop page</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    <!-- /wp:woocommerce/product-collection-no-results --></div>
    <!-- /wp:woocommerce/product-collection -->',
);
