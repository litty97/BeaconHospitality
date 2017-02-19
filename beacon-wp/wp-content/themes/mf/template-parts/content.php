<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mf Theme
 */
global $mf_options;
?>

<div class="container">
  <div class="col-md-9 mt30 no-padding-left">
    <?php
	$current_category_info = get_the_category($post->ID);
	$current_cat_id = !empty($current_category_info) && is_array($current_category_info) ? $current_category_info[0]->term_id : '';
	$current_cat_name = !empty($current_category_info) && is_array($current_category_info) ? $current_category_info[0]->cat_name : '';
?>
    <?php while ( have_posts() ) : the_post(); ?>
    <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content">
        <div class="c-content-boxes variant-two ">
          <div class="col-md-12 col-sm-6 no-padding">
            <div class="c-box-extend">
              <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink() ?>">
              <?php the_post_thumbnail('mf-blog-full'); ?>
              </a>
              <?php endif; ?>
              <div class="<?php if ( is_sticky() && is_home() && ! is_paged() ) {
							echo esc_html__('c-be-body-sticky', 'mf');
						     } else {
							echo esc_html__('c-be-body', 'mf');
						}?>"> 
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'mf' ); ?></span>
		<?php endif; ?>
			  <a href="<?php the_permalink() ?>">
                <h2>
                  <?php the_title(); ?>
                </h2>
                </a>
                <p> <?php echo get_the_excerpt(); ?> </p>
                <p><a href="<?php the_permalink() ?>"><?php echo esc_html__('Read More...', 'mf'); ?></a></p>
              </div>
              <div class="c-be-footer">
                <ul class="process">
                  <li> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"> <i class="fa fa-user"></i> <?php echo get_the_author(); ?> </a> </li>
                  <li> <a href="<?php the_permalink(); ?>#comments"> <i class="fa fa-comment"></i>
                    <?php comments_number(esc_html__('No Comment', 'mf'), esc_html__('1 Comment', 'mf'), esc_html__('% Comment', 'mf') );?>
                    </a> </li>
                  <li> <i class="fa fa-calendar"></i>
                    <?php the_time('F jS, Y') ?>
                  </li>
                  <li> <a href="<?php echo get_category_link($current_cat_id); ?>"> <i class="fa fa-folder-open"></i> <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'mf' ) ); ?></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .entry-content --> 
      
    </article>
    <!-- #post-## -->
    <?php endwhile; ?>
    <div class="col-md-9">
      <div class="center">
        <?php
// Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => esc_html__( 'Previous page', 'mf' ),
                'next_text'          => esc_html__( 'Next page', 'mf' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'mf' ) . ' </span>',
            ) );
  ?>
      </div>
    </div>
  </div>
  <div class="col-md-3  no-padding-right">
    <?php dynamic_sidebar( 'default_sidebar' ); ?>
  </div>
</div>