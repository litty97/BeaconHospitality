<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                          => __( "TS Video Vimeo", "ts_visual_composer_extend" ),
		"base"                          => "TS-VCSC-Vimeo",
		"icon" 	                        => "ts-composer-element-icon-vimeo",
		"class"                         => "",
		"category"                      => __( "VC Extensions", "ts_visual_composer_extend" ),
		"description"                   => __("Place a Vimeo Video", "ts_visual_composer_extend"),
		"admin_enqueue_js"              => "",
		"admin_enqueue_css"             => "",
		"params"                        => array(
			// Vimeo Video
			array(
				"type"                  => "seperator",
				"param_name"            => "seperator_1",
				"seperator"				=> "Vimeo Video",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Vimeo Video URL", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo",
				"value"                 => "",
				"admin_label"           => true,
				"description"           => __( "Enter the URL for the Vimeo video.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "switch_button",
				"heading"			    => __( "Autoplay Video", "ts_visual_composer_extend" ),
				"param_name"		    => "lightbox_play",
				"value"             	=> "false",
				"description"		    => __( "Switch the toggle if you want to auto-play the video once opened in the lightbox or on pageload (iFrame).", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "switch_button",
				"heading"			    => __( "Loop Video", "ts_visual_composer_extend" ),
				"param_name"		    => "lightbox_loop",
				"value"             	=> "false",
				"description"		    => __( "Switch the toggle if you want to loop and automatically replay the video once it has finished.", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "switch_button",
				"heading"           	=> __( "Open in Lightbox", "ts_visual_composer_extend" ),
				"param_name"        	=> "content_lightbox",
				"value"             	=> "false",
				"description"       	=> __( "Switch the toggle to show the video in a lightbox.", "ts_visual_composer_extend" )
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Video Ratio", "ts_visual_composer_extend" ),
				"param_name"            => "content_ratio",
				"value"                 => array(
					__("1.33:1 (4:3)", "ts_visual_composer_extend")          			=> "ts-ratio-four-to-three",
					__("1.67:1 (3:2)", "ts_visual_composer_extend")         			=> "ts-ratio-three-to-two",
					__("1.60:1 (8:5)", "ts_visual_composer_extend")         			=> "ts-ratio-eight-to-five",
					__("1.78:1 (16:9)", "ts_visual_composer_extend")					=> "ts-ratio-sixteen-to-nine",
					__("1.85:1", "ts_visual_composer_extend")							=> "ts-ratio-oneeightfive-to-one",
					__("2.33:1 (21:9)", "ts_visual_composer_extend")					=> "ts-ratio-twentyone-to-nine",
					__("2.39:1", "ts_visual_composer_extend")							=> "ts-ratio-twothreenine-to-one",
					__("2.67:1", "ts_visual_composer_extend")							=> "ts-ratio-twosixseven-to-one",
					__("2.75:1", "ts_visual_composer_extend")							=> "ts-ratio-twosevenfive-to-one",
				),
				"description"           => __( "Select the width-to-height ratio that the video to be shown within the iFrame is encoded with.", "ts_visual_composer_extend" ),
				"default"				=> 'ts-ratio-sixteen-to-nine',
				"standard"				=> 'ts-ratio-sixteen-to-nine',
				"std"					=> 'ts-ratio-sixteen-to-nine',
				"dependency"            => array( 'element' => "content_lightbox", 'value' => 'false' ),
			),
			// Triggger Settings
			array(
				"type"				    => "seperator",
				"param_name"		    => "seperator_2",
				"seperator"				=> "Lightbox Settings",
				"dependency"            => array( 'element' => "content_lightbox", 'value' => "true" ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Trigger Type", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo_trigger",
				"value"                 => array(
					__("Vimeo Cover", "ts_visual_composer_extend")            	=> "preview",
					__("Default Image", "ts_visual_composer_extend")          	=> "default",
					__("Custom Image", "ts_visual_composer_extend")           	=> "image",
					__("Font Icon", "ts_visual_composer_extend")              	=> "icon",
					__("Winged Button", "ts_visual_composer_extend")          	=> "winged",
					__("Simple Button", "ts_visual_composer_extend")          	=> "simple",
					__("Flat Icon Button", "ts_visual_composer_extend")       	=> "flaticon",
					__("Flat Button", "ts_visual_composer_extend")       		=> "flat",
					__("Text", "ts_visual_composer_extend")                   	=> "text",
					__("Custom HTML", "ts_visual_composer_extend")            	=> "custom",
				),
				"admin_label"           => true,
				"description"           => __( "Select the type of trigger to click on in order to show the lightbox.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_lightbox", 'value' => 'true' ),
				"group" 				=> "Trigger Settings",
			),
			// Custom Image
			array(
				"type"                  => "attach_image",
				"heading"               => __( "Select Image", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo_image",
				"value"                 => "",
				"description"           => __( "Select the preview image for the lightbox content.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => 'image' ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"			    => __( "Simple Image Only", "ts_visual_composer_extend" ),
				"param_name"		    => "content_vimeo_image_simple",
				"value"             	=> "false",
				"description"		    => __( "Switch the toggle if you want display just the image without any styling.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => 'image' ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Auto Height Setting", "ts_visual_composer_extend" ),
				"param_name"            => "content_image_height",
				"width"                 => 150,
				"value"                 => array(
					__( '100% Height Setting', "ts_visual_composer_extend" )		=> "height: 100%;",
					__( 'Auto Height Setting', "ts_visual_composer_extend" )     	=> "height: auto;",
				),
				"description"           => __( "Select what CSS height setting should be applied to the image (change only if image height does not display correctly).", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => array('preview', 'default', 'image') ),
				"group" 				=> "Trigger Settings",
			),
			// Font Icon
			array(
				'type' 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorType,
				'heading' 				=> __( 'Select Icon', 'ts_visual_composer_extend' ),
				'param_name' 			=> 'content_vimeo_icon',
				'value'					=> '',
				'source'				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorValue,
				'settings' 				=> array(
					'emptyIcon' 				=> false,
					'type' 						=> 'extensions',
					'iconsPerPage' 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorPager,
					'source' 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorSource,
				),
				"description"       	=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorVisualSelector == "true" ? __( "Select the icon you want to display.", "ts_visual_composer_extend" ) : $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorString),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => array('icon', 'flaticon') ),
				"group" 				=> "Trigger Settings",
			),	
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Icon Size", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo_iconsize",
				"value"                 => "30",
				"min"                   => "16",
				"max"                   => "512",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the icon / image size", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => 'icon' ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Icon Color", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo_iconcolor",
				"value"                 => "#cccccc",
				"description"           => __( "Define the color of the icon.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => 'icon' ),
				"group" 				=> "Trigger Settings",
			),
			// Flat Button
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Button Color Style", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo_buttonstyle",
				"width"                 => 300,
				"value"                 => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Default_Colors,
				"description"           => __( "Select the general color style for button.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => array('flat', 'flaticon') ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Button Hover Style", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo_buttonhover",
				"width"                 => 300,
				"value"                 => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Hover_Colors,
				"description"           => __( "Select the general hover style for button.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => array('flat', 'flaticon') ),
				"group" 				=> "Trigger Settings",
			),
			// Button
			array(
				"type"                  => "textfield",
				"heading"               => __( "Button Text", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo_buttontext",
				"value"                 => "View Video",
				"description"           => __( "Enter the text for the button.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => array('winged', 'simple', 'flat', 'flaticon') ),
				"group" 				=> "Trigger Settings",
			),
			// Text Link
			array(
				"type"                  => "textfield",
				"heading"               => __( "Trigger Text", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo_text",
				"value"                 => "",
				"description"           => __( "Enter the trigger text for the video.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => 'text' ),
				"group" 				=> "Trigger Settings",
			),
			// Custom Code
			array(
				"type"                  => "textarea_raw_html",
				"heading"               => __("Raw HTML", "ts_visual_composer_extend"),
				"param_name"            => "content_raw",
				"value"                 => base64_encode(""),
				"description"           => __("Enter your custom HTML code; code will be wrapped in appropriate link automatically.", "ts_visual_composer_extend"),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => 'custom' ),
				"group" 				=> "Trigger Settings",
			),
			// Title + Subtitle
			array(
				"type"                  => "textfield",
				"heading"               => __( "Title", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo_title",
				"value"                 => "",
				"description"           => __( "Enter a title for the lightbox content.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => array('image', 'default', 'preview', 'winged', 'flat', 'flaticon') ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Subtitle", "ts_visual_composer_extend" ),
				"param_name"            => "content_vimeo_subtitle",
				"value"                 => "",
				"description"           => __( "Enter a subtitle for the lightbox content.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_vimeo_trigger", 'value' => array('winged') ),
				"group" 				=> "Trigger Settings",
			),			
			// Overlay Settings
			array(
				"type"                  => "seperator",
				"param_name"            => "seperator_3",
				"seperator"             => "Overlay Settings",
				"dependency"        	=> array( 'element' => "content_vimeo_trigger", 'value' => array('default', 'image', 'preview') ),				
				"group" 				=> "Trigger Settings",
			),			
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Overlay: Background Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "overlay_background",
				"value"             	=> "rgba(24, 24, 24, 0.3)",
				"description"       	=> __( "Select the background color and opacity for the overlay.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "content_vimeo_trigger", 'value' => array('default', 'image', 'preview') ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",	
				"group" 				=> "Trigger Settings"
			),		
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Overlay: Animation", "ts_visual_composer_extend" ),
				"param_name"        	=> "overlay_animation",
				"width"             	=> 300,
				"value"             	=> array(
					__( "Zoom Effect", "ts_visual_composer_extend" )				=> "zoom",
					__( "Zoom + Rotate Effect", "ts_visual_composer_extend" )		=> "rotate",
					__( "No Effect", "ts_visual_composer_extend" )					=> "none",
				),
				"description"       	=> __( "Select if and what type of animation should be applied to the image on hover.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "content_vimeo_trigger", 'value' => array('default', 'image', 'preview') ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"group" 				=> "Trigger Settings"
			),			
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Overlay: Decoration", "ts_visual_composer_extend" ),
				"param_name"        	=> "overlay_decoration",
				"width"             	=> 300,
				"value"             	=> array(
					__( "Default Image", "ts_visual_composer_extend" )				=> "default",
					__( "Custom Internal Image", "ts_visual_composer_extend" )		=> "image",
					__( "Custom External Image", "ts_visual_composer_extend" )		=> "external",
					__( "Font Icon", "ts_visual_composer_extend" )					=> "icon",
					__( "No Decoration", "ts_visual_composer_extend" )				=> "none",
				),
				"description"       	=> __( "Select if and how the overlay should be decorated.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "content_vimeo_trigger", 'value' => array('default', 'image', 'preview') ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Overlay: Visibility", "ts_visual_composer_extend" ),
				"param_name"        	=> "overlay_visibility",
				"width"             	=> 300,
				"value"             	=> array(
					__( "Show Only On Hover", "ts_visual_composer_extend" )			=> "hover",
					__( "Always Show Decoration", "ts_visual_composer_extend" )		=> "only_deco",
					__( "Always Show Title", "ts_visual_composer_extend" )			=> "only_title",
					__( "Always Show Full Overlay", "ts_visual_composer_extend" )	=> "always",
				),
				"admin_label"           => true,
				"description"       	=> __( "Select if and when the overlay should be visible.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "content_vimeo_trigger", 'value' => array('default', 'image', 'preview') ),
				"group" 				=> "Trigger Settings",
			),			
			array(
				"type"              	=> "attach_image",
				"heading"           	=> __( "Overlay: Decoration Image", "ts_visual_composer_extend" ),
				"param_name"        	=> "overlay_image",
				"value"             	=> "",
				"description"       	=> __( "Select an image to be used as decoration for the overlay.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "overlay_decoration", 'value' => 'image' ),
				"group" 				=> "Trigger Settings",
			),	
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Overlay: Decoration Image", "ts_visual_composer_extend" ),
				"param_name"        	=> "overlay_external",
				"value"             	=> "",
				"description"       	=> __( "Enter the full path to the image to be used as decoration for the overlay.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "overlay_decoration", 'value' => 'external' ),
				"group" 				=> "Trigger Settings",
			),
			array(
				'type' 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorType,
				'heading' 				=> __( 'Overlay: Decoration Icon', 'ts_visual_composer_extend' ),
				'param_name' 			=> 'overlay_icon_name',
				'value'					=> '',
				'source'				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorValue,
				'settings' 				=> array(
					'emptyIcon' 				=> false,
					'type' 						=> 'extensions',
					'iconsPerPage' 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorPager,
					'source' 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorSource,
				),
				"description"       	=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorVisualSelector == "true" ? __( "Select the icon to be used as decoration for the overlay.", "ts_visual_composer_extend" ) : $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorString),
				"dependency"        	=> array( 'element' => "overlay_decoration", 'value' => 'icon' ),
				"group" 				=> "Trigger Settings",
			),	
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Overlay: Decoration Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "overlay_icon_color",
				"value"             	=> "#ededed",
				"description"       	=> __( "Select the color for the decoration element.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "overlay_decoration", 'value' => 'icon' ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Overlay: Decoration Size", "ts_visual_composer_extend" ),
				"param_name"            => "overlay_size",
				"value"                 => "100",
				"min"                   => "50",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Define the size of the decoration element in the overlay.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "overlay_decoration", 'value' => array('icon', 'image', 'external') ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Overlay: Decoration Opacity", "ts_visual_composer_extend" ),
				"param_name"            => "overlay_opacity",
				"value"                 => "75",
				"min"                   => "50",
				"max"                   => "100",
				"step"                  => "1",
				"unit"                  => '%',
				"description"           => __( "Define the opacity of the decoration element in the overlay.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "overlay_decoration", 'value' => array('icon', 'image', 'external') ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Overlay: Title Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "overlay_title_color",
				"value"             	=> "#ffffff",
				"description"       	=> __( "Select the font color for the overlay title.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "content_vimeo_trigger", 'value' => array('default', 'image', 'preview') ),
				"group" 				=> "Trigger Settings",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Overlay: Title Background", "ts_visual_composer_extend" ),
				"param_name"        	=> "overlay_title_back",
				"value"             	=> "rgba(0, 0, 0, 0.4)",
				"description"       	=> __( "Select the background color and opacity for the overlay title.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "content_vimeo_trigger", 'value' => array('default', 'image', 'preview') ),
				"group" 				=> "Trigger Settings",
			),			
			// Lightbox Settings
			array(
				"type"				    => "seperator",
				"param_name"		    => "seperator_4",
				"seperator"				=> "Lightbox Settings",
				"dependency"            => array( 'element' => "content_lightbox", 'value' => "true" ),
				"group" 				=> "Lightbox Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Maximum Lightbox Width", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_width",
				"width"                 => 150,
				"value"                 => array(
					__( 'Auto', "ts_visual_composer_extend" )                 	=> "auto",
					__( 'Set Width (%)', "ts_visual_composer_extend" )        	=> "widthpercent",
					__( 'Set Width (px)', "ts_visual_composer_extend" )       	=> "widthpixel",
				),
				"description"           => __( "Select how the maximum element width inside the lightbox should be determined.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_lightbox", 'value' => 'true' ),
				"group" 				=> "Lightbox Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Maximum Lightbox Width", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_width_percent",
				"value"                 => "100",
				"min"                   => "25",
				"max"                   => "100",
				"step"                  => "1",
				"unit"                  => '%',
				"description"           => __( "Select the maximum element width inside the lightbox in percent.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "lightbox_width", 'value' => 'widthpercent' ),
				"group" 				=> "Lightbox Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Maximum Lightbox Width", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_width_pixel",
				"value"                 => "960",
				"min"                   => "1",
				"max"                   => "1920",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the maximum element width inside the lightbox in px.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "lightbox_width", 'value' => 'widthpixel' ),
				"group" 				=> "Lightbox Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Maximum Lightbox Height", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_height",
				"width"                 => 150,
				"value"                 => array(
					__( 'Auto', "ts_visual_composer_extend" )                 	=> "auto",
					__( 'Set Height (%)', "ts_visual_composer_extend" )      	=> "heightpercent",
					__( 'Set Height (px)', "ts_visual_composer_extend" )      	=> "heightpixel",
				),
				"description"           => __( "Select how the maximum element height inside the lightbox should be determined.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_lightbox", 'value' => 'true' ),
				"group" 				=> "Lightbox Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Maximum Lightbox Height", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_height_percent",
				"value"                 => "100",
				"min"                   => "25",
				"max"                   => "100",
				"step"                  => "1",
				"unit"                  => '%',
				"description"           => __( "Select the maximum element height inside the lightbox in percent.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "lightbox_height", 'value' => 'heightpercent' ),
				"group" 				=> "Lightbox Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Maximum Lightbox Height", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_height_pixel",
				"value"                 => "540",
				"min"                   => "100",
				"max"                   => "1080",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the maximum element height inside the lightbox in px.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "lightbox_height", 'value' => 'heightpixel' ),
				"group" 				=> "Lightbox Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Group Name", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_group_name",
				"value"                 => "nachogroup",
				"description"           => __( "Enter a custom group name to manually build group with other non-gallery items; leave empty for non-grouping", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_lightbox", 'value' => "true" ),
				"group" 				=> "Lightbox Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Transition Effect", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_effect",
				"width"                 => 150,
				"value"                 => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Lightbox_Animations,
				"default" 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Default_Animation,
				"std" 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Default_Animation,
				"admin_label"           => true,
				"description"           => __( "Select the transition effect to be used for the image in the lightbox.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_lightbox", 'value' => "true" ),
				"group" 				=> "Lightbox Settings",
			),
			// Tooltip Settings
			array(
				"type"				    => "seperator",
				"param_name"		    => "seperator_5",
				"seperator"				=> "Tooltip",
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"           	=> __( "Use Advanced Tooltip", "ts_visual_composer_extend" ),
				"param_name"        	=> "content_tooltip_css",
				"value"             	=> "false",
				"description"		    => __( "Switch the toggle if you want to apply am advanced tooltip to the video trigger.", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"				    => "textarea",
				"class"				    => "",
				"heading"			    => __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"		    => "content_tooltip_content",
				"value"				    => "",
				"description"		    => __( "Enter the tooltip content here (do not use quotation marks or HTML code).", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_tooltip_css", 'value' => "false" ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"              	=> "textarea_raw_html",
				"heading"           	=> __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"        	=> "content_tooltip_encoded",
				"value"             	=> base64_encode(""),
				"description"      	 	=> __( "Enter the tooltip content here (HTML code can be used).", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "content_tooltip_css", 'value' => "true" ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"				    => "dropdown",
				"class"				    => "",
				"heading"			    => __( "Tooltip Position", "ts_visual_composer_extend" ),
				"param_name"		    => "content_tooltip_position",
				"value"                 => array(
					__("Top", "ts_visual_composer_extend")                    => "ts-simptip-position-top",
					__("Bottom", "ts_visual_composer_extend")                 => "ts-simptip-position-bottom",
				),
				"description"		    => __( "Select the tooltip position in relation to the image.", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"				    => "dropdown",
				"class"				    => "",
				"heading"			    => __( "Tooltip Style", "ts_visual_composer_extend" ),
				"param_name"		    => "content_tooltip_style",
				"value"                 => array(
					__("Black", "ts_visual_composer_extend")                  => "",
					__("Gray", "ts_visual_composer_extend")                   => "ts-simptip-style-gray",
					__("Green", "ts_visual_composer_extend")                  => "ts-simptip-style-green",
					__("Blue", "ts_visual_composer_extend")                   => "ts-simptip-style-blue",
					__("Red", "ts_visual_composer_extend")                    => "ts-simptip-style-red",
					__("Orange", "ts_visual_composer_extend")                 => "ts-simptip-style-orange",
					__("Yellow", "ts_visual_composer_extend")                 => "ts-simptip-style-yellow",
					__("Purple", "ts_visual_composer_extend")                 => "ts-simptip-style-purple",
					__("Pink", "ts_visual_composer_extend")                   => "ts-simptip-style-pink",
					__("White", "ts_visual_composer_extend")                  => "ts-simptip-style-white"
				),
				"description"		    => __( "Select the tooltip style.", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
			),
			// Other Settings
			array(
				"type"				    => "seperator",
				"param_name"		    => "seperator_6",
				"seperator"				=> "Other Settings",
				"group"					=> "Other Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"            => "margin_top",
				"value"                 => "0",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
				"group"					=> "Other Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Margin: Bottom", "ts_visual_composer_extend" ),
				"param_name"            => "margin_bottom",
				"value"                 => "0",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
				"group"					=> "Other Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"            => "el_id",
				"value"                 => "",
				"description"           => __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
				"group"					=> "Other Settings",
			),
			array(
				"type"                  => "tag_editor",
				"heading"           	=> __( "Extra Class Names", "ts_visual_composer_extend" ),
				"param_name"            => "el_class",
				"value"                 => "",
				"description"      		=> __( "Enter additional class names for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
		)
	);
	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>