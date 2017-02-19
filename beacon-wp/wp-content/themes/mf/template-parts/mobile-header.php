<?php
global $mf_options;

if (isset($mf_options['mobile-logo']['url'])) {     $mlogo = $mf_options['mobile-logo']['url'];    }else{     $mlogo = esc_url_raw( get_template_directory_uri().'/assets/img/mf.png'); ;}
$texttel = $mf_options['text-col-telephone'];
$telephone = $mf_options['text-telephone'];
$textemail = $mf_options['text-col-mail'];
$email = $mf_options['text-mail'];

?>

        <header class="header mob-header cart-true nz-clearfix">
                <div class="mob-header-top nz-clearfix">
                    <div class="container">
                        <div class="logo logo-mob">
                                <img src="<?php echo esc_attr($mlogo); ?>" alt="">
                        </div>

                        <span class="mob-menu-toggle"></span>
                    </div>
                </div>
            </header>

            <div class="mob-header-content nz-clearfix">

                <span class="mob-menu-toggle2"></span>
                <div class="custom-scroll-bar">

                    <?php mf_mobile_menu() ?>

                 

                    <div class="slogan nz-clearfix">
                        <div style="color:#999999;">
                            <div class="nz-bar"><span class="nz-icon none small icon-phone animate-false"></span><span class="header-top-label"><?php echo esc_attr($texttel); ?>: <?php echo esc_attr($telephone); ?></span></div>
                            <div class="nz-bar"><span class="nz-icon none small icon-envelope animate-false"></span><?php echo esc_attr($email); ?></div>
                        </div>
                    </div>

                    

                    <div class="search nz-clearfix">
                        <?php get_search_form(); ?>
                    </div>

                </div>
            </div>
            <div class="mob-overlay">&nbsp;</div>

