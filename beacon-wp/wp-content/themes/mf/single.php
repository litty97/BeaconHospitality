<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package Mf Theme
*/
get_header(); ?>
<?php $post_custom_title = $mf_options['post-title-custom-text'];

$po_top = $mf_options['post-padding']['padding-top'];
$po_right = $mf_options['post-padding']['padding-right'];
$po_bottom = $mf_options['post-padding']['padding-bottom'];
$po_left = $mf_options['post-padding']['padding-left'];


$po_padding = $po_top." ".$po_right." ".$po_bottom." ".$po_left;

?>
<!-- C-LAYOUT-BREADCRUMBS -->
<?php $hbreadcrumbs = $mf_options['post-switch-parent']; ?>
<?php if ($hbreadcrumbs == '1') { ?>
<section class="c-layout-breadcrumbs-1" style="background-color: <?php echo esc_attr($mf_options['post-header-bg']); ?>; color: <?php echo esc_attr($mf_options['post-header-text']); ?>; ">
  <div class="container">
    <h1 class="c-page-title" style="color: <?php echo esc_attr($mf_options['post-header-text']); ?> ;">
       <?php if ($post_custom_title == '') { ?>
      <?php the_title(); ?>
      <?php }else { ?>
      <?php echo esc_attr($post_custom_title); ?>
      <?php } ?>
    </h1>
    <?php $postbreadcrumbs = $mf_options['breadcrumbs-post']; ?>
    <?php if ($postbreadcrumbs == '1') { ?>
    <div class="c-page-breadcrumbs">
      <?php mf_breadcrumbs(); ?>
    </div>
    <?php }else {} ?>
  </div>
  <!--/.container -->
</section>
<?php }else {} ?>
<!-- END C-LAYOUT-BREADCRUMBS -->
<div id="primary" class="content-area">
  <main id="main" class="site-main" style="padding: <?php echo esc_attr($po_padding); ?>">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'single' ); ?>
    <?php endwhile; // End of the loop. ?>
  </main>
  <!-- #main -->
</div>
<!-- #primary -->
<?php get_footer(); ?>