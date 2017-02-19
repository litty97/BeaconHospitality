<?php
global $mf_options;

if (isset($mf_options['main-logo']['url'])) {     $logo = $mf_options['main-logo']['url'];    }else{     $logo = esc_url_raw( get_template_directory_uri().'/assets/img/mf.png'); ;}
$texttel = $mf_options['text-col-telephone'];
$telephone = $mf_options['text-telephone'];
$textemail = $mf_options['text-col-mail'];
$email = $mf_options['text-mail'];
$dropdown_effect = $mf_options['dropdown-effect'];
$searchbox = $mf_options['search-box'];

if ($mf_options['sticky_header_1'] == '1') {
$sticky_mf = 'header_mf_sticky';
}else {$sticky_mf = 'header_no_sticky';} 
?>
<?php get_template_part( 'template-parts/mobile-header' ); ?>
<?php if ($mf_options['header-version'] == '') { ?>
<header class="header desk version1 brbt  iversion-light effect-underline subeffect-<?php echo esc_attr($dropdown_effect); ?>  fiversion-dark <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-top">
      <div class="container nz-clearfix">
        <div class="slogan nz-clearfix">
          <div class="social-links  header-social-links nz-clearfix">
            <?php mf_social_media() ?>
          </div>
        </div>
        <?php if ($searchbox == '1') { ?>
        <div class="search-toggle search-v2">
        </div>
        <div class="search" style="top: 30px;">
         <?php get_search_form(); ?>
        </div>
         <?php }else {} ?>
      </div>
    </div>
    <div class="header-body">
      <div class="container nz-clearfix">
        <div class="logo logo-desk">
          <a href="<?php echo esc_attr(site_url()); ?>">
            <img src="<?php echo esc_attr($logo); ?>" alt="">
          </a>
        </div>
         <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
       <?php mf_main_menu() ?>
      </div>
    </div>
  </div>
</header>

<?php } ?>
<?php if ($mf_options['header-version'] == 1) { ?>

<header class="header desk brbt version1 iversion-dark effect-underline subeffect-<?php echo esc_attr($dropdown_effect); ?>  fiversion-dark <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-body">
      <div class="container nz-clearfix">
        <div class="logo logo-desk">
          <a href="<?php echo esc_attr(site_url()); ?>">
            <img src="<?php echo esc_attr($logo); ?>" alt="">
          </a>
        </div>
        <?php if ($searchbox == '1') { ?>
        <div class="search-toggle">
        </div>
        <div class="search">
           <?php get_search_form(); ?>
        </div>
        <?php }else {} ?>
         <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
         <?php mf_main_menu() ?>

  </div>
  </div>
</div>
</header>

<?php } ?>

<?php if ($mf_options['header-version'] == 2) { ?>
<header class="header desk version1 brbt  iversion-light effect-underline subeffect-<?php echo esc_attr($dropdown_effect); ?>  fiversion-dark <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-top">
      <div class="container nz-clearfix">
        <div class="slogan nz-clearfix">
          <div class="social-links  header-social-links nz-clearfix">
            <?php mf_social_media() ?>
          </div>
        </div>
        <?php if ($searchbox == '1') { ?>
        <div class="search-toggle search-v2">
        </div>
        <div class="search" style="top: 30px;">
         <?php get_search_form(); ?>
        </div>
         <?php }else {} ?>
      </div>
    </div>
    <div class="header-body">
      <div class="container nz-clearfix">
        <div class="logo logo-desk">
          <a href="<?php echo esc_attr(site_url()); ?>">
            <img src="<?php echo esc_attr($logo); ?>" alt="">
          </a>
        </div>
         <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
       <?php mf_main_menu() ?>
      </div>
    </div>
  </div>
</header>

<?php } ?>

<?php if ($mf_options['header-version'] == 3) { ?>
<header class="header desk version2 brbt header3  iversion-dark effect-overline subeffect-<?php echo esc_attr($dropdown_effect); ?> <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-body">
      <div class="container nz-clearfix">
       <div class="search-toggle mt-25">
        </div>
        <?php if ($searchbox == '1') { ?>
        <div class="search mt-25"  style="top: 40px !important;">
           <?php get_search_form(); ?>
        </div>
        <?php }else {} ?>
       <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
        <div class="logo logo-desk">
          <a href="<?php echo esc_attr(site_url()); ?>">
            <img  src="<?php echo esc_attr($logo); ?>" alt="">
          </a>
        </div>
        <div class="header-top-v3">

          <ul class="c-header-info">
            <li> 
              <span>
                <strong>
                  <?php echo esc_attr($textemail); ?>:
                </strong>
              </span> 
              <span>
                <?php echo esc_attr($email); ?>
              </span> 
            </li>
            <li> 
              <span>
                <strong>
                  <?php echo esc_attr($texttel); ?>:
                </strong>
              </span> 
              <span>
                 <?php echo esc_attr($telephone); ?>
              </span> 
            </li>
          </ul>
        </div>
      </div>

     <?php mf_main_menu() ?>
    </div>
  </div>
</header>

<?php } ?>

<?php if ($mf_options['header-version'] == 4) { ?>
<header class="header8 desk header4 brbt  version1 br-top3 iversion-dark effect-fill subeffect-<?php echo esc_attr($dropdown_effect); ?> fiversion-light <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-body">
      <div class="container nz-clearfix">
        <div class="logo logo-desk">
          <a href="<?php echo esc_attr(site_url()); ?>">
            <img src="<?php echo esc_attr($logo); ?>" alt="">
          </a>
        </div>
         <?php if ($searchbox == '1') { ?>
        <div class="search-toggle">
        </div>
        <div class="search">
           <?php get_search_form(); ?>
        </div>
         <?php }else {} ?>
         <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
      <?php mf_main_menu() ?>
      </div>
    </div>
  </div>
</header>

<?php } ?>

<?php if ($mf_options['header-version'] == 5) { ?>
<header class="header desk version2 brbt header5  iversion-dark effect-overline subeffect-<?php echo esc_attr($dropdown_effect); ?> <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-body">
      <div class="container nz-clearfix">
        <div class="col-sm-4 no-padding-left">
          <div class="left-header-col">
            <p> 
              <span>
                <strong>
                 <?php echo esc_attr($texttel); ?>:
                </strong>
              </span> 
              <span>
                <?php echo esc_attr($telephone); ?>
              </span> 
            </p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="logo-c logo-desk">
            <a href="<?php echo esc_attr(site_url()); ?>">
              <img  src="<?php echo esc_attr($logo); ?>" alt="">
            </a>
          </div>
        </div>
        <div class="col-sm-4 no-padding-right">
         <?php if ($searchbox == '1') { ?>
         <div class="search-toggle mt-25">
        </div>
        <div class="search mt-25"  style="top: 40px !important;">
           <?php get_search_form(); ?>
        </div>
         <?php }else {} ?>
 <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart-v5">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
          <div class="slogan nz-clearfix right-header-col">

            <div class="social-links-light header-social-links nz-clearfix">

             <?php mf_social_media() ?>
            </div>
          </div>

        </div>
      </div>

      <?php mf_main_menu() ?>
    </div>
  </div>
</header>

<?php } ?>

<?php if ($mf_options['header-version'] == 6) { ?>
<header class="header desk version2 brbt  v6-ht iversion-dark effect-overline subeffect-<?php echo esc_attr($dropdown_effect); ?> <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-top-light">
      <div class="container nz-clearfix">

       <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart-v6">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
        <div class="slogan right nz-clearfix">
          <div class="social-links social-links-light header-social-links nz-clearfix">
            <?php mf_social_media() ?>
          </div>
        </div>
      </div>
    </div>
    <div class="header-body">
      <div class="container nz-clearfix">
        <div class="logo logo-desk">
          <a href="<?php echo esc_attr(site_url()); ?>">
            <img  src="<?php echo esc_attr($logo); ?>" alt="">
          </a>
        </div>
        <?php if ($searchbox == '1') { ?>
          <div class="search-toggle mt-25">
        </div>
        <div class="search mt-25"  style="top: 40px !important;">
           <?php get_search_form(); ?>
        </div>
        <?php }else {} ?>
        <div class="header-top-v3">

          <ul class="c-header-info">
            <li> 
              <span>
                <strong>
                  <?php echo esc_attr($textemail); ?>:
                </strong>
              </span> 
              <span>
                <?php echo esc_attr($email); ?>
              </span> 
            </li>
            <li> 
              <span>
                <strong>
                  <?php echo esc_attr($texttel); ?>:
                </strong>
              </span> 
              <span>
               <?php echo esc_attr($telephone); ?>
              </span> 
            </li>
          </ul>
        </div>
      </div>
      <?php mf_main_menu() ?>
    </div>
  </div>
</header>

<?php } ?>

<?php if ($mf_options['header-version'] == 7) { ?>
<header class="header desk version2 headerv7 header3 brbt  v7-top iversion-dark effect-fill subeffect-<?php echo esc_attr($dropdown_effect); ?> <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-body">
      <div class="container nz-clearfix">
        <div class="logo logo-desk">
          <a href="<?php echo esc_attr(site_url()); ?>">
            <img src="<?php echo esc_attr($logo); ?>" alt="">
          </a>
        </div>
        <?php if ($searchbox == '1') { ?>
        <div class="search-toggle mt-25">
        </div>
        <div class="search mt-25"  style="top: 40px !important;">
           <?php get_search_form(); ?>
        </div>
        <?php }else {} ?>
         <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
      </div>

      <?php mf_main_menu() ?>
    </div>
  </div>
</header>

<?php } ?>

<?php if ($mf_options['header-version'] == 8) { ?>
<header class="header desk version2 v6-ht brbt  iversion-dark effect-overline subeffect-<?php echo esc_attr($dropdown_effect); ?> fiversion-dark <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-top8">
      <div class="col-lg-4 col-md-4 right-pie">
      </div>
      <div class="container nz-clearfix">
        <div class="header-top-v8 c-header-info pull-right">
          <ul class="c-header-info">
            <li> 
              <span>
                <strong>
                   <?php echo esc_attr($textemail); ?>:
                </strong>
              </span> 
              <span>
                 <?php echo esc_attr($email); ?>
              </span> 
            </li>
            <li> 
              <span>
                <strong>
                  <?php echo esc_attr($texttel); ?>:
                </strong>
              </span> 
              <span>
               <?php echo esc_attr($telephone); ?>
              </span> 
            </li>
          </ul>
          <!-- /.c-header-info -->
        </div>
      </div>
    </div>
    <div class="header-body">
      <div class="container nz-clearfix">
        <div class="logo logo-desk">
          <a href="<?php echo esc_attr(site_url()); ?>">
            <img src="<?php echo esc_attr($logo); ?>" alt="">
          </a>
        </div>
        <?php if ($searchbox == '1') { ?>
        <div class="search-toggle mt-25">
        </div>
        <div class="search mt-25"  style="top: 40px !important;">
           <?php get_search_form(); ?>
        </div>
        <?php }else {} ?>
         <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
      </div>
    <?php mf_main_menu() ?>
    </div>
  </div>
</header>

<?php } ?>

<?php if ($mf_options['header-version'] == 9) { ?>
<header class="header desk version1 brbt iversion-dark effect-underline subeffect-<?php echo esc_attr($dropdown_effect); ?> <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-top-light">
      <div class="container nz-clearfix">
        <div class="slogan right nz-clearfix">
          <div class="social-links social-links-light header-social-links nz-clearfix">
            <?php mf_social_media() ?>
          </div>
        </div>
      </div>
    </div>
    <div class="header-body">
      <div class="container nz-clearfix">
        <div class="logo logo-desk">
          <a href="<?php echo esc_attr(site_url()); ?>">
            <img src="<?php echo esc_attr($logo); ?>" alt="">
          </a>
        </div>
        <?php if ($searchbox == '1') { ?>
        <div class="search-toggle">
        </div>
        <div class="search">
           <?php get_search_form(); ?>
        </div>
        <?php }else {} ?>
         <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
      <?php mf_main_menu() ?>
      </div>
    </div>
  </div>
</header>

<?php } ?>

<?php if ($mf_options['header-version'] == 10) { ?>
<header class="header desk version2 v8-ht brbt  br-top3 iversion-light effect-overline subeffect-<?php echo esc_attr($dropdown_effect); ?> <?php echo esc_attr($sticky_mf); ?>">
  <div class="header-content">
    <div class="header-top-light">
      <div class="container nz-clearfix">
      <?php if ($searchbox == '1') { ?>
        <div class="search-toggle search-v2">
        </div>
        <div class="search" style="top: 30px !important;">
           <?php get_search_form(); ?>
        </div>
         <?php }else {} ?>
        <div class="slogan right nz-clearfix">
          <div class="social-links social-links-light header-social-links nz-clearfix">
           <?php mf_social_media() ?>
          </div>
        </div>
      </div>
    </div>
    <div class="header-body">
      <div class="container nz-clearfix">
        <div class="logo logo-desk">
          <a href="<?php echo esc_attr(site_url()); ?>">
            <img  src="<?php echo esc_attr($logo); ?>" alt="">
          </a>
        </div>
         <?php $header_cart = $mf_options['header_cart'];
        if ($header_cart == '1') { ?>
                <div class="mf-woo-mini-cart">
                  <?php get_template_part( 'woocommerce/cart/mini-cart-button' ); ?>
                </div>
        <?php }else {} ?>
        <div class="header-top-v3">
          <ul class="c-header-info">
            <li> 
              <span>
                <strong>
                  <?php echo esc_attr($textemail); ?>:
                </strong>
              </span> 
              <span>
                <?php echo esc_attr($email); ?>
              </span> 
            </li>
            <li> 
              <span>
                <strong>
                 <?php echo esc_attr($texttel); ?>:
                </strong>
              </span> 
              <span>
               <?php echo esc_attr($telephone); ?>
              </span> 
            </li>
          </ul>
          <!-- /.c-header-info -->
        </div>
      </div>
    <?php mf_main_menu() ?>
    </div>
  </div>
</header>
<?php } ?>