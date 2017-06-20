<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "nadea_wp";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'nadea_wp/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

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
        'allow_sub_menu'       => false,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Nadea Options', 'nadea_wp' ),
        'page_title'           => __( 'Nadea Options', 'nadea_wp' ),
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
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
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
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
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

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
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
        'title' => __( 'Documentation', 'nadea_wp' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'nadea_wp' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'nadea_wp' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'http://themeforest.net/user/nadea_wp/portfolio?ref=webRedox',
        'title' => 'Visit us on Envato',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/webRedox',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/webRedox',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://plus.google.com/114758098200068619793/',
        'title' => 'Find us on Google+',
        'icon'  => 'el-icon-googleplus'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'nadea_wp' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'nadea_wp' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'nadea_wp' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'nadea_wp' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'nadea_wp' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'nadea_wp' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'nadea_wp' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'nadea_wp' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
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
                    'icon'   => 'el-icon-home-alt',
                    'title'  => __( 'General Settings', 'nadea_wp' ),
                    'fields' => array(

                     array(
							'id' => 'logopic',
							'type' => 'media',
							'compiler' => 'true',
							'title' => __('Upload Logo', 'nadea_wp'),
							'subtitle' => __('Upload a image not more than 100px X 50px .jpg, .png or .gif image that will be your site logo.', 'nadea_wp')
					),	
					
					array(
                    'id' => 'logo_padding',
                    'type' => 'spacing',
                    'units' => array('px','em','%'),
                    'output' => array('.ndheaderv-9 img.site-logo, .ndheaderv-4 img.site-logo, .ndheaderv-3 img.site-logo, .ndheaderv-2 img.site-logo, .ndheaderv-1 img.site-logo, .img.site-logo'), // An array of CSS selectors to apply this font style to
                    'mode' => 'padding', // absolute, padding, margin, defaults to padding
                    'title' => __('Logo Padding', 'framework'),
                    'default' => array('padding-top' => '', 'padding-right' => "", 'padding-bottom' => '', 'padding-left' => '')
					),					

                    array(
							'id' => 'logotext',
							'type' => 'text',
							'title' => __('Text Logo', 'nadea_wp'),
							'sub_desc' => __('Write a title of your website text logo', 'nadea_wp'),
							'desc' => '',
							
					),					
					
					array(
							'id' => 'favicon',
							'type' => 'media',
							'title' => __('Favicon Upload', 'nadea_wp'),
							'subtitle' => __('Upload a 16px x 16px .png or .gif image that will be your favicon.', 'nadea_wp'),
							'compiler' => 'true'
					),	

			        array(
							'id' => 'website-preloader',
							'type' => 'button_set',
							'title' => __('Website Pre-loader', 'nadea_wp'),
							'default'  => 'no',
							'options' => array(
									'yes'=> __('Enable', 'nadea_wp'),
									'no'=> __('Disable', 'nadea_wp'),
							),
							
					),					
				
				  )
                ));	
				 
				 Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-cogs',
                    'title'  => __( 'Page Settings', 'nadea_wp' ),
                    'fields' => array(
					
			        array(
							'id' => 'header-search-box',
							'type' => 'button_set',
							'title' => __('Header Search Box', 'nadea_wp'),
							'default'  => 'no',
							'options' => array(
									'yes'=> __('Enable', 'nadea_wp'),
									'no'=> __('Disable', 'nadea_wp'),
							),
							
					),					
					
			        array(
							'id' => 'page-banner',
							'type' => 'button_set',
							'title' => __('Show Page Banner', 'nadea_wp'),
							'default'  => 'yes',
							'options' => array(
									'yes'=> __('Yes', 'nadea_wp'),
									'no'=> __('No', 'nadea_wp'),
							),
							
					),					
					
			        array(
							'id' => 'page-title',
							'type' => 'button_set',
							'title' => __('Show Page Title', 'nadea_wp'),
							'options' => array(
									'yes'=> __('Yes', 'nadea_wp'),
									'no'=> __('No', 'nadea_wp'),
							),
							'default'  => 'yes',
							'required' => array('page-banner', '=' , 'yes')
					),					
					
			        array(
							'id' => 'breadcrumbs',
							'type' => 'button_set',
							'title' => __('Show Breadcrumbs', 'nadea_wp'),
							'options' => array(
									'yes'=> __('Yes', 'nadea_wp'),
									'no'=> __('No', 'nadea_wp'),
							),
							'default'  => 'yes',
							'required' => array('page-banner', '=' , 'yes')
					),	
					
                    )
                ));
				
				
				 Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-address-book',
                    'title'  => __( 'Blog Settings', 'nadea_wp' ),
                    'fields' => array(					
					
						array(
							'id' => 'blog-title',
							'type' => 'text',
							'title' => __('Blog Page Title', 'nadea_wp'),
							'subtitle' => __('Write blog page title here.', 'nadea_wp'),
							'default' => '',
							'validate' => 'no_special_chars'
							
					),	

						array(
							'id' => 'blog-single-title',
							'type' => 'text',
							'title' => __('Blog Single Page Title', 'nadea_wp'),
							'subtitle' => __('Write blog single page title here.', 'nadea_wp'),
							'default' => '',
							'validate' => 'no_special_chars'
							
					),					

			        array(
							'id' => 'blogauthorinfo',
							'type' => 'button_set',
							'title' => __('Show Author Info', 'nadea_wp'),
							'subtitle' => __('Show author info at single page.', 'nadea_wp'),
							'options' => array(
									'yes'=> __('Yes', 'nadea_wp'),
									'no'=> __('No', 'nadea_wp'),
							),
							'default'  => 'yes'
					),	
					
			        array(
							'id' => 'blog-sidebar-lr',
							'type' => 'button_set',
							'title' => __('Choose Sidebar Style', 'nadea_wp'),
							'subtitle' => __('Sidebar style for blog single, archives, category, tag & search page.', 'nadea_wp'),
							'options' => array(
									'yes'=> __('Right Sidebar', 'nadea_wp'),
									'no'=> __('Left Sidebar', 'nadea_wp'),
							),
							'default'  => 'yes'
					),						
						
					
                    )
                ));
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-brush',
                    'title'  => __( 'Styling', 'nadea_wp' ),
                    'fields' => array(
					
						array(
                            'id'       => 'opt-theme-style',
                            'type'     => 'color',
                            'title'    => __( 'Theme Color', 'nadea_wp' ),
                            'subtitle' => __( 'Only color validation can be done on this field type', 'nadea_wp' ),
                            'desc'     => __( '', 'nadea_wp' ),
                            //'regular'   => false, // Disable Regular Color
                            //'hover'     => false, // Disable Hover Color
                            //'active'    => false, // Disable Active Color
                            //'visited'   => true,  // Enable Visited Color
                            
                        ),					
					array(
                        'id'        => 'custom-css',
                        'type'      => 'ace_editor',
                        'title'     => __('Custom CSS', 'nadea_wp'),
                        'subtitle'  => __('Write your CSS code here.', 'nadea_wp'),
                        'mode'      => 'css',
						'theme'    => 'monokai',
                        
                    ),
														
				
					
					)
                ));				
					

            Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-smiley-alt',
                    'title'  => __( 'Social Icons', 'nadea_wp' ),
                    'fields' => array(
					
					

			 array(
                'id'        => 'facebook',
                'type'      => 'text',
                'title'     => __('Facebook Link', 'nadea_wp'),
                'subtitle'  => __('Write your facebook url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate'  => ''
            ),

             array(
                'id'        => 'twitter',
                'type'      => 'text',
                'title'     => __('Twitter Link', 'nadea_wp'),
                'subtitle'  => __('Write your twitter url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),

             array(
                'id'        => 'google',
                'type'      => 'text',
                'title'     => __('Google+ Link', 'nadea_wp'),
                'subtitle'  => __('Write your google+ url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),

             array(
                'id'        => 'linkedin',
                'type'      => 'text',
                'title'     => __('LinkedIn Link', 'nadea_wp'),
                'subtitle'  => __('Write your linkedin url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),

             array(
                'id'        => 'instagram',
                'type'      => 'text',
                'title'     => __('Instagram Link', 'nadea_wp'),
                'subtitle'  => __('Write your instagram url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),

             array(
                'id'        => 'pinterest',
                'type'      => 'text',
                'title'     => __('Pinterest Link', 'nadea_wp'),
                'subtitle'  => __('Write your pinterest url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),
			
             array(
                'id'        => 'behance',
                'type'      => 'text',
                'title'     => __('Behance link', 'nadea_wp'),
                'subtitle'  => __('Write your behance url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),

             array(
                'id'        => 'soundcloud',
                'type'      => 'text',
                'title'     => __('Soundcloud Link', 'nadea_wp'),
                'subtitle'  => __('Write your soundcloud url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),

             array(
                'id'        => 'skype',
                'type'      => 'text',
                'title'     => __('Skype Link', 'nadea_wp'),
                'subtitle'  => __('Write your skype url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),

             array(
                'id'        => 'youtube',
                'type'      => 'text',
                'title'     => __('Youtube Link', 'nadea_wp'),
                'subtitle'  => __('Write your youtube url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),
             
			 
			 array(
                'id'        => 'dribbble',
                'type'      => 'text',
                'title'     => __('Dribbble Link', 'nadea_wp'),
                'subtitle'  => __('Write your dribbble url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),

             array(
                'id'        => 'git-square',
                'type'      => 'text',
                'title'     => __('Git Link:', 'nadea_wp'),
                'subtitle'  => __('Write your git url', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),

             array(
                'id'        => 'email',
                'type'      => 'text',
                'title'     => __('E-mail:', 'nadea_wp'),
                'subtitle'  => __('Write your e-mail address', 'nadea_wp'),
                'dece'      => __('','nadea_wp'),
				'validate' => ''
            ),           	
                    )
                ));
								
				
			 Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-list',
                    'title'  => __( 'Footer Settings', 'nadea_wp' ),
                    'fields' => array(

			        array(
							'id' => 'footer-left',
							'type' => 'button_set',
							'title' => __('Footer Menu', 'nadea_wp'),
							'default'  => 'yes',
							'options' => array(
									'yes'=> __('Enable', 'nadea_wp'),
									'no'=> __('Disable', 'nadea_wp'),
							),
							
					),					
					
			        array(
							'id' => 'footer-text',
							'type' => 'editor',
							'title' => __('Footer Text', 'nadea_wp'),
							'subtitle' => __('Write your footer text here.', 'nadea_wp'),
							'validate' => '',
							'required' => array('footer-left', '=' , 'no')
					),															
					
					array(
							'id' => 'copyright',
							'type' => 'editor',
							'wpautop'=>true,
							'compiler' => 'true',
							'title' => __('Copyright Text', 'nadea_wp'),
							'subtitle' => __('Write a Copyright text of your WebSite', 'nadea_wp'),
							'default'          => '&copy; 2015 Nade<span class="font-color">a</span>  - Build with passion by <small class="dsauthor"><a href="http://webredox.net/" target="_blank">webRedox</a></small>',
							'args'   => array(
								'teeny'            => true,
								'textarea_rows'    => 10
							)
					),

			
			
					)
                ));
				
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-key',
                    'title'  => __( 'Documentation', 'nadea_wp' ),
                    'fields' => array(					
					
					array(
							'id' => 'docs',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => __('Nadea Theme Documentation', 'marvela_wp'),
							'desc' => __('<a href="http://webredox.net/demo/wp/nadea/doc/documentation.html" target="_blank">Click Here</a> To get the theme documentation.', 'marvela_wp')
							
					),	

			
			
					)
                ));		
	
	
    
    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'nadea_wp' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'nadea_wp' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

