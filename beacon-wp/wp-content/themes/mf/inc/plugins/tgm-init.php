<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Mf for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/plugins/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'mf_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function mf_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */

	$plugins = array(
		array(
                'name'          		=> 'WPBakery Visual Composer', // The plugin name
                'slug'         			=> 'js_composer', // The plugin slug (typically the folder name)
                'source'                => 'http://www.mfdsgn.com/themeplugins/js_composer.zip',
                'required'          	=> true, // If false, the plugin is only 'recommended' instead of required
                'version'           	=> '5.0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                'external_url'      	=> '', // If set, overrides default API URL and points to an external URL
        ),
		        array(
	            'name'     				=> 'Visual Composer Extensions Addon', // The plugin name
	            'slug'     				=> 'ts-visual-composer-extend', // The plugin slug (typically the folder name)
	            'source'                => 'http://www.mfdsgn.com/themeplugins/ts-visual-composer-extend.zip',
	            'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
	            'version' 				=> '5.0.8', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
	            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
	            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
	            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),
        array(
                'name'      => 'Contact Form 7',
                'slug'      => 'contact-form-7',
                'required'  => true,
        ),
        array(
                'name'                  => 'Redux Framework', // The plugin name
                'slug'                  => 'redux-framework', // The plugin slug (typically the folder name)
                'source'                => 'http://www.mfdsgn.com/themeplugins/redux-framework.zip',
                'required'              => true, // If false, the plugin is only 'recommended' instead of required
                'version'               => '3.6.2', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
        ),
		        array(
	            'name'     				=> 'Revolution slider', // The plugin name
	            'slug'     				=> 'revslider', // The plugin slug (typically the folder name)
	            'source'                => 'http://www.mfdsgn.com/themeplugins/revslider.zip',
	            'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
	            'version' 				=> '5.3.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
	            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
	            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
	            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),
		        array(
	            'name'     				=> 'LayerSlider WP', // The plugin name
	            'slug'     				=> 'layerslider', // The plugin slug (typically the folder name)
	            'source'                => 'http://www.mfdsgn.com/themeplugins/layerslider.zip',
	            'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
	            'version' 				=> '6.0.6', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
	            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
	            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
	            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),
	);


	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'mf',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
	);

	tgmpa( $plugins, $config );
}