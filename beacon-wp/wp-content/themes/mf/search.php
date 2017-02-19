<?php
/**
* The template for displaying search results pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*
* @package Mf Theme
*/
get_header(); ?>
<!-- primary -->
<section id="primary" class="content-area">
  <!-- main -->
  <main id="main" class="site-main" role="main">
    <!-- C-LAYOUT-BREADCRUMBS -->
    <section class="c-layout-breadcrumbs-1">
      <div class="container">
        <h2 class="c-page-title">
          <?php printf( esc_html__( 'Search Results for: %s', 'mf' ), '<span>' . get_search_query() . '</span>' ); ?>
        </h2>
        <div class="c-page-breadcrumbs">
          <?php mf_breadcrumbs(); ?>
        </div>
      </div>
      <!--/.container -->
    </section>
    <!-- END C-LAYOUT-BREADCRUMBS -->
    <?php if ( have_posts() ) : ?>
    <div class="container no-padding">
      <article  id="post-<?php the_ID(); ?>" 
               <?php post_class(); ?>>
      <div class="entry-content">
        <section class="c-content-boxes variant-two ">
          <div class="col-md-9 no-padding-left">
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php
/**
* Run the loop for the search to output the results.
* If you want to overload this in a child theme then include a file
* called content-search.php and that will be used instead.
*/
get_template_part( 'template-parts/content', 'search' );
?>
            <?php endwhile; ?>
          </div>
          <div class="col-md-3  no-padding-right">
            <?php get_sidebar(); ?>
          </div>
        </section>
      </div>
      <!-- .entry-content -->
      </article>
    <!-- #post-## -->
    </div>
  <?php else : ?>
  <div class="container no-padding">
    <article  id="post-<?php the_ID(); ?>" 
             <?php post_class(); ?>>
    <div class="entry-content">
      <section class="c-content-boxes variant-two ">
        <div class="col-md-9 no-padding-left">
          <?php /* Start the Loop */ ?>
          <?php
/**
* Run the loop for the search to output the results.
* If you want to overload this in a child theme then include a file
* called content-search.php and that will be used instead.
*/
get_template_part( 'template-parts/content', 'searchnot' );
?>
        </div>
        <div class="col-md-3  no-padding-right">
          <?php get_sidebar(); ?>
        </div>
      </section>
    </div>
    <!-- .entry-content -->
    </article>
  <!-- #post-## -->
  </div>
<?php endif; ?>
</main>
<!-- #main -->
</section>
<!-- #primary -->
<?php get_footer(); ?>