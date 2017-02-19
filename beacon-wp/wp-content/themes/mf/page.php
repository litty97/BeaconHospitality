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
<?php $page_custom_title = $mf_options['page-title-custom-text'];

$p_top = $mf_options['page-padding']['padding-top'];
$p_right = $mf_options['page-padding']['padding-right'];
$p_bottom = $mf_options['page-padding']['padding-bottom'];
$p_left = $mf_options['page-padding']['padding-left'];


$p_padding = $p_top." ".$p_right." ".$p_bottom." ".$p_left;

?>

<?php if ( ! is_home() && ! is_front_page() ) : ?>
<?php $hbreadcrumbs = $mf_options['switch-parent']; ?>
<?php if ($hbreadcrumbs == '1') { ?>
<!-- C-LAYOUT-BREADCRUMBS -->
<section class="c-layout-breadcrumbs-1 " style="background-color: <?php echo esc_attr($mf_options['page-header-bg']); ?>; color: <?php echo esc_attr($mf_options['page-header-text']); ?>; ">
  <div class="container ">
    <h1 class="c-page-title" style="color: <?php echo esc_attr($mf_options['page-header-text']); ?> ;">
    <?php if ($page_custom_title == '') { ?>
      <?php the_title(); ?>
      <?php }else { ?>
      <?php echo esc_attr($page_custom_title); ?>
      <?php } ?>
    </h1>
    <?php $showbreadcrumbs = $mf_options['breadcrumbs-parent']; ?>
    <?php if ($showbreadcrumbs == '1') { ?>
    <div class="c-page-breadcrumbs">
      <?php mf_breadcrumbs(); ?>
    </div>
    <?php }else {} ?>
  </div>
  <!--/.container -->
</section>
<!-- END C-LAYOUT-BREADCRUMBS -->
<?php }else {} ?>
<?php endif; ?>
<!-- primary -->
<div id="primary" class="content-area">
  <!-- main -->
  <main id="main" class="site-main" style="padding: <?php echo esc_attr($p_padding); ?>">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'page' ); ?>
    <?php endwhile; // End of the loop. ?>
  </main>
  <!-- #main -->
</div>
<!-- #primary -->
<?php get_footer(); ?>