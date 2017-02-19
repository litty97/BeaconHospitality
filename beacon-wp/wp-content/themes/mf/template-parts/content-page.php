<?php
/**
* Template part for displaying page content in page.php.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Mf Theme
*/
?>
<?php global $mf_options;
// Grab the metadata from the database
$text = $mf_options['layout'];
if($text == '2'){
require get_template_directory() . '/template-parts/content-page-left-sidebar.php';
}
elseif($text == '1'){
require get_template_directory() . '/template-parts/content-page-right-sidebar.php';
}
else { ?>
<div class="container">
  <article id="post-<?php the_ID(); ?>" 
           <?php post_class(); ?>>
  <!-- BEGIN C-LAYOUT-SIDEBAR -->
  <div>
    <?php the_content(); ?>
		<div class="single-pagination">
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'mf' ), 'after' => '</div>' ) ); ?>
		</div>
    <div class="entry-meta">
      <?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
comments_template();
endif;
?>
    </div>
    <!-- .entry-meta -->
  </div>
  <!-- END C-LAYOUT-SIDEBAR -->
  </article>
<!-- #post-## -->
</div>
<?php } ?>