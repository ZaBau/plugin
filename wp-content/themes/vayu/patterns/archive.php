<?php
 /**
  * Title: Archive
  * Slug: vayu/archive
  * Inserter: no
  */
?>


<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/about.webp","id":341,"hasParallax":true,"dimRatio":70,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":204,"minHeightUnit":"px","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-parallax" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;min-height:204px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__image-background wp-image-341 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() );?>/assets/images/about.webp)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"20px","right":"20px"},"margin":{"top":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"80px","bottom":"80px"},"padding":{"right":"15px","left":"15px"}},"typography":{"fontSize":"21px"}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
<main class="wp-block-group" style="margin-top:80px;margin-bottom:80px;padding-right:15px;padding-left:15px;font-size:21px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:query {"queryId":37,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"right":"15px","left":"15px","top":"15px","bottom":"15px"}},"border":{"color":"#dddddd","width":"1px","radius":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:#dddddd;border-width:1px;border-radius:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:post-featured-image {"isLink":true,"height":"270px","style":{"border":{"radius":"20px"},"color":{"duotone":"unset"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"0"},"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:image {"id":436,"width":"26px","height":"26px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/schedule.png" alt="" class="wp-image-436" style="object-fit:cover;width:26px;height:26px"/></figure>
<!-- /wp:image -->

<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"right":"0","left":"0"}}},"textColor":"primary","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:post-excerpt {"excerptLength":19,"style":{"typography":{"fontSize":"15px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center">No posts found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->