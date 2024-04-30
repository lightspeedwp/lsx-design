<?php
/**
 * Woo Style 3 Cards 
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Woo Style 3 Cards ', 'lsx-design' ),
	'categories' => array( 'cards' ),
	'content'    => '<!-- wp:woocommerce/product-collection {"id":"25513cf9-2185-48c0-a5a3-0cee66a51aa3","queryId":0,"query":{"perPage":12,"pages":2,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"queryContextIncludes":["collection","id"],"align":"wide"} -->
    <div class="wp-block-woocommerce-product-collection alignwide"><!-- wp:woocommerce/product-template -->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","left":"10px","right":"10px"},"blockGap":"5px"},"border":{"radius":"12px","width":"1px"}},"borderColor":"neutral","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-neutral-border-color" style="border-width:1px;border-radius:12px;padding-top:10px;padding-right:10px;padding-left:10px"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomRight":"12px","bottomLeft":"12px"}}}} /-->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"5px","bottom":"5px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="padding-top:5px;padding-bottom:5px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
    <div class="wp-block-group"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
    
    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"tiny","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:post-excerpt {"moreText":"READ MORE","fontSize":"x-small","__woocommerceNamespace":"woocommerce/product-collection/product-summary"} /--></div>
    <!-- /wp:group --></div>
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
