<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "mf_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Mf Options', 'mf' ),
        'page_title'           => esc_html__( 'Mf Options', 'mf' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => 'http://www.mfdsgn.com/mf-ico.png',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => esc_html__( 'Documentation', 'mf' ),
    );



    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '', 'mf' ), $v );
    } else {
        $args['intro_text'] = esc_html__( '', 'mf' );
    }

    // Add content after the form.
    $args['footer_text'] = esc_html__( '', 'mf' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

  

    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
         Redux::setSection( $opt_name, array(
        'icon' => 'el el-laptop',
        // Set the class for this icon.
        // This field is ignored unless $args['icon_type'] = 'iconfont'
        'icon_class' => 'icon-large',
        'title' => esc_html__('Getting Started', 'mf'),
        'desc' => esc_html__('', 'mf'),
        'fields' => array(
            array(
                'id' => 'font_awesome_info',
                'type' => 'info',
                'desc'     => '<h3 style="text-align: center; border-bottom: none;">Welcome to the Options panel of the '.wp_get_theme()->get( 'Name' ).'!</h3>
                                    <h4 style="text-align: center; font-size: 1.3em;">What does this mean to you?</h4>
                                    <p style="text-align: center;">From here on you will be able to regulate the main options of all the elements of the theme. </p>
                                    <p style="text-align: center;">Theme documentation is in your Documentation folder in main files.</p>',
          ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Header', 'mf' ),
        'id'     => 'basic',
        'desc'   => esc_html__( 'Basic field with no subsections.', 'mf' ),
        'icon'   => 'el el-home',
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Version', 'mf' ),
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
           array(
                'id'       => 'header-version',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Select Header Version', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__( '', 'mf' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => get_template_directory_uri().'/assets/img/header_v1.jpg',
                    '2' => get_template_directory_uri().'/assets/img/header_v2.jpg',
                    '3' => get_template_directory_uri().'/assets/img/header_v3.jpg',
                    '4' => get_template_directory_uri().'/assets/img/header_v4.jpg',
                    '5' => get_template_directory_uri().'/assets/img/header_v5.jpg',
                    '6' => get_template_directory_uri().'/assets/img/header_v6.jpg',
                    '7' => get_template_directory_uri().'/assets/img/header_v7.jpg',
                    '8' => get_template_directory_uri().'/assets/img/header_v8.jpg',
                    '9' => get_template_directory_uri().'/assets/img/header_v9.jpg',
                    '10' => get_template_directory_uri().'/assets/img/header_v10.jpg',

                ),
                'default'  => '2'
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Background', 'mf' ),
        'id'         => 'header_back',
        'subsection' => true,
        'fields'     => array(
             array(
                'id'       => 'header_background',
                'type'     => 'background',
                'compiler'    => array( '.header-body' ),
                'title'    => esc_html__('Header Background Image', 'mf'),
                'subtitle' => esc_html__('Header background with image, color, etc.', 'mf'),
                'desc'     => esc_html__('', 'mf'),
                'default'  => array(
                    'background-color' => '#FFFFFF',
                )
            ),
        ),

    ) );


    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Styling', 'mf' ),
        'id'         => 'opt-styling',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-header-top-line',
                'type'     => 'color',
                'compiler'    => array( '.version1 .header-top' ),
                'title'    => esc_html__( 'Header Top Line Color', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__( '(Header Version 2)', 'mf' ),
                'default'  => '#3083c9',
                'mode'     => 'background',
            ),
            array(
                'id'       => 'opt-header-top-line2',
                'type'     => 'border',
                'title'    => esc_html__( 'Header Version 4 & 10 Top Border', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'output'   => array( '.br-top3' ),
                // An array of CSS selectors to apply this font style to
                'desc'     => esc_html__( '', 'mf' ),
                'all'      => false,
                'default'  => array(
                    'border-color'  => '#3083c9',
                    'border-style'  => 'solid',
                    'border-top'    => '3px',
                    'border-right'  => '0px',
                    'border-bottom' => '0px',
                    'border-left'   => '0px'
                )
            ),
            array(
                'id'       => 'top-line2',
                'type'     => 'color',
                'compiler'    => array( '.header-top-light' ),
                'title'    => esc_html__( 'Header Top Line Color 2', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__( '(Header Version 6,9,10)', 'mf' ),
                'default'  => '#f8f8f8',
                'mode'     => 'background',
            ),

            array(
                'id'       => 'opt-header-top-half',
                'type'     => 'color',
                'compiler'    => array( '.header-top8'),
                'title'    => esc_html__( 'Header Version 8 Top Half Box (Left)', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__('', 'mf'),
                'default'  => '#f8f8f8',
                'mode'     => 'background'
            ),
            array(
                'id'       => 'opt-header-top-half-triangle',
                'type'     => 'border',
                'title'    => esc_html__( 'Header Version 8 Triangle', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'output'   => array( '.header-top-v8:before' ),
                // An array of CSS selectors to apply this font style to
                'desc'     => esc_html__( '', 'mf' ),
                'all'      => false,
                'default'  => array(
                    'border-color'  => '#f8f8f8',
                    'border-style'  => 'solid',
                    'border-left'   => '20px'
                )
            ),
            array(
                'id'       => 'opt-header-top-half-right',
                'type'     => 'color',
                'compiler'    => array( '.pull-right,.right-pie' ),
                'title'    => esc_html__( 'Header Version 8 Top Half Box (Right)', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__('', 'mf'),
                'default'  => '#3083c9',
                'mode'     => 'background'
            ),

        ),

    ) );



    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Options', 'mf' ),
        'id'         => 'opt-text-header-options',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'search-box',
                'type'     => 'switch',
                'title'    => esc_html__( 'Search Box', 'mf' ),
                'default'  => true,
            ),
             array(
                'id'       => 'sticky_header_1',
                'type'     => 'switch',
                'title'    => esc_html__( 'Sticky Header', 'mf' ),
                'subtitle' => esc_html__( 'Turn on to enable a sticky header.', 'mf' ),
                'desc'     => esc_html__( '', 'mf' ),
                'default'  => true,
            ),
            array(
                'id'       => 'header_cart',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Cart Icon', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__( '', 'mf' ),
                'default'  => false,
            ),
            array(
                'id'       => 'text-col-telephone',
                'type'     => 'text',
                'title'    => esc_html__( 'Telephone Text', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__( 'Show Header Version 3,6,8,10', 'mf' ),
                'default'  => 'Telephone',
            ),
            array(
                'id'       => 'text-telephone',
                'type'     => 'text',
                'title'    => esc_html__( 'Telephone Number', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__( 'Show Header Version 3,6,8,10', 'mf' ),
                'default'  => '+0800 123 4567',
            ),
            array(
                'id'       => 'text-col-mail',
                'type'     => 'text',
                'title'    => esc_html__( 'Email Text', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__( 'Show Header Version 3,6,8,10', 'mf' ),
                'default'  => 'E-Mail',
            ),
             array(
                'id'       => 'text-mail',
                'type'     => 'text',
                'title'    => esc_html__( 'Email Adress', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__( 'Show Header Version 3,6,8,10', 'mf' ),
                'default'  => '+0800 123 4567',
            ),
             array(
                'id'       => 'opt-tel-mail-color-light',
                'type'     => 'color',
                'compiler'    => array( '.c-header-info' ),
                'important' => true,
                'mode'      => 'color',
                'title'    => esc_html__( 'Telephone & Email Text Color Light', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '#747474',
            ),
              array(
                'id'       => 'opt-tel-mail-color-dark',
                'type'     => 'color',
                'compiler'    => array( '.header-top-v8 .c-header-info' ),
                'important' => true,
                'mode'      => 'color',
                'title'    => esc_html__( 'Telephone & Email Text Color Dark', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '#FFFFFF',
            ),
        ),

    ) );

     Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Logo & Favicon', 'mf' ),
        'id'         => 'logo-favicon',
        'icon'   => 'el el-bookmark',
        'desc'       => esc_html__('', 'mf'),
        'fields'     => array(
        	array(
                'id'             => 'logo-width',
                'type'           => 'dimensions',
                'compiler'    => array( '.header .logo a img' ),
                'units'          => array( 'em', 'px', '%' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Logo (Width)', 'mf' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 125,
                )
            ),
            array(
                'id'             => 'logo-height',
                'type'           => 'dimensions',
                'compiler'    => array( '.desk .logo' ),
                'units'          => array( 'em', 'px', '%' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Logo (Height)', 'mf' ),
                'height'         => true,
                'width'          => false,
                'default'        => array(
                    'height'  => 105,
                )
            ),
            array(
                'id'       => 'logo-padding',
                'type'     => 'spacing',
                'mode'           => 'margin',
                'units'          => array('em', 'px'),
                'title'    => esc_html__( 'Logo Padding', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'compiler'   => array( '.desk .logo' ),
                // An array of CSS selectors to apply this font style to
                'desc'     => esc_html__( '', 'mf' ),
                'default'  => array(
                    'margin-top'     => '5px', 
			        'margin-right'   => '0px', 
			        'margin-bottom'  => '5px', 
			        'margin-left'    => '0px',
                )
            ),
            array(
                'id'       => 'main-logo',
                'type'     => 'media',
                'title'    => esc_html__( 'Logo', 'mf' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => esc_html__('', 'mf'),
                'subtitle' => esc_html__('', 'mf'),
                //'hint'      => array(
                //    'title'     => 'Hint Title',
                //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                //)
            ),
            array(
                'id'             => 'mobile-logo-width',
                'type'           => 'dimensions',
                'compiler'    => array( '.logo-mob img' ),
                'units'          => array( 'em', 'px', '%' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Mobile Logo (Width)', 'mf' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                )
            ),
            array(
                'id'       => 'mobile-logo',
                'type'     => 'media',
                'title'    => esc_html__( 'Mobile Logo', 'mf' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => esc_html__('', 'mf'),
                'subtitle' => esc_html__('', 'mf'),
                //'hint'      => array(
                //    'title'     => 'Hint Title',
                //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                //)
            ),

            array(
                'id'       => 'favicon',
                'type'     => 'media',
                'title'    => esc_html__( 'Favicon', 'mf' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => esc_html__('', 'mf'),
                'subtitle' => esc_html__('', 'mf'),
                ),

             array(
                'id'       => 'apple-icon',
                'type'     => 'media',
                'title'    => esc_html__( 'Apple iPhone Icon', 'mf' ),

                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => esc_html__('', 'mf'),
                'subtitle' => esc_html__('', 'mf'),
                ),
            )
    ) );


     // Menu
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Menu', 'mf' ),
        'id'         => 'opt-menu-styling',
        'icon'   => 'el el-th-list',
        'fields'     => array(

             array(
                'id'       => 'opt-menu-link-color',
                'type'     => 'typography',
                'compiler' => array('.version2 .desk-menu > ul > li > a','.version1 .desk-menu > ul > li > a'),
                'title'    => esc_html__( 'Menu Font', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'google'   => true,
                'line-height' => false,                
                'default'  => array(
                    'font-weight'  => '400',
                    'font-family' => 'Open Sans',
                    'color'       => '#424141',
                    'google'      => true,
                    'font-size'   => '13px',
                ),
            ),
            array(
                'id'       => 'opt-menu-hover-color',
                'type'     => 'color',
                'compiler'    => array('.version2 .desk-menu > ul > li > a:hover','.version1 .desk-menu > ul > li > a:hover'),
                'title'    => esc_html__( 'Menu Hover Color', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__('', 'mf'),
                'mode'     => 'color',
                'default'  => '#424141',
            ),
            array(
                'id'       => 'opt-menu-active-color',
                'type'     => 'color',
                'compiler'    => array( '.version2 .desk-menu > ul > li > a:active','.version1 .desk-menu > ul > li > a:active' ),
                'title'    => esc_html__( 'Menu Active Color', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__('', 'mf'),
                'mode'     => 'color',
                'default'  => '#424141',
            ),
            array(
                'id'       => 'menu-effect-color',
                'type'     => 'color',
                'compiler'    => array( '.version1.effect-underline .desk-menu > ul > li > a:after, .version1.effect-overline .desk-menu > ul > li > a:after, .version1.effect-fill .desk-menu > ul > li:hover > a, .version1.effect-fill .desk-menu > ul > li.one-page-active > a, .version1.effect-fill .desk-menu > ul > li.current-menu-item > a, .version1.effect-fill .desk-menu > ul > li.current-menu-parent > a, .version1.effect-fill .desk-menu > ul > li.current-menu-ancestor > a','.version2.effect-underline .desk-menu > ul > li > a:after, .version2.effect-overline .desk-menu > ul > li > a:after, .version2.effect-fill .desk-menu > ul > li:hover > a, .version2.effect-fill .desk-menu > ul > li.one-page-active > a, .version2.effect-fill .desk-menu > ul > li.current-menu-item > a, .version2.effect-fill .desk-menu > ul > li.current-menu-parent > a, .version2.effect-fill .desk-menu > ul > li.current-menu-ancestor > a' ),
                'title'    => esc_html__( 'Menu Hover & Active Effect Color', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__('', 'mf'),
                'mode'     => 'background',
                'default'  => '#3083c9',
            ),
            array(
                'id'       => 'dropdown-effect',
                'type'     => 'select',
                'title'    => __( 'Submenu Effect', 'mf' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'fade' => 'Fade',
                    'slide' => 'Slide',
                    'move' => 'Move',
                    'ghost' => 'Under',
                ),
                'default'  => 'slide'
            ),
            array(
                'id'       => 'mega_menu_drop_typ',
                'type'     => 'typography',
                'compiler' => array('.version1 .desk-menu .sub-menu li > a','.version2 .desk-menu .sub-menu li > a'),
                'title'    => esc_html__( 'Dropdown & Mega Menu Fonts', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'google'   => true,
                'line-height' => false,                
                'default'  => array(
                    'font-weight'  => '400',
                    'font-family' => 'Open Sans',
                    'color'       => '#999999',
                    'google'      => true,
                    'font-size'   => '13px',
                ),
            ),
             array(
                'id'       => 'megamenu_bg',
                'type'     => 'color',
                'compiler'    => array( '.version1 .desk-menu .sub-menu, .version1 .header-top .header-top-menu ul li ul, .version1 .search, .version1 .woo-cart','.version2 .desk-menu .sub-menu, .version2 .header-top .header-top-menu ul li ul, .version2 .search, .version2 .woo-cart' ),
                'title'    => esc_html__( 'Dropdown Menu & Mega Menu Backgorund', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__('', 'mf'),
                'mode'     => 'background',
                'default'  => '#292929',
            ),
             array(
                'id'       => 'dropdown_sub_sub',
                'type'     => 'color',
                'compiler'    => array( '.version2 .desk-menu .sub-menu .sub-menu','.version1 .desk-menu .sub-menu .sub-menu' ),
                'title'    => esc_html__( 'Dropdown Menu Sub Menu Sub Backgorund', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__('', 'mf'),
                'mode'     => 'background',
                'default'  => '#151515',
            ),   

            

        ),

    ) );



    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer', 'mf' ),
        'id'         => 'opt-text-footer-options',
        'icon'   => 'el el-fork',
        'fields'     => array(
             array(
                'id'       => 'footer-columns',
                'type'     => 'select',
                'title'    => __( 'Footer Columns', 'mf' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    '1' => '1 Column',
                    '2' => '2 Column',
                    '3' => '3 Column',
                    '4' => '4 Column',
                ),
                'default'  => '4'
            ),
             array(
                'id'       => 'opt-color-bg-footer',
                'type'     => 'color',
                'compiler'    => array( '.c-layout-footer .c-prepfooter' ),
                'title'    => esc_html__( 'Footer Backgorund Color', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '#262727',
                'mode'     => 'background',
            ),
             array(
                'id'       => 'opt-color-title-footer',
                'type'     => 'color',
                'compiler'    => array( '.c-layout-footer .c-prepfooter .c-caption' ),
                'title'    => esc_html__( 'Footer Title Color', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '#FFFFFF',
                'mode'     => 'color',
            ),
            array(
                'id'       => 'opt-color-content-footer',
                'type'     => 'color',
                'compiler'    => array( '.c-layout-footer .c-prepfooter a' ),
                'title'    => esc_html__( 'Footer Content Color', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '#bfbfbf',
                'mode'     => 'color',
            ),
            array(
                'id'       => 'opt-color-bg-bottom-footer',
                'type'     => 'color',
                'compiler'    => array( '.c-layout-footer .c-postfooter' ),
                'title'    => esc_html__( 'Footer Bottom Backgorund Color', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '#363839',
                'mode'     => 'background',
            ),
            array(
                'id'       => 'opt-color-content-footer-bottom',
                'type'     => 'color',
                'compiler'    => array( '.c-layout-footer .c-postfooter' ),
                'title'    => esc_html__( 'Footer Bottom Content Color', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '#FFFFFF',
            ),
             array(
                'id'       => 'text-copyright',
                'type'     => 'text',
                'title'    => esc_html__( 'Copyright Text', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'desc'     => esc_html__( '', 'mf' ),
                'default'  => '&copy;  Copyright - Mf Theme',
            ),
        ),

    ) );

    
      // -> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Styling', 'mf' ),
        'id'     => 'styling-main',
        'desc'   => esc_html__( '', 'mf' ),
        'icon'   => 'el  el-magic',
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Search', 'mf' ),
        'id'         => 'opt-menu-search',
        'subsection' => true,
        'fields'     => array(
             array(
                'id'       => 'opt-search-light-button-color',
                'type'     => 'color',
                'compiler'    => array( '.search-light' ),
                'title'    => esc_html__( 'Light Bg Search Button Color', 'mf' ),
                'subtitle' => esc_html__( 'Header Version: 1,3,5,6,7,8 ', 'mf' ),
                'default'  => '#3083c9',
            ),
            array(
                'id'       => 'opt-search-dark-button-color',
                'type'     => 'color',
                'compiler'    => array( '.search-dark' ),
                'title'    => esc_html__( 'Dark Bg Search Button Color', 'mf' ),
                'subtitle' => esc_html__( 'Header Version: 2,9,10 ', 'mf' ),
                'default'  => '#FFFFFF',
            ),
        ),

    ) );

      // -> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Typography', 'mf' ),
        'id'     => 'typography',
        'desc'   => esc_html__( 'For full documentation on this field, visit: ', 'mf' ) . '<a href="//docs.reduxframework.com/core/fields/typography/" target="_blank">docs.reduxframework.com/core/fields/typography/</a>',
        'icon'   => 'el el-fontsize',
    ) );

     Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'General Font Settings', 'mf' ),
        'id'         => 'opt-text-general-font',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-typography-body',
                'type'     => 'typography',
                'compiler'    => array( 'body' ),
                'title'    => esc_html__( 'Body Font', 'mf' ),
                'subtitle' => esc_html__( 'Specify the body font properties.', 'mf' ),
                'google'   => true,
                'default'  => array(
                    'color'       => '#747474',
                    'font-weight'  => '400',
                    'font-family' => 'Open Sans',
                    'google'      => true,
                    'line-height' => '24px',
                    'font-size'   => '14px',
                ),
            ),
            array(
                'id'       => 'opt-typography-post',
                'type'     => 'typography',
                'compiler'    => array( '.c-layout-breadcrumbs-1 .c-page-title' ),
                'title'    => esc_html__( 'Page & Post Header H1 Title', 'mf' ),
                'subtitle' => esc_html__( 'Specify the page & post header h1 font properties.', 'mf' ),
                'google'   => true,
                'default'  => array(
                    'color'       => '#727070',
                    'font-weight'  => '300',
                    'font-family' => 'Lato',
                    'google'      => true,
                    'font-size'   => '27px',
                    'line-height' => '35px'
                ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Heading Fonts', 'mf' ),
        'id'         => 'opt-text-heading-font',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'          => 'opt-typography-h1',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H1', 'mf' ),
                'compiler'    => array( 'h1' ),
                'font-size'     => true,
                'all_styles'  => true,
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( '', 'mf' ),
                'default'     => array(
                    'color'       => '#727070',
                    'font-weight'  => '400',
                    'font-family' => 'Lato',
                    'google'      => true,
                    'font-size'   => '36px',
                    'line-height' => '35px'
                ),
            ),
             array(
                'id'          => 'opt-typography-h2',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H2', 'mf' ),
                'compiler'    => array( 'h2' ),
                'font-size'     => true,
                'all_styles'  => true,
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( '', 'mf' ),
                'default'     => array(
                    'color'       => '#727070',
                    'font-weight'  => '400',
                    'font-family' => 'Lato',
                    'google'      => true,
                    'font-size'   => '30px',
                    'line-height' => '30px'
                ),
            ),
            array(
                'id'          => 'opt-typography-h3',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H3', 'mf' ),
                'compiler'    => array( 'h3' ),
                'font-size'     => true,
                'all_styles'  => true,
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( '', 'mf' ),
                'default'     => array(
                    'color'       => '#727070',
                    'font-weight'  => '400',
                    'font-family' => 'Lato',
                    'google'      => true,
                    'font-size'   => '24px',
                    'line-height' => '30px'
                ),
            ),
            array(
                'id'          => 'opt-typography-h4',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H4', 'mf' ),
                'compiler'    => array( 'h4' ),
                'font-size'     => true,
                'all_styles'  => true,
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( '', 'mf' ),
                'default'     => array(
                    'color'       => '#727070',
                    'font-weight'  => '400',
                    'font-family' => 'Lato',
                    'google'      => true,
                    'font-size'   => '18px',
                    'line-height' => '30px'
                ),
            ),
            array(
                'id'          => 'opt-typography-h5',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H5', 'mf' ),
                'compiler'    => array( 'h5' ),
                'font-size'     => true,
                'all_styles'  => true,
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( '', 'mf' ),
                'default'     => array(
                    'color'       => '#727070',
                    'font-weight'  => '400',
                    'font-family' => 'Lato',
                    'google'      => true,
                    'font-size'   => '14px',
                    'line-height' => '25px'
                ),
            ),
            array(
                'id'          => 'opt-typography-h6',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H6', 'mf' ),
                'compiler'    => array( 'h6' ),
                'font-size'     => true,
                'all_styles'  => true,
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( '', 'mf' ),
                'default'     => array(
                    'color'       => '#727070',
                    'font-weight'  => '400',
                    'font-family' => 'Lato',
                    'google'      => true,
                    'font-size'   => '12px',
                    'line-height' => '20px'
                ),
            ),
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Social Media', 'mf' ),
        'id'         => 'opt-text-social-options',
        'icon'   => 'el el-globe',
        'fields'     => array(
             array(
                'id'       => 'soc_face',
                'type'     => 'text',
                'output'   => array( '' ),
                'title'    => esc_html__( 'Facebook', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '',
            ),
             array(
                'id'       => 'soc_twitter',
                'type'     => 'text',
                'output'   => array( '' ),
                'title'    => esc_html__( 'Twitter', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '',
            ),
             array(
                'id'       => 'soc_goplus',
                'type'     => 'text',
                'output'   => array( '' ),
                'title'    => esc_html__( 'Google Plus', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '',
            ),
             array(
                'id'       => 'soc_instagram',
                'type'     => 'text',
                'output'   => array( '' ),
                'title'    => esc_html__( 'Instagram', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '',
            ),
             array(
                'id'       => 'soc_linkedin',
                'type'     => 'text',
                'output'   => array( '' ),
                'title'    => esc_html__( 'LinkedIn', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '',
            ),
              array(
                'id'       => 'soc_pinterest',
                'type'     => 'text',
                'output'   => array( '' ),
                'title'    => esc_html__( 'Pinterest', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '',
            ),
              array(
                'id'       => 'soc_youtube',
                'type'     => 'text',
                'output'   => array( '' ),
                'title'    => esc_html__( 'Youtube', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => '',
            ),

        ),

    ) );

    // Menu
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Custom Css & Codes', 'mf' ),
        'id'         => 'mf-custom-css',
        'icon'   => 'el el-pencil',
        'fields'     => array(
        	array(
                'id'       => 'opt-ace-editor-css',
                'type'     => 'ace_editor',
                'title'    => __( 'CSS Code', 'mf' ),
                'subtitle' => __( 'Paste your CSS code here.', 'mf' ),
                'mode'     => 'css',
                'theme'    => 'monokai',
            ),
			array(
				'id'       => 'mf-before-head',
				'type'     => 'ace_editor',
				'title'    => __( 'Code to be placed after &lt;head&gt; tag', 'mf' ),
				'subtitle' => __( 'Code here will be added just before the closing of &lt;/head&gt; tag.', 'mf' ),
				'mode'     => 'text',
				'theme'    => 'eclipse',
				'options'  => array( 'minLines' => 15, 'maxLines' => 80 )
			),
			array(
				'id'       => 'mf-before-body',
				'type'     => 'ace_editor',
				'title'    => __( 'Code to be placed before closing body tag. i.e. &lt;/body&gt; tag', 'mf' ),
				'subtitle' => __( 'Code here will be added just before the closing of &lt;body&gt; tag.', 'mf' ),
				'mode'     => 'text',
				'theme'    => 'eclipse',
				'options'  => array( 'minLines' => 15, 'maxLines' => 80 )
			),
       ),

    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( '404 Error Page', 'mf' ),
        'id'         => 'error-page',
        'icon'   => 'el el-glasses',
        'fields'     => array(
            array(
                'id'       => 'search-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Search Box', 'mf' ),
                'subtitle' => esc_html__( 'Show Search Box, On or Off', 'mf' ),
                'default'  => true,
            ),
             array(
                'id'       => 'not-found-text',
                'type'     => 'text',
                'output'   => array( '' ),
                'title'    => esc_html__( 'Not Found Text', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => 'NOT FOUND',
            ),
             array(
                'id'       => 'not-found-content',
                'type'     => 'editor',
                'title'    => esc_html__( 'Not Found Text', 'mf' ),
                'subtitle' => esc_html__( '', 'mf' ),
                'default'  => 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
            ),


        ),

    ) );





    /*
     * <--- END SECTIONS
     */

 add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);
 function compiler_action($options, $css, $changed_values) {
    global $wp_filesystem;

    $filename = get_template_directory() . '/assets/css/mf-custom-style.css';


    if( empty( $wp_filesystem ) ) {
        require_once( ABSPATH .'/wp-admin/includes/file.php' );
        WP_Filesystem();
    }

    if( $wp_filesystem ) {
        $wp_filesystem->put_contents(
            $filename,
            $css,
            FS_CHMOD_FILE // predefined mode settings for WP files
        );
    }
}




