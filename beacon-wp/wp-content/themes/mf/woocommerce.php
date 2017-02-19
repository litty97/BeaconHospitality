<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Mf Theme
*/
get_header(); ?>
<?php 
$side = $mf_options['product_layout'];
if($side == '1'){
$side_col = '9';
$pleft = 'no-padding-right';
}
elseif($side == '0'){
$side_col = '12';
}
else {
echo '';
}
?>
<?php $hbreadcrumbs = $mf_options['switch-parent']; ?>
<?php if ($hbreadcrumbs == '1') { ?>
<!-- C-LAYOUT-BREADCRUMBS -->
<section class="c-layout-breadcrumbs-1 pad-10" style="background-color: <?php echo esc_attr($mf_options['page-header-bg']); ?>; color: <?php echo esc_attr($mf_options['page-header-text']); ?>; ">
  <div class="container">
    <h1 class="c-page-title" style="color: <?php echo esc_attr($mf_options['page-header-text']); ?> ;">
      <?php 
$url = $_SERVER["REQUEST_URI"];
$isItBlog = strpos($url, 'product');
if ($isItBlog!==false)
{ ?>
      <?php echo ''; ?>
      <?php }else { ?>
      <?php woocommerce_page_title(); ?>
      <?php }; ?>
    </h1>
    <div class="c-page-breadcrumbs">
      <?php woocommerce_breadcrumb(); ?>
    </div>
  </div>
  <!--/.container -->
</section>
<!-- END C-LAYOUT-BREADCRUMBS -->
<?php }else {} ?>
<!-- primary -->
<div id="primary" class="content-area">
  <!-- main -->
  <main id="main" class="site-main">
    <div class="container">
      <article id="post-<?php the_ID(); ?>" 
               <?php post_class(); ?>>
      <div class="entry-content">
        <div class="c-content-boxes variant-two ">
          <?php if($side == '1'){ ?>
          <div class="col-md-3 no-padding-left">
            <?php
$url = $_SERVER["REQUEST_URI"];
$isItBlog = strpos($url, 'product-category');
if ($isItBlog!==false)
{ ?>
            <?php dynamic_sidebar( 'product_category_sidebar' ); ?>
            <?php }else { ?>
            <?php dynamic_sidebar( 'product_detail_sidebar' ); ?>
            <?php }; ?>
          </div>
          <?php }else {} ?>
          <div class="col-md-<?php echo esc_attr($side_col) ?>   woo-mt <?php echo esc_attr($pleft) ?>">
            <?php if ( have_posts() ) : ?>
            <?php woocommerce_content(); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      </article>
    <!-- #post-## -->
    </div>
  <?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
  </main>
<!-- #main -->
</div>
<!-- #primary -->
<?php get_footer(); ?>