<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Mf Theme
*/
?>
<?php
$side = get_term_meta( get_queried_object_id(), 'mf_cat_sidebar', true );
if($side == 'cat_left'){
$side_col = '9';
}
elseif($side == 'cat_right'){
$side_col = '9';
}
elseif($side == 'cat_full'){
$side_col = '12';
}else {
echo "";
}
// Grab the metadata from the database
$cat_column = get_term_meta( get_queried_object_id(), 'mf_cat_column', true );
if($cat_column == '6'){
$cat_images = 'mf-category-two-images';
}
elseif($cat_column == '4'){
$cat_images = 'mf-category-three-images';
}
elseif($cat_column == '3'){
$cat_images = 'mf-category-four-images';
}else {
$cat_images = 'mf-category-two-images';
}
if($side != 'cat_full' && $cat_column == '3')  {
$cat_images = 'mf-category-four-side-images';
}else {}
?>
<div class="container no-padding">
  <article  id="post-<?php the_ID(); ?>" 
           <?php post_class(); ?>>
  <div class="entry-content">
    <div class="c-content-boxes variant-two ">
      <?php if($side == 'cat_left'){ ?>
      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div>
      <?php }else {} ?>
      <div class="col-md-<?php echo esc_attr($side_col) ?> mt30 no-padding">
        <?php if ( have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-md-<?php echo esc_attr($cat_column) ?> col-sm-6">
          <div class="c-box-extend">
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="c-be-header">
              <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail($cat_images); ?>
              </a>
            </div>
            <?php endif; ?>
            <div class="c-be-body <?php echo esc_attr($cat_images) ?>">
              <a href="<?php the_permalink() ?>">
                <h3>
                  <?php the_title(); ?>
                </h3>
              </a>
              <p>
                <?php echo get_the_excerpt(); ?>
              </p>
            </div>
            <div class="c-be-footer">
              <ul class="process">
                <li> 
                  <a href="#"> 
                    <i class="fa fa-comment">
                    </i> 
                    <?php comments_number('No Comments', 'One Comment', '% Comments' );?> 
                  </a> 
                </li>
                <li> 
                  <a href="#"> 
                    <i class="fa fa-calendar">
                    </i> 
                    <?php the_time('F jS, Y') ?> 
                  </a> 
                </li>
              </ul>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php if($side == 'cat_right'){ ?>
      <div class="col-md-3  no-padding-right">
        <?php get_sidebar(); ?>
      </div>
      <?php }else {} ?>
    </div>
    <div class="col-md-<?php echo esc_attr($side_col) ?>">
      <?php mf_archive_navi(); ?>
    </div>
  </div>
  <!-- .entry-content -->
  </article>
<!-- #post-## -->
</div>