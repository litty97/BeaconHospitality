<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Mf Theme
*/
// Template Name: Blog Standard
get_header();
?>
<?php
global $mf_options;
// Layout Option
$side = $mf_options['layout'];
if($side == '2'){
$side_col = '9';
}
elseif($side == '1'){
$side_col = '9';
}
elseif($side == '0'){
$side_col = '12';
}else {
echo "";
}
// Category Show Post Option
if (isset($mf_options['cat_page'][0])) {     $p0 = $mf_options['cat_page'][0].",";    }else{    	$p0 = '' ;}
if (isset($mf_options['cat_page'][1])) {     $p1 = $mf_options['cat_page'][1].",";    }else{    	$p1 = '' ;}
if (isset($mf_options['cat_page'][2])) {     $p2 = $mf_options['cat_page'][2].",";    }else{    	$p2 = '' ;}
if (isset($mf_options['cat_page'][3])) {     $p3 = $mf_options['cat_page'][3].",";    }else{    	$p3 = '' ;}
if (isset($mf_options['cat_page'][4])) {     $p4 = $mf_options['cat_page'][4].",";    }else{    	$p4 = '' ;}
if (isset($mf_options['cat_page'][5])) {     $p5 = $mf_options['cat_page'][5].",";    }else{    	$p5 = '' ;}
if (isset($mf_options['cat_page'][6])) {     $p6 = $mf_options['cat_page'][6].",";    }else{    	$p6 = '' ;}
if (isset($mf_options['cat_page'][7])) {     $p7 = $mf_options['cat_page'][7].",";    }else{    	$p7 = '' ;}
if (isset($mf_options['cat_page'][8])) {     $p8 = $mf_options['cat_page'][8].",";    }else{    	$p8 = '' ;}
if (isset($mf_options['cat_page'][9])) {     $p9 = $mf_options['cat_page'][9].",";    }else{    	$p9 = '' ;}
$catpost = $p0.$p1.$p2.$p3.$p4.$p5.$p6.$p7.$p8.$p9;
?>
<?php $hbreadcrumbs = $mf_options['switch-parent']; ?>
<?php if ($hbreadcrumbs == '1') { ?>
<section class="c-layout-breadcrumbs-1">
  <div class="container">
    <h2 class="c-page-title">
      <?php the_title(); ?>
    </h2>
    <div class="c-page-breadcrumbs">
      <?php mf_breadcrumbs(); ?>
    </div>
  </div>
  <!--/.container -->
</section>
<?php }else {} ?>
<div class="container no-padding">
  <article  id="post-<?php the_ID(); ?>" 
           <?php post_class(); ?>>
  <div class="entry-content">
    <div class="c-content-boxes variant-two ">
      <?php if($side == '2'){ ?>
      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div>
      <?php }else {} ?>
      <div class="col-md-<?php echo esc_attr($side_col); ?> mt30 no-padding">
        <?php if (have_posts()) : ?>
        <?php $ibayram = new WP_Query("cat='" . $catpost ."'");
while($ibayram->have_posts()) : $ibayram->the_post();?>
        <div class="col-md-12">
          <div class="c-box-extend c-horizontal">
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="c-be-header c-be-standard-blog">
              <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('mf-category-hrz'); ?>
              </a>
            </div>
            <?php endif; ?>
            <div class="c-be-body">
              <a href="<?php the_permalink() ?>">
              <div class="blog-posted"><?php mf_posted_on(); ?></div>
                <h3>
                  <?php the_title(); ?>
                </h3>
              </a>
              <p>
                <?php echo mf_substring(); ?>
              </p>
              <div class="blog-box-footer">
                <div class="blog-box-comment">
                  <i class="fa fa-comment-o"></i> 
                  <a href="<?php comments_link(); ?>"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></a>
                </div>
                <div class="blog-box-read">
                  <i class="fa fa-angle-double-right"></i>
                  <a href="<?php the_permalink() ?>"><?php echo esc_html__('Read More', 'mf'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php if($side == '1'){ ?>
      <div class="col-md-3  no-padding-right">
        <?php get_sidebar(); ?>
      </div>
      <?php }else {} ?>
    </div>
    <div class="col-md-<?php echo esc_attr($side_col); ?>">
      <?php mf_archive_navi(); ?>
    </div>
  </div>
  <!-- .entry-content -->
  </article>
<!-- #post-## -->
</div>
<?php get_footer(); ?>