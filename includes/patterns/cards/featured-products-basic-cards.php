<?php
/**
 * Featured products basic cards
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Featured products basic cards', 'lsx-design' ),
	'categories' => array( 'cards' ),
	'content'    => '<!-- wp:woocommerce/product-collection {"id":"1e2d910d-66de-4d71-bb4a-f25a08532e1d","queryId":2,"query":{"perPage":5,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":5,"shrinkColumns":true},"collection":"woocommerce/product-collection/featured","hideControls":["inherit","featured"],"queryContextIncludes":["collection","id"],"align":"wide"} -->
    <div class="wp-block-woocommerce-product-collection alignwide"><!-- wp:woocommerce/product-template -->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"radius":"12px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"12px","topRight":"12px"}}}} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"10px","left":"10px","top":"10px","bottom":"10px"},"blockGap":"0"},"border":{"width":"1px","color":"var( \u002d\u002dwp\u002d\u002dcustom\u002d\u002dcolour\u002d\u002dneutral\u002d\u002d100 )","radius":{"bottomLeft":"12px","bottomRight":"12px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color" style="border-color:var( --wp--custom--colour--neutral--100 );border-width:1px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"0"},"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"contrast","fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
    
    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"x-small","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}}} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    <!-- /wp:woocommerce/product-template --></div>
    <!-- /wp:woocommerce/product-collection -->',
);
