<?php
/**
 * On Sale products cards
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'On Sale products cards', 'lsx-design' ),
	'categories' => array( 'cards' ),
	'content'    => '<!-- wp:woocommerce/product-collection {"id":"6d155f77-1292-475a-8810-84962610ab79","queryId":14,"query":{"perPage":5,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":5,"shrinkColumns":true},"collection":"woocommerce/product-collection/on-sale","hideControls":["inherit","on-sale"],"queryContextIncludes":["collection","id"],"align":"wide"} -->
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
    <!-- /wp:woocommerce/product-template --></div>
    <!-- /wp:woocommerce/product-collection -->',
);
