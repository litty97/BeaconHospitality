<?php
/**
* Mf Theme functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Mf Theme
*/
if ( ! function_exists( 'mf_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/
function mf_setup() {
/*
* Make theme available for translation.
* Translations can be filed in the /languages/ directory.
* If you're building a theme based on Mf Theme, use a find and replace
* to change 'mf' to the name of your theme in all the template files.
*/
load_theme_textdomain( 'mf', get_template_directory() . '/languages' );
// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );
// Tell the TinyMCE editor to use a custom stylesheet
add_editor_style('assets/css/editor-style.css');
// Set up the WordPress core custom background feature.
add_theme_support( 'custom-background', apply_filters( 'mf_custom_background_args', array(
'default-color' => 'ffffff',
'default-image' => '',
) ) );
// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );
/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/
add_theme_support( 'title-tag' );
/* Call Page and Post Metaboxes */


function removePanelCSS() {
  wp_dequeue_style( 'redux-admin-css' );
}
// This example assumes your opt_name is set to redux_demo, replace with your opt_name value
add_action( 'redux/page/mf_options/enqueue', 'removePanelCSS' );
function addAndOverridePanelCSS() {
wp_register_style( 'redux-custom-css', get_template_directory_uri() . '/inc/framework/css/redux-custom.css', array(), time(), 'all' );
wp_enqueue_style('redux-custom-css');

}
// This example assumes your opt_name is set to redux_demo, replace with your opt_name value
add_action('redux/page/mf_options/enqueue', 'addAndOverridePanelCSS', 2);




require_once get_template_directory() . '/inc/framework/barebones-config.php';
require get_template_directory() . '/inc/framework/config.php' ;
require get_template_directory() . '/inc/framework/loader.php' ;
/* #Page Navi */
function mf_archive_navi($pages = '', $range = 3)
{
$showitems = ($range * 2)+1;
global $paged;
if(empty($paged)) $paged = 1;
if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}
if(1 != $pages)
{
echo "<div class='wp-pagenavi'>";
echo "<span>".$paged."/".$pages."</span>";
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".esc_url(get_pagenum_link(1))."'>First</a>";
if($paged > 1 && $showitems < $pages) echo "<a href='".esc_url(get_pagenum_link($paged - 1))."'>&laquo;</a>";
for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".esc_url(get_pagenum_link($i))."' class='inactive' >".$i."</a>";
}
}
if ($paged < $pages && $showitems < $pages) echo "<a href='".esc_url(get_pagenum_link($paged + 1))."'>&raquo;</a>";
if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".esc_url(get_pagenum_link($pages))."'>Last</a>";
echo "</div>";
}
}
/*
* Enable support for Post Thumbnails on posts and pages.
*
* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'mf-category-hrz', 270, 190, true );
add_image_size( 'mf-blog-full', 845, 510, true );
set_post_thumbnail_size( 845, 510, true );
// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
'main-menu' => esc_html__( 'Main Menu', 'mf' ),
'footer-menu' => esc_html__( 'Footer Menu', 'mf' ),
) );
/*
* Switch default core markup for search form, comment form, and comments
* to output valid HTML5.
*/
add_theme_support( 'html5', array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
) );
/**
* Starts the list before the elements are added.
*
* Adds classes to the unordered list sub-menus.
*
* @param string $output Passed by reference. Used to append additional content.
* @param int    $depth  Depth of menu item. Used for padding.
* @param array  $args   An array of arguments. @see wp_nav_menu()
*/

}
endif; // mf_setup
add_action( 'after_setup_theme', 'mf_setup' );
/**
* Enqueue scripts and styles.
*
* @since Mf Theme 1.0.0
*/
function mf_scripts() {
// THEME STYLES
// Load our main stylesheet.
$css_path =  get_template_directory_uri() . '/assets/css/mf-style.css';
wp_enqueue_style( 'mf-style', $css_path, array(), '1.0' );
//load font awesome
wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/includes/font-awesome/css/font-awesome.min.css', array(), '4.5.0' );
//load header im
wp_enqueue_style( 'header-im', get_template_directory_uri() . '/assets/css/header-im.css', array(), '1.0.0' );
// load bootstrap style
wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/includes/bootstrap/css/bootstrap.min.css', array(), '3.3.6' );
// load custom style
wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/mf-custom-style.css', array(), '1.0.0' );

// load mf options style
wp_enqueue_style( 'comment-style', get_template_directory_uri() . '/assets/css/mf-options.css', array(), '1.0.0' );
wp_enqueue_style( 'mf-woocommerce', get_template_directory_uri() . '/assets/css/mf-woocommerce.css', array(), '1.0.0' );
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
// THEME SCRIPTS
wp_enqueue_script( 'navigation.js', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
wp_enqueue_script( 'boostrap.js', get_template_directory_uri() . '/includes/bootstrap/js/bootstrap.min.js', array(), '20130117', true );
wp_enqueue_script( 'mf-app', get_template_directory_uri() . '/assets/js/mf-app.js', array(), '20130118', true );
wp_enqueue_script( 'controller.js', get_template_directory_uri() . '/assets/js/controller.js', array(), '20120207', true );
wp_enqueue_script( 'smartmenus.js', get_template_directory_uri() . '/includes/smartmenus/jquery.smartmenus.js', array(), '20130121', true );
wp_localize_script( 'mf-script', 'mf_ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
}
add_action( 'wp_enqueue_scripts', 'mf_scripts' );
// Woocommerce
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
function my_theme_wrapper_start() {
echo '<section id="main">';
}
function my_theme_wrapper_end() {
echo '</section>';
}
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}
/**
* Set the content width in pixels, based on the theme's design and stylesheet.
*
* Priority 0 to make it available to lower priority callbacks.
*
* @global int $content_width
*/



 function mf_admin_scripts_styles() {
        wp_enqueue_script( 'mf-admin', get_template_directory_uri() . '/includes/custom-menu/js/admin-scripts.js', array('jquery'), '', true);
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker' );
        wp_enqueue_script( 'jquery-ui-spinner' );
        wp_enqueue_script( 'jquery-ui-sortable' );
        wp_enqueue_script('jquery-ui-datepicker');
        wp_enqueue_style( 'thickbox' );
        wp_enqueue_script( 'thickbox' );
        wp_enqueue_media();

        return;
    }
    add_action('admin_enqueue_scripts','mf_admin_scripts_styles');


function mf_content_width() {
$GLOBALS['content_width'] = apply_filters( 'mf_content_width', 640 );
}
add_action( 'after_setup_theme', 'mf_content_width', 0 );
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function mf_widgets_init_first() {
register_sidebar( array(
'name'          => esc_html__( 'Default Sidebar', 'mf' ),
'id'            => 'default_sidebar',
'before_widget' => '<aside id="%1$s" class="c-layout-sidebars-1"><div class="c-area widget %2$s">',
'after_widget'  => '</div></aside>',
'before_title'  => '<h5>',
'after_title'   => '</h5>',
) );
register_sidebar( array(
'name'          => esc_html__( 'Product Category Sidebar', 'mf' ),
'id'            => 'product_category_sidebar',
'before_widget' => '<aside id="%1$s" class="c-layout-sidebars-1"><div class="c-area widget %2$s">',
'after_widget'  => '</div></aside>',
'before_title'  => '<h5>',
'after_title'   => '</h5>',
) );
register_sidebar( array(
'name'          => esc_html__( 'Product Detail Sidebar', 'mf' ),
'id'            => 'product_detail_sidebar',
'before_widget' => '<aside id="%1$s" class="c-layout-sidebars-1"><div class="c-area widget %2$s">',
'after_widget'  => '</div></aside>',
'before_title'  => '<h5>',
'after_title'   => '</h5>',
) );
register_sidebar( array(
'name'          => esc_html__( 'Blog Sidebar', 'mf' ),
'id'            => 'blog_sidebar',
'before_widget' => '<aside id="%1$s" class="c-layout-sidebars-1"><div class="c-area widget %2$s">',
'after_widget'  => '</div></aside>',
'before_title'  => '<h5>',
'after_title'   => '</h5>',
) );
register_sidebar( array(
'name'          => esc_html__( 'Footer 1', 'mf' ),
'id'            => 'footer_1',
'before_widget' => '<aside id="%1$s">',
'after_widget'  => '</aside>',
'before_title'  => '<div class="c-caption">',
'after_title'   => '</div>',
) );
register_sidebar( array(
'name'          => esc_html__( 'Footer 2', 'mf' ),
'id'            => 'footer_2',
'before_widget' => '<aside id="%1$s">',
'after_widget'  => '</aside>',
'before_title'  => '<div class="c-caption">',
'after_title'   => '</div>',
) );
register_sidebar( array(
'name'          => esc_html__( 'Footer 3', 'mf' ),
'id'            => 'footer_3',
'before_widget' => '<aside id="%1$s">',
'after_widget'  => '</aside>',
'before_title'  => '<div class="c-caption">',
'after_title'   => '</div>',
) );
register_sidebar( array(
'name'          => esc_html__( 'Footer 4', 'mf' ),
'id'            => 'footer_4',
'before_widget' => '<aside id="%1$s">',
'after_widget'  => '</aside>',
'before_title'  => '<div class="c-caption">',
'after_title'   => '</div>',
) );
}
add_action( 'widgets_init', 'mf_widgets_init_first' );
/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/inc/template-tags.php';
/**
* Custom breadcrumbs
*/
require get_template_directory() . '/inc/breadcrumbs.php';
/**
* Get Theme Functions
*/
require get_template_directory() . '/inc/mf-functions.php';

require get_template_directory() . '/includes/custom-menu/custom-menu.php';


require get_template_directory() . '/inc/plugins/tgm-init.php';

update_option('ts_vcsc_extend_settings_extended', 1);