<?php
/**
* The sidebar containing the main widget area.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Mf Theme
*/
global $mf_options;
if ( ! is_active_sidebar( 'default_sidebar' ) ) {
return;
}
?>
<?php 
if($mf_options['mf_sidebar'] == 'None'){
$mfside = 'default_sidebar';
}else {
$mfside = $mf_options['mf_sidebar'];
}
?>
<div id="secondary" class="widget-area" role="complementary">
  <?php dynamic_sidebar( $mfside ); ?>
</div>