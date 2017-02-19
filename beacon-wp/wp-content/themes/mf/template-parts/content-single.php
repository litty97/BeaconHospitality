<?php
/**
* Template part for displaying single posts.
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
require get_template_directory() . '/template-parts/content-single-left-sidebar.php';
}
elseif($text == '1'){
require get_template_directory() . '/template-parts/content-single-right-sidebar.php';
}
elseif($text == '0'){ ?>
<div class="container">
  <article id="post-<?php the_ID(); ?>" 
           <?php post_class(); ?>>
  <!-- BEGIN C-LAYOUT-SIDEBAR -->
  <div>
     <?php $featured_images = $mf_options['post-image']; ?>
          <?php if ($featured_images == '1') { ?>
           <?php if ( has_post_thumbnail() ) : ?>
              <div class="single-post-image">
      <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail(); ?>
              </a>
              </div>
              <?php endif; ?>
              <?php }else {} ?>
    
    <?php the_content(); ?>
		<div class="single-pagination">
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'mf' ), 'after' => '</div>' ) ); ?>
		</div>
    <?php mf_posted_on(); ?>
    <div class="entry-meta">
      <?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
comments_template();
endif;
?>
    </div>
    <!-- .entry-meta -->
    <div class="col-md-12 no-padding">
		<?php $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'mf' ) );
		if ( $categories_list ) {
			printf( 'Categories : <span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span><br>',
				_x( 'Categories', 'Used before category names.', 'mf' ),
				$categories_list
			);
		}
		?>
	  <?php $tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'mf' ) );
		if ( $tags_list ) {
			printf( 'Tags : <span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				_x( 'Tags', 'Used before tag names.', 'mf' ),
				$tags_list
			);
		}
		?>
    </div>
  </div>
  <!-- END C-LAYOUT-SIDEBAR -->
  </article>
<!-- #post-## -->
</div>
<?php }else {
require get_template_directory() . '/template-parts/content-single-right-sidebar.php';
} ?>