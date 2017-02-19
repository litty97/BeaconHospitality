<?php
/**
* The template for displaying archive pages.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Mf Theme
*/
get_header(); ?>
<!-- C-LAYOUT-BREADCRUMBS -->
<section class="c-layout-breadcrumbs-1">
  <div class="container">
    <?php the_archive_title( '<h2 class="c-page-title">', '</h2>' ); ?>
    <div class="c-page-breadcrumbs">
      <?php mf_breadcrumbs(); ?>
    </div>
  </div>
  <!--/.container -->
</section>
<!-- END C-LAYOUT-BREADCRUMBS -->
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php require get_template_directory() . '/template-parts/mf-archive.php'; ?>
  </main>
  <!-- #main -->
</div>
<!-- #primary -->
<?php get_footer(); ?>