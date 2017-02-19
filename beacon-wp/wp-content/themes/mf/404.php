<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mf Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="container no-padding">
      <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
          <section class="c-content-boxes variant-two ">
            <div class="col-md-9 no-padding-left">
              <div class="col-md-12 mt10">
                <section class="error-404 not-found">
                  <article class="text-center c-margin-t-60 c-margin-b-60">
                    <h1 class="c-font-xl c-margin-b-30"><?php esc_html_e( 'Page Not Found', 'mf' ); ?></h1>
                    <h3 class="c-margin-b-30">
                      <?php esc_html_e( 'It looks like you may have a wrong turn. Don\'t worry... it happens to the best of us.', 'mf' ); ?>
                    </h3>
                    <?php
                    $searchbox = $mf_options['search-on'];
                    if ($searchbox == '1') { ?>
                    <form method="post" class="form-inline">
                      <div class="input-group input-group-lg">
                        <?php get_search_form(); ?>
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-search"></i></span> </div>
                    </form>
                    <?php }else {} ?>
                  </article>
                </section>
                <!-- .error-404 -->
              </div>
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
  </main>
  <!-- #main -->
</div>
<!-- #primary -->

<?php get_footer(); ?>