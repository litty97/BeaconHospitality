<?php
 function mf_main_menu() {
        $menu = wp_nav_menu(
        array(
        'theme_location' => 'main-menu',
        'echo' => 0,
        'menu_class' => 'menu',
        'menu_id'        => 'header-menu',
        'link_before'    => '<span class="mi"></span><span class="txt">',
        'link_after'     => '</span>',
        'container' => 'nav',
        'container_class' => 'header-menu desk-menu nz-clearfix',
        'walker' => new nz_scm_walker,
        'fallback_cb' => '')
        );
        $menu = str_replace("\n", "", $menu);
        $menu = str_replace("\r", "", $menu);
        echo $menu;
        }

function mf_mobile_menu() {
        $menu = wp_nav_menu(
        array(
        'theme_location' => 'main-menu',
        'echo' => 0,
        'menu_class' => 'menu',
        'menu_id'        => 'mob-header-menu',
        'link_before'    => '<span class="mi"></span><span class="txt">',
        'link_after'     => '</span><span class="di icon-arrow-down9"></span>',
        'container' => 'nav',
        'container_class' => 'mob-menu nz-clearfix',
        'walker' => new nz_scm_walker_mobile,
        'fallback_cb' => '')
        );
        $menu = str_replace("\n", "", $menu);
        $menu = str_replace("\r", "", $menu);
        echo $menu;
        }








// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
unset( $enqueue_styles['woocommerce-general'] );    // Remove the gloss
unset( $enqueue_styles['woocommerce-layout'] );     // Remove the layout
unset( $enqueue_styles['woocommerce-smallscreen'] );    // Remove the smallscreen optimisation
return $enqueue_styles;
}
// Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_false' );
function mf_footer_menu() {
$menu = wp_nav_menu(
array(
'theme_location' => 'footer-menu',
'echo' => 0,
'menu_class' => 'c-menu nav',
'container_id' => '',
'fallback_cb' => '')
);
$menu = str_replace("\n", "", $menu);
$menu = str_replace("\r", "", $menu);
echo $menu;
}
function tp_remove_metabox_from_page_types() {
if( is_admin() && current_user_can('manage_options') ) {
$args = array(
'public'   => true,
'name'     => 'page',
);
$output = 'names'; // names or objects, note names is the default
$operator = 'and'; // 'and' or 'or'
$post_types = get_post_types( $args, $output, $operator ); 
foreach ( $post_types  as $post_type ) {
remove_meta_box('eg-meta-box', $post_type, 'normal');
remove_meta_box('mymetabox_revslider_0', $post_type, 'normal');
}
}
}
add_action('add_meta_boxes', 'tp_remove_metabox_from_page_types', 999);
function tp_remove_metabox_from_post_types() {
if( is_admin() && current_user_can('manage_options') ) {
$args = array(
'public'   => true,
'name'     => 'post',
);
$output = 'names'; // names or objects, note names is the default
$operator = 'and'; // 'and' or 'or'
$post_types = get_post_types( $args, $output, $operator ); 
foreach ( $post_types  as $post_type ) {
remove_meta_box('eg-meta-box', $post_type, 'normal');
remove_meta_box('mymetabox_revslider_0', $post_type, 'normal');
}
}
}
add_action('add_meta_boxes', 'tp_remove_metabox_from_post_types', 999);

function mf_global_variables(){
        global $mf_options, $woocommerce, $post, $product,$wp_query, $query_string;
    }
function mf_substring(){
$excerpt = get_the_content();
$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 200);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
return $excerpt;
}



//Social Media
function mf_social_media() {
global $mf_options;
$facebook = $mf_options['soc_face'];
$twitter = $mf_options['soc_twitter'];
$google = $mf_options['soc_goplus'];
$instagram = $mf_options['soc_instagram'];
$linkedin = $mf_options['soc_linkedin'];
$pinterest = $mf_options['soc_pinterest'];
$youtube= $mf_options['soc_youtube'];


if ($facebook != '') { ?>
<a href="<?php echo esc_url($facebook); ?>" target="_blank">
  <i class="fa fa-facebook">
  </i>
</a>
<?php }else {};?>
<?php if ($twitter != '') { ?>
<a href="<?php echo esc_url($twitter); ?>" target="_blank">
  <i class="fa fa-twitter">
  </i>
</a>
<?php }else {};?>
<?php if ($google != '') { ?>
<a href="<?php echo esc_url($google); ?>" target="_blank">
  <i class="fa fa-google-plus">
  </i>
</a>
<?php }else {};?>
<?php if ($instagram != '') { ?>
<a href="<?php echo esc_url($instagram); ?>" target="_blank">
  <i class="fa fa-instagram">
  </i>
</a>
<?php }else {};?>
<?php if ($linkedin != '') { ?>
<a href="<?php echo esc_url($linkedin); ?>" target="_blank">
  <i class="fa fa-linkedin">
  </i>
</a>
<?php }else {};?>
<?php if ($pinterest != '') { ?>
<a href="<?php echo esc_url($pinterest); ?>" target="_blank">
  <i class="fa fa-pinterest">
  </i>
</a>
<?php }else {};?>
<?php if ($youtube != '') { ?>
<a href="<?php echo esc_url($youtube); ?>" target="_blank">
  <i class="fa fa-youtube">
  </i>
</a>
<?php }else {};?>
<?php } ?>