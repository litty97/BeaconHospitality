<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Mf Theme
*/
?>
<?php $side = get_term_meta( get_queried_object_id(), 'mf_cat_sidebar', true );
if($side == 'cat_left'){
$side_col = '9';
}
elseif($side == 'cat_right'){
$side_col = '9';
}
elseif($side == 'cat_full'){
$side_col = '12';
}else {
$side_col = '12';
}
?>
<div class="col-md-12 mt10">
  <div class="c-box-search c-horizontal">
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="c-be-search-header"> 
      <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail('mf-category-hrz'); ?>
      </a> 
    </div>
    <?php endif; ?>
    <div class="c-be-search-body"> 
      <a href="<?php the_permalink() ?>">
        <h3>
          <?php the_title(); ?>
        </h3>
      </a>
      <p>
        <?php echo get_the_excerpt(); ?>
      </p>
      <small>
        <?php the_time('F jS, Y') ?>
      </small> 
    </div>
  </div>
</div>