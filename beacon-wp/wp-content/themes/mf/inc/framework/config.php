<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = "mf_options";





if (!function_exists("redux_add_metaboxes")):
    function redux_add_metaboxes($metaboxes)
    {
        
        
        
        // PAGE FIELDS

        // PAGE CENTER OPTIONS ----------------------------------------------------------------------------------------------------------------------------


        $boxSections[] = array(
            'title' => esc_html__('Page Title Bar', 'mf'),
            //'desc' => esc_html__('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'mf'),
            'icon' => 'el-icon-cogs',
            'fields' => array(
                array(
                'id'       => 'page-title-custom-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Page Title Bar Custom Text', 'mf' ),
                'subtitle' => esc_html__( 'Insert custom text for the page title bar.', 'mf' ),
            ),
                array(
                    'id' => 'switch-parent',
                    'type' => 'switch',
                    'title' => esc_html__('Show Page Title Bar ', 'mf'),
                    'subtitle' => esc_html__('', 'mf'),
                    'default' => 1,
                    'on' => 'Enabled',
                    'off' => 'Disabled'
                ),
                array(
                    'id' => 'breadcrumbs-parent',
                    'type' => 'switch',
                    'title' => esc_html__('Show Breadcrumbs ', 'mf'),
                    'subtitle' => esc_html__('', 'mf'),
                    'default' => 1,
                    'on' => 'Enabled',
                    'off' => 'Disabled'
                ),
                array(
                    'id' => 'page-header-bg',
                    'type' => 'color',
                    'title' => esc_html__('Page Title Bar Backgorund', 'mf'),
                    'subtitle' => esc_html__('', 'mf'),
                    'required' => array(
                        'switch-parent',
                        '=',
                        '1'
                    ),
                    'default' => '#fcfcfc',
                    'mode' => 'background'
                ),
                array(
                    'id' => 'page-header-text',
                    'type' => 'color',
                    'title' => esc_html__('Page Title Bar Text Color', 'mf'),
                    'subtitle' => esc_html__('', 'mf'),
                    'required' => array(
                        'switch-parent',
                        '=',
                        '1'
                    ),
                    'default' => '#727070',
                    'mode' => 'color'
                ),
                
                
            )
        );

          $boxSections[] = array(
            'title' => esc_html__('Page Settings', 'mf'),
            //'desc' => esc_html__('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'mf'),
            'icon' => 'el-icon-cogs',
            'fields' => array(
               array(
                'id'       => 'page-padding',
                'type'     => 'spacing',
                // An array of CSS selectors to apply this font style to
                'mode'     => 'padding',
                'all'      => false,
                'title'    => __( 'Page Padding', 'mf' ),
                'subtitle' => __( 'Ex: 20px. Leave empty for default value.', 'mf' ),
                'default'  => array(
                    'padding-top'    => '0px',
                    'padding-right'  => '0px',
                    'padding-bottom' => '0px',
                    'padding-left'   => '0px'
                )
            ),

            )
        );
        
        $boxSections[] = array(
            'title' => esc_html__('Blog', 'mf'),
            'icon' => 'el-icon-cogs',
            'post_types' => array(
                'page'
            ),
            'fields' => array(
                array(
                    'id' => 'cat_page',
                    'type' => 'select',
                    'data' => 'categories',
                    'title' => esc_html__('Select Show Categories', 'mf'),
                    
                    'multi' => true,
                    'desc' => esc_html__('', 'mf'),
                    'subtitle' => esc_html__('You can make multiple selections.', 'mf')
                ),
                
            )
        );
        
        
        $metaboxes = array(); 
        $metaboxes[]   = array(
            'id' => 'demo-layout',
            'title' => esc_html__('Page Options', 'mf'),
            'post_types' => array(
                'page'
            ),
            //'page_template' => array('page-test.php'),
            //'post_format' => array('image'),
            'position' => 'normal', // normal, advanced, side
            'priority' => 'high', // high, core, default, low
            //'sidebar' => false, // enable/disable the sidebar in the normal/advanced positions
            'sections' => $boxSections
        );

        // PAGE CENTER OPTIONS END ----------------------------------------------------------------------------------------------------------------------------


        // PAGE SIDEBAR OPTIONS ----------------------------------------------------------------------------------------------------------------------------

        $boxSections   = array();
        $boxSections[] = array(
            //'title' => esc_html__('Home Settings', 'mf'),
            //'desc' => esc_html__('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'mf'),
            'icon_class' => 'icon-large',
            'icon' => 'el-icon-cogs',
            'fields' => array(
                array(
                    'title' => esc_html__('Layout', 'mf'),
                    'desc' => esc_html__('Select main content and sidebar arrangement. ', 'mf'),
                    'id' => 'layout',
                    'default' => 0,
                    'type' => 'image_select',
                    'customizer' => array(),
                    'options' => array(
                        0 => ReduxFramework::$_url . 'assets/img/1c.png',
                        1 => ReduxFramework::$_url . 'assets/img/2cr.png',
                        2 => ReduxFramework::$_url . 'assets/img/2cl.png'
                    )
                )
            )
        );
        
        
        
        $metaboxes[] = array(
            'id' => 'demo-layout2',
            //'title' => esc_html__('Cool Options', 'mf'),
            'post_types' => array(
                'page',
                'post',
                'acme_product'
            ),
            //'page_template' => array('page-test.php'),
            //'post_format' => array('image'),
            'position' => 'side', // normal, advanced, side
            'priority' => 'high', // high, core, default, low
            'sections' => $boxSections
        );

        // PAGE SIDEBAR OPTIONS END ----------------------------------------------------------------------------------------------------------------------------


        // PRODUCT SIDEBAR OPTIONS ----------------------------------------------------------------------------------------------------------------------------
        
        $productSections   = array();
        $productSections[] = array(
            'icon_class' => 'icon-large',
            'icon' => 'el-icon-cogs',
            'fields' => array(
                array(
                    'title' => esc_html__('Layout', 'mf'),
                    'desc' => esc_html__('Select main content and sidebar arrangement. ', 'mf'),
                    'id' => 'product_layout',
                    'default' => 1,
                    'type' => 'image_select',
                    'customizer' => array(),
                    'options' => array(
                        0 => ReduxFramework::$_url . 'assets/img/1c.png',
                        1 => ReduxFramework::$_url . 'assets/img/2cl.png'
                    )
                )
            )
        );
        
        
        
        $metaboxes[] = array(
            'id' => 'product_layout',
            //'title' => esc_html__('Cool Options', 'mf'),
            'post_types' => array(
                'product'
            ),
            //'page_template' => array('page-test.php'),
            //'post_format' => array('image'),
            'position' => 'side', // normal, advanced, side
            'priority' => 'high', // high, core, default, low
            'sections' => $productSections
        );

        // PRODUCT SIDEBAR OPTIONS END ----------------------------------------------------------------------------------------------------------------------------

        
        
        // CUSTOM SIDEBAR START ----------------------------------------------------------------------------------------------------------------------------    
        
        $sidebarmeta[] = array(
            //'title'         => esc_html__('Post Settings', 'mf'),
            'icon_class' => 'icon-large',
            'icon' => 'el-icon-website',
            'fields' => array(
                array(
                    'id' => 'mf_sidebar',
                    'title' => esc_html__('Select Sidebar', 'mf'),
                    'desc' => 'Please select the sidebar you would like to display on this page. Note: You must first create the sidebar under Appearance > Widgets.',
                    'type' => 'select',
                    'data' => 'sidebars',
                    'default' => 'default_sidebar'
                )
            )
        );
        
        $metaboxes[] = array(
            'id' => 'demo-layout2222',
            'title' => esc_html__('Sidebar', 'mf'),
            'post_types' => array(
                'page',
                'post',
                'acme_product'
            ),
            //'page_template' => array('page-test.php'),
            //'post_format' => array('image'),
            'position' => 'side', // normal, advanced, side
            'priority' => 'high', // high, core, default, low
            'default' => 'default_sidebar',
            'sections' => $sidebarmeta
        );

        // CUSTOM SIDEBAR END ----------------------------------------------------------------------------------------------------------------------------    
  
    $post_options = array();
     $post_options[] = array(
            'title' => esc_html__('Post Settings', 'mf'),
            //'desc' => esc_html__('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'mf'),
            'icon' => 'el-icon-cogs',
            'fields' => array(
                 array(
                    'id' => 'post-image',
                    'type' => 'switch',
                    'title' => esc_html__('Featured Images ', 'mf'),
                    'subtitle' => esc_html__('', 'mf'),
                    'default' => 2,
                    'on' => 'Enabled',
                    'off' => 'Disabled'
                ),
               array(
                'id'       => 'post-padding',
                'type'     => 'spacing',
                // An array of CSS selectors to apply this font style to
                'mode'     => 'padding',
                'all'      => false,
                'title'    => __( 'Post Padding', 'mf' ),
                'subtitle' => __( 'Ex: 20px. Leave empty for default value.', 'mf' ),
                'default'  => array(
                    'padding-top'    => '0px',
                    'padding-right'  => '0px',
                    'padding-bottom' => '0px',
                    'padding-left'   => '0px'
                )
            ),

            )
        );
    $post_options[] = array(
            'title' => esc_html__('Post Title Bar', 'mf'),
            //'desc' => esc_html__('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'mf'),
            'icon' => 'el-icon-cogs',
            'fields' => array(
                array(
                'id'       => 'post-title-custom-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Post Title Bar Custom Text', 'mf' ),
                'subtitle' => esc_html__( 'Insert custom text for the post title bar.', 'mf' ),
            ),
                array(
                    'id' => 'post-switch-parent',
                    'type' => 'switch',
                    'title' => esc_html__('Show Post Title Bar ', 'mf'),
                    'subtitle' => esc_html__('', 'mf'),
                    'default' => 1,
                    'on' => 'Enabled',
                    'off' => 'Disabled'
                ),
                array(
                    'id' => 'breadcrumbs-post',
                    'type' => 'switch',
                    'title' => esc_html__('Show Breadcrumbs ', 'mf'),
                    'subtitle' => esc_html__('', 'mf'),
                    'default' => 1,
                    'on' => 'Enabled',
                    'off' => 'Disabled'
                ),
                array(
                    'id' => 'post-header-bg',
                    'type' => 'color',
                    'title' => esc_html__('Post Title Bar Backgorund', 'mf'),
                    'subtitle' => esc_html__('', 'mf'),
                    'required' => array(
                        'post-switch-parent',
                        '=',
                        '1'
                    ),
                    'default' => '#fcfcfc',
                    'mode' => 'background'
                ),
                array(
                    'id' => 'post-header-text',
                    'type' => 'color',
                    'title' => esc_html__('Post Title Bar Text Color', 'mf'),
                    'subtitle' => esc_html__('', 'mf'),
                    'required' => array(
                        'post-switch-parent',
                        '=',
                        '1'
                    ),
                    'default' => '#727070',
                    'mode' => 'color'
                ),
                
                
            )
        );

    

    $metaboxes[] = array(
        'id'            => 'post-options',
        'title'         => esc_html__( 'Post Options', 'mf' ),
        'post_types'    => array( 'post', 'demo_metaboxes' ),
        //'page_template' => array('page-test.php'),
        //'post_format' => array('image'),
        'position'      => 'normal', // normal, advanced, side
        'priority'      => 'high', // high, core, default, low
        'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
        'sections'      => $post_options,
    );
        
        // Kind of overkill, but ahh well.  ;)
        //$metaboxes = apply_filters( 'your_custom_redux_metabox_filter_here', $metaboxes );
        
        return $metaboxes;
    }
    add_action('redux/metaboxes/' . $redux_opt_name . '/boxes', 'redux_add_metaboxes');
endif;





// The loader will load all of the extensions automatically based on your $redux_opt_name

require_once get_template_directory() . '/inc/framework/loader.php';


/************************************************************************
* Example functions/filters
*************************************************************************/
if ( !function_exists( 'wbc_after_content_import' ) ) {

    /**
     * Function/action ran after import of content.xml file
     *
     * @param (array) $demo_active_import       Example below
     * [wbc-import-1] => Array
     *      (
     *            [directory] => current demo data folder name
     *            [content_file] => content.xml
     *            [image] => screen-image.png
     *            [theme_options] => theme-options.txt
     *            [widgets] => widgets.json
     *            [imported] => imported
     *        )
     * @param (string) $demo_data_directory_path path to current demo folder being imported.
     *
     */

    function wbc_after_content_import( $demo_active_import , $demo_data_directory_path ) {
        //Do something
    }

    // Uncomment the below
    // add_action( 'wbc_importer_after_content_import', 'wbc_after_content_import', 10, 2 );
}

if ( !function_exists( 'wbc_filter_title' ) ) {

    /**
     * Filter for changing demo title in options panel so it's not folder name.
     *
     * @param [string] $title name of demo data folder
     *
     * @return [string] return title for demo name.
     */

    function wbc_filter_title( $title ) {
        return trim( ucfirst( str_replace( "-", " ", $title ) ) );
    }

    // Uncomment the below
    // add_filter( 'wbc_importer_directory_title', 'wbc_filter_title', 10 );
}

if ( !function_exists( 'wbc_importer_description_text' ) ) {

    /**
     * Filter for changing importer description info in options panel
     * when not setting in Redux config file.
     *
     * @param [string] $title description above demos
     *
     * @return [string] return.
     */

    function wbc_importer_description_text( $description ) {

        $message = '<p>'. esc_html__( 'Best if used on new WordPress install.', 'mf' ) .'</p>';
        $message .= '<p>'. esc_html__( 'Images are for demo purpose only.', 'mf' ) .'</p>';

        return $message;
    }

    // Uncomment the below
    // add_filter( 'wbc_importer_description', 'wbc_importer_description_text', 10 );
}

if ( !function_exists( 'wbc_importer_label_text' ) ) {

    /**
     * Filter for changing importer label/tab for redux section in options panel
     * when not setting in Redux config file.
     *
     * @param [string] $title label above demos
     *
     * @return [string] return no html
     */

    function wbc_importer_label_text( $label_text ) {

        $label_text = 'WBC Importer';

        return $label_text;
    }

    // Uncomment the below
    // add_filter( 'wbc_importer_label', 'wbc_importer_label_text', 10 );
}

if ( !function_exists( 'wbc_change_demo_directory_path' ) ) {

    /**
     * Change the path to the directory that contains demo data folders.
     *
     * @param [string] $demo_directory_path
     *
     * @return [string]
     */

    function wbc_change_demo_directory_path( $demo_directory_path ) {

        //$demo_directory_path = get_template_directory().'/demo-data/';

        return $demo_directory_path;

    }

    // Uncomment the below
    // add_filter('wbc_importer_dir_path', 'wbc_change_demo_directory_path' );
}

if ( !function_exists( 'wbc_importer_before_widget' ) ) {

    /**
     * Function/action ran before widgets get imported
     *
     * @param (array) $demo_active_import       Example below
     * [wbc-import-1] => Array
     *      (
     *            [directory] => current demo data folder name
     *            [content_file] => content.xml
     *            [image] => screen-image.png
     *            [theme_options] => theme-options.txt
     *            [widgets] => widgets.json
     *            [imported] => imported
     *        )
     * @param (string) $demo_data_directory_path path to current demo folder being imported.
     *
     * @return nothing
     */

    function wbc_importer_before_widget( $demo_active_import , $demo_data_directory_path ) {

        //Do Something

    }

    // Uncomment the below
     add_action('wbc_importer_before_widget_import', 'wbc_importer_before_widget', 10, 2 );
}

if ( !function_exists( 'wbc_after_theme_options' ) ) {

    /**
     * Function/action ran after theme options set
     *
     * @param (array) $demo_active_import       Example below
     * [wbc-import-1] => Array
     *      (
     *            [directory] => current demo data folder name
     *            [content_file] => content.xml
     *            [image] => screen-image.png
     *            [theme_options] => theme-options.txt
     *            [widgets] => widgets.json
     *            [imported] => imported
     *        )
     * @param (string) $demo_data_directory_path path to current demo folder being imported.
     *
     * @return nothing
     */

    function wbc_after_theme_options( $demo_active_import , $demo_data_directory_path ) {

        //Do Something

    }

    // Uncomment the below
     add_action('wbc_importer_after_theme_options_import', 'wbc_after_theme_options', 10, 2 );
}


/************************************************************************
* Extended Example:
* Way to set menu, import revolution slider, and set home page.
*************************************************************************/

if ( !function_exists( 'wbc_extended_example' ) ) {
    function wbc_extended_example( $demo_active_import , $demo_directory_path ) {

        reset( $demo_active_import );
        $current_key = key( $demo_active_import );

        /************************************************************************
        * Import slider(s) for the current demo being imported
        *************************************************************************/

        if ( class_exists( 'RevSlider' ) ) {

            //If it's demo3 or demo5
            $wbc_sliders_array = array(
                'MF' => 'mass_home2.zip',  //Set slider zip name


            );

            if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_sliders_array ) ) {
                $wbc_slider_import = $wbc_sliders_array[$demo_active_import[$current_key]['directory']];

                if ( file_exists( $demo_directory_path.$wbc_slider_import ) ) {
                    $slider = new RevSlider();
                    $slider->importSliderFromPost( true, true, $demo_directory_path.$wbc_slider_import );
                }
            }
        }

       /************************************************************************
        * Setting Menus
        *************************************************************************/

        // If it's demo1 - demo6
        $wbc_menu_array = array( 'MF' );


        if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && in_array( $demo_active_import[$current_key]['directory'], $wbc_menu_array ) ) {
            $main_navi  = get_term_by( 'name', 'Main', 'nav_menu' );
            $footer_navi = get_term_by( 'name', 'Footer', 'nav_menu' );

            if ( isset( $main_navi->term_id ) && isset( $footer_navi->term_id ) ) {
                set_theme_mod( 'nav_menu_locations', array(
                        'main-menu' => $main_navi->term_id,
                        'footer-menu'  => $footer_navi->term_id,
                    )
                );
            }
        }

        /************************************************************************
        * Set HomePage
        *************************************************************************/

        // array of demos/homepages to check/select from
        $wbc_home_pages = array(
            'MF' => 'Homepage 1',
        );

        if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_home_pages ) ) {
            $page = get_page_by_title( $wbc_home_pages[$demo_active_import[$current_key]['directory']] );
            if ( isset( $page->ID ) ) {
                update_option( 'page_on_front', $page->ID );
                update_option( 'show_on_front', 'page' );
            }
        }

    }


    // Uncomment the below
    add_action( 'wbc_importer_after_content_import', 'wbc_extended_example', 10, 2 );
}

