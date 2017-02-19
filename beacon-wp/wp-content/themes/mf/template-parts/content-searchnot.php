<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mf Theme
 */

?>

<div class="col-md-12 mt10">
  <div class="c-box-search c-horizontal">
    <article class="text-center c-margin-t-60 c-margin-b-60">
      <h1 class="c-font-xl c-margin-b-30">
        <?php esc_html_e( 'Nothing Found', 'mf' ); ?>
      </h1>
      <h3 class="c-margin-b-30">
        <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'mf' ); ?>
      </h3>
      <form method="post" class="form-inline">
        <div class="input-group input-group-lg">
          <?php get_search_form(); ?>
          <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-search"></i></span> </div>
      </form>
    </article>
  </div>
</div>
