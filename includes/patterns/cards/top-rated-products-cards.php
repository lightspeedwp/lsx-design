<?php
/**
 * Top rated products cards
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Top rated products cards', 'lsx-design' ),
	'categories' => array( 'cards' ),
	'content'    => '<!-- wp:woocommerce/product-collection {"id":"2bf45049-11b3-43b2-856c-f68d84b83dcd","queryId":13,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"rating","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"collection":"woocommerce/product-collection/top-rated","hideControls":["inherit","order"],"queryContextIncludes":["collection","id"],"align":"wide"} -->
    <div class="wp-block-woocommerce-product-collection alignwide"><!-- wp:woocommerce/product-template -->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"radius":"12px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"0"},"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"contrast","fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
    
    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"x-small","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}}} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:woocommerce/product-button {"width":100,"isDescendentOfQueryLoop":true,"className":"is-style-outline","style":{"border":{"radius":"12px"}}} /--></div>
    <!-- /wp:group -->
    <!-- /wp:woocommerce/product-template --></div>
    <!-- /wp:woocommerce/product-collection -->',
);
