<?php

/**
 * Title: Latest Products
 * Slug: vayu/latest-products
 * Categories: vayu
 * Keywords: Latest Products
 */

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
?>
<!-- wp:group {"metadata":{"name":"Most popular Products"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}},"position":{"type":""}},"className":"latest-products","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-products" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0px","fontSize":"35px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:35px;font-style:normal;font-weight:600;letter-spacing:0px;text-transform:uppercase">Our Latest Products</h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-new {"columns":4,"rows":1,"stockStatus":["","","","instock","outofstock","onbackorder"]} /--></div>
<!-- /wp:group -->

<?php 
}
?>