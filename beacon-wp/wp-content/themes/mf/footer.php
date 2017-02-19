<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Mf Theme
*/
global $mf_options;
?>

<?php $dropdown_effect = $mf_options['footer-columns']; ?>

<!-- BEGIN C-LAYOUT-FOOTER -->
<footer class="c-layout-footer c-margin-t-30">
  <div class="c-prepfooter">
    <div class="container">
      <div class="row">
     <?php if ($dropdown_effect == '1') { ?>
        <div class="col-md-12 col-sm-6">
          <?php dynamic_sidebar( 'footer_1' ); ?>
        </div>
      <?php }elseif ($dropdown_effect == '2') {?>
        <div class="col-md-6 col-sm-6">
          <?php dynamic_sidebar( 'footer_1' ); ?>
        </div>
        <div class="col-md-6 col-sm-6">
          <?php dynamic_sidebar( 'footer_2' ); ?>
        </div>
        
      <?php }elseif ($dropdown_effect == '3') {?>
        <div class="col-md-4 col-sm-6">
          <?php dynamic_sidebar( 'footer_1' ); ?>
        </div>
        <div class="col-md-4 col-sm-6">
          <?php dynamic_sidebar( 'footer_2' ); ?>
        </div>
        <div class="col-md-4 col-sm-6">
          <?php dynamic_sidebar( 'footer_3' ); ?>
        </div>
      <?php }else { ?>
        <div class="col-md-3 col-sm-6">
          <?php dynamic_sidebar( 'footer_1' ); ?>
        </div>
        <div class="col-md-3 col-sm-6">
          <?php dynamic_sidebar( 'footer_2' ); ?>
        </div>
        <div class="col-md-3 col-sm-6">
          <?php dynamic_sidebar( 'footer_3' ); ?>
        </div>
        <div class="col-md-3 col-sm-6">
          <?php dynamic_sidebar( 'footer_4' ); ?>
        </div>
      <?php } ?>

      </div>
    </div>
  </div>
  <!-- /.c-prepfooter -->
  <div class="c-postfooter">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div>
           <?php $footer_text = $mf_options['text-copyright']; ?>
             <?php echo esc_attr($footer_text); ?>
          </div>
        </div>
        <div class="col-md-8">
          <?php mf_footer_menu() ?>
        </div>
      </div>
    </div>
  </div>
  <!-- /.c-postfooter -->
</footer>
<!-- END C-LAYOUT-FOOTER -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<!-- END GLOBAL MANDATORY SCRIPTS -->
</div>
</div>
<?php
echo isset( $mf_options['mf-before-body'] ) && $mf_options['mf-before-body'] !== "" ? $mf_options['mf-before-body'] : '';
?>
<?php wp_footer(); ?>
</body>
</html>