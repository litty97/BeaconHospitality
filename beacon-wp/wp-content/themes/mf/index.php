<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Mf Theme
*/
get_header(); ?>
<!-- primary -->
<div id="primary" class="content-area">
  <!-- main -->
  <main id="main" class="site-main">
    <!-- Slider -->
    <!-- #Slider -->
    <?php if ( have_posts() ) : ?>
    <?php if ( is_home() && ! is_front_page() ) : ?>
    <!-- Header -->
    <header>
      <h1 class="page-title screen-reader-text">
        <?php single_post_title(); ?>
      </h1>
    </header>
    <!-- #Header -->
    <?php endif; ?>
    <?php /* Start the Loop */ ?>
    <?php
/*
* Include the Post-Format-specific template for the content.
* If you want to override this in a child theme, then include a file
* called content-___.php (where ___ is the Post Format name) and that will be used instead.
*/
get_template_part( 'template-parts/content' );
?>
    <?php else : ?>
    <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
  </main>
  <!-- #main -->
</div>
<!-- #primary -->
<?php get_footer(); ?>