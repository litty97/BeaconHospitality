<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head>
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Mf Theme
*/
?>
<?php global $mf_options; ?>
<!DOCTYPE html>
<html 
      <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php
if (isset($mf_options['favicon']['url'])) {     $favicon = $mf_options['favicon']['url'];    }else{     $favicon = 'https://s.w.org/favicon.ico' ;}
if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
echo ' <link rel="icon" href="'. esc_url($favicon) .'" />';
}
?>
  <!-- Custom Css -->
  <style type="text/css">
    <?php echo esc_attr($mf_options['opt-ace-editor-css']);
    ?>
  </style>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	echo isset( $mf_options['mf-before-head'] ) && $mf_options['mf-before-head'] !== "" ? $mf_options['mf-before-head'] : '';
	?>
       <!-- general wrap start -->
    <div id="gen-wrap">
        <!-- wrap start -->
        <div id="wrap" class="nz-wide">
<?php get_template_part( 'template-parts/header' ); ?>