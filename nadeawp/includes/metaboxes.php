<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/docs/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'rnr_';

global $meta_boxes;

$meta_boxes = array();

global $smof_data;

/* ----------------------------------------------------- */
// Page Settings
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'id' => 'pageseting',
	'title' => 'Page Settings',
	'pages' => array( 'page' ),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
	
		array(
			'name'     => __( 'Page Header', 'pghd' ),
			'id'   => $prefix . 'page-header',
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'style1' => __( 'Style 1', 'pghd' ),
				'style2' => __( 'Style 2', 'pghd' ),
				'style3' => __( 'Style 3', 'pghd' ),
				'style4' => __( 'Style 4', 'pghd' ),
				'style5' => __( 'Style 5', 'pghd' ),
				
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'style1',

		),	
		
		array(
			'name'     => __( 'Header Search Box', 'hdsr' ),
			'id'   => $prefix . 'header-search-box',
			'type'     => 'radio',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => __( 'Enable', 'hdsr' ),
				'no' => __( 'Disable', 'hdsr' ),
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'no',

		),			
	
		array(
			'name'     => __( 'Page Header Banner', 'rwmb' ),
			'id'   => $prefix . 'page-banner-on-off',
			'type'     => 'radio',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => __( 'On', 'rwmb' ),
				'no' => __( 'Off', 'rwmb' ),
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'yes',

		),		
		
		array(
			'name'     => __( 'Page Title Show', 'phbr' ),
			'id'   => $prefix . 'page-title-show',
			'type'     => 'radio',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => __( 'Yes', 'phbr' ),
				'no' => __( 'No', 'phbr' ),
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'yes',

		),				

		array(
			'name'     => __( 'Page Layout', 'pgly' ),
			'id'   => $prefix . 'page-layout',
			'type'     => 'image_select',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
			    'full'   => __( get_template_directory_uri().'/includes/metaboxes/img/full.png', 'pgly' ),
			    'left'   => __( get_template_directory_uri().'/includes/metaboxes/img/left.png', 'pgly' ),
			    'right'  => __( get_template_directory_uri().'/includes/metaboxes/img/right.png', 'pgly' ),
			    'default'   => __( get_template_directory_uri().'/includes/metaboxes/img/default.png', 'pgly' ),
			),
            'std'   => 'default',
            'radio'     => true,			

		),	

		
	
	)
);

/* ----------------------------------------------------- */
// Revolution Slider
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'id' => 'rnr-rev-slider',
	'title' => 'Page Slider Options',
	'pages' => array( 'page'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
	
		array(
			'name'     => __( 'Revolution Slider', 'rvsl' ),
			'id'   => $prefix . 'revolution',
			'desc'		=> 'Select "Home Page Template" At Page Attributes Template Option',
			'type'     => 'radio',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => __( 'Enable', 'rvsl' ),
				'no' => __( 'Disable', 'rvsl' ),
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'no',

		),	
		
		array(
			'name'		=> 'Revolution Slider Shortcode',
			'id'		=> $prefix . 'rev-alias',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),

		
	)
);

/* ----------------------------------------------------- */
// Blog Page Settings
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'id' => 'blogpageseting',
	'title' => 'Blog Page Settings',
	'pages' => array( 'page' ),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(				

		array(
			'name'     => __( 'Blog Page Layout', 'bgly' ),
			'id'   => $prefix . 'blog-page-layout',
			'type'     => 'image_select',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
			    'full'   => __( get_template_directory_uri().'/includes/metaboxes/img/full.png', 'bgly' ),
			    'left'   => __( get_template_directory_uri().'/includes/metaboxes/img/left.png', 'bgly' ),
			    'right'  => __( get_template_directory_uri().'/includes/metaboxes/img/right.png', 'bgly' ),
			    'twocl'  => __( get_template_directory_uri().'/includes/metaboxes/img/2-col.png', 'bgly' ),
			),
            'default'   => 'right',
            'radio'     => true,			

		),	

			array(
				'name'       => __( 'Number Of Post Show', 'blps' ),
				'id'         => $prefix . 'blog-post-show',
				'type'       => 'slider',
				// Text labels displayed before and after value
				'prefix'     => __( '', 'blps' ),
				'suffix'     => __( ' Posts', 'blps' ),
				'js_options' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
			),	

			array(
			'name'		=> 'Exclude Category',
			'id'		=> $prefix . 'blog-post-cat',
			'desc'		=> 'Enter category name ex: web design, web development (Optional)',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
				
	
	
	)
);



/* ----------------------------------------------------- */
// Portfolio Page Settings
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'id' => 'portpageseting',
	'title' => 'Portfolio Page Settings',
	'pages' => array( 'page' ),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(				

		array(
			'name'     => __( 'Portfolio Page Layout', 'pfly' ),
			'id'   => $prefix . 'portfolio-page-layout',
			'type'     => 'image_select',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
			    'twocl'  => __( get_template_directory_uri().'/includes/metaboxes/img/2-col.png', 'pfly' ),
			    'threecl'  => __( get_template_directory_uri().'/includes/metaboxes/img/3-col.png', 'pfly' ),
			    'fourcl'  => __( get_template_directory_uri().'/includes/metaboxes/img/4-col.png', 'pfly' ),
			),
            'default'   => 'twocl',
            'radio'     => true,			

		),             	
	
	)
);



/* ----------------------------------------------------- */
// Blog Post Settings
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr-blogmeta-video',
	'title' => 'Post Format Video',
	'pages' => array( 'post'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(

		array(
			'name'		=> 'Vimeo/Youtube Video Link:',
			'id'		=> $prefix . 'bl-video',
			'desc'		=> 'Input Vimeo/Youtube Video Embed Link',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),

		
	)
);

$meta_boxes[] = array(
	'id' => 'rnr-blogmeta-audio',
	'title' => 'Post Format Audio',
	'pages' => array( 'post'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(

		array(
			'name'		=> 'Souncloud Audio Link:',
			'id'		=> $prefix . 'bl-audio',
			'desc'		=> 'Input Souncloud Audio Embed Link',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),

		
	)
);





/* ----------------------------------------------------- */
/* Portfolio Post Type Metaboxes
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'id' => 'portfolio_overview',
	'title' => 'Portfolio Overview',
	'pages' => array( 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
		array(
			'name'     => __( 'Portfolio Overview Show', 'prfov' ),
			'id'   => $prefix . 'prf-overview-on-off',
			'type'     => 'radio',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => __( 'Yes', 'prfov' ),
				'no' => __( 'No', 'prfov' ),
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'yes',

		),		
		array(
			'name'		=> 'Title Name',
			'id'		=> $prefix . 'prf_overview_title',
			'desc'		=> 'Ex: Project Overview',
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Overview Description',
			'id'		=> $prefix . 'prf_overview_des',
			'desc'		=> 'Write project overview description ex: Vestibulum pulvinar adipiscing turpis vitae at ultris.',
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
	)
);

$meta_boxes[] = array(
	'id' => 'portfolio_details',
	'title' => 'Portfolio Details',
	'pages' => array( 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
		array(
			'name'     => __( 'Portfolio Details Show', 'prfdt' ),
			'id'   => $prefix . 'prf-details-on-off',
			'type'     => 'radio',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => __( 'Yes', 'prfdt' ),
				'no' => __( 'No', 'prfdt' ),
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'yes',

		),		
		array(
			'name'		=> 'Title Name',
			'id'		=> $prefix . 'prf_details_title',
			'desc'		=> 'Ex: Project Details',
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Details Info',
			'id'		=> $prefix . 'prf_details_des',
			'desc'		=> 'Write project details info ex: &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon_check_alt2"&gt;&lt;/i&gt;WordPress&lt;/a&gt;&lt;/li&gt;',
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
	)
);

$meta_boxes[] = array(
	'id' => 'portfolio_url',
	'title' => 'Portfolio Link',
	'pages' => array( 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
		array(
			'name'     => __( 'Portfolio Link Show', 'prfln' ),
			'id'   => $prefix . 'prf-link-on-off',
			'type'     => 'radio',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => __( 'Yes', 'prfln' ),
				'no' => __( 'No', 'prfln' ),
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'yes',

		),		
		array(
			'name'		=> 'Link Name',
			'id'		=> $prefix . 'prf_link_title',
			'desc'		=> 'Ex: Launch Project',
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Link URL',
			'id'		=> $prefix . 'prf_link_url',
			'desc'		=> 'Write project link url ex: http://themeforest.net/user/webRedox/portfolio',
			'type'		=> 'text',
			'std'		=> ''
		),
		
	)
);

$meta_boxes[] = array(
	'id' => 'portfolio_social',
	'title' => 'Portfolio Social Share',
	'pages' => array( 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
		array(
			'name'     => __( 'Portfolio Social Share Show', 'prfsh' ),
			'id'   => $prefix . 'prf-social-on-off',
			'type'     => 'radio',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => __( 'Yes', 'prfsh' ),
				'no' => __( 'No', 'prfsh' ),
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'yes',

		),	
		array(
			'name'		=> 'Title Name',
			'id'		=> $prefix . 'prf_social_title',
			'desc'		=> 'Ex: Share Project',
			'type'		=> 'text',
			'std'		=> ''
		),	
		array(
			'name'		=> 'Facebook',
			'id'		=> $prefix . 'facebook_link',
			'desc'		=> 'Write Your Facebook Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Twitter',
			'id'		=> $prefix . 'twitter_link',
			'desc'		=> 'Write Your Twitter Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Google+',
			'id'		=> $prefix . 'googleplus_link',
			'desc'		=> 'Write Your Google+ Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Instagram',
			'id'		=> $prefix . 'instagram_link',
			'desc'		=> 'Write Your Instagram Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'LinkedIn',
			'id'		=> $prefix . 'linkedin_link',
			'desc'		=> 'Write Your LinkedIn Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),		
		array(
			'name'		=> 'Pinterest',
			'id'		=> $prefix . 'pinterest_link',
			'desc'		=> 'Write Your Pinterest Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),		
		array(
			'name'		=> 'Behance',
			'id'		=> $prefix . 'behance_link',
			'desc'		=> 'Write Your Behance Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),		
		array(
			'name'		=> 'Soundcloud',
			'id'		=> $prefix . 'soundcloud_link',
			'desc'		=> 'Write Your Soundcloud Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Skype',
			'id'		=> $prefix . 'skype_link',
			'desc'		=> 'Write Your Skype Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Dribbble',
			'id'		=> $prefix . 'dribbble_link',
			'desc'		=> 'Write Your Dribbble Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),		
		array(
			'name'		=> 'Youtube',
			'id'		=> $prefix . 'youtube_link',
			'desc'		=> 'Write Your Youtube Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Git-Square',
			'id'		=> $prefix . 'git_square_link',
			'desc'		=> 'Write Your Git-Square Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		)		

		
	)
);

/* ----------------------------------------------------- */
/* Team Post Type Metaboxes
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'team_social',
	'title' => 'Team Member Social Icon',
	'pages' => array( 'team' ),
	'context' => 'normal',	

	'fields' => array(

		array(
			'name'		=> 'E-mail',
			'id'		=> $prefix . 'email_link',
			'desc'		=> 'Write Your E-mail Address.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),		
		array(
			'name'		=> 'Facebook',
			'id'		=> $prefix . 'facebook_link',
			'desc'		=> 'Write Your Facebook Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Twitter',
			'id'		=> $prefix . 'twitter_link',
			'desc'		=> 'Write Your Twitter Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Google+',
			'id'		=> $prefix . 'googleplus_link',
			'desc'		=> 'Write Your Google+ Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Instagram',
			'id'		=> $prefix . 'instagram_link',
			'desc'		=> 'Write Your Instagram Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'LinkedIn',
			'id'		=> $prefix . 'linkedin_link',
			'desc'		=> 'Write Your LinkedIn Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),		
		array(
			'name'		=> 'Pinterest',
			'id'		=> $prefix . 'pinterest_link',
			'desc'		=> 'Write Your Pinterest Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),		
		array(
			'name'		=> 'Behance',
			'id'		=> $prefix . 'behance_link',
			'desc'		=> 'Write Your Behance Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),		
		array(
			'name'		=> 'Soundcloud',
			'id'		=> $prefix . 'soundcloud_link',
			'desc'		=> 'Write Your Soundcloud Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Skype',
			'id'		=> $prefix . 'skype_link',
			'desc'		=> 'Write Your Skype Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Dribbble',
			'id'		=> $prefix . 'dribbble_link',
			'desc'		=> 'Write Your Dribbble Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),		
		array(
			'name'		=> 'Youtube',
			'id'		=> $prefix . 'youtube_link',
			'desc'		=> 'Write Your Youtube Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Git-Square',
			'id'		=> $prefix . 'git_square_link',
			'desc'		=> 'Write Your Git-Square Link.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		)		

		
	)
);


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function rocknrolla_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'rocknrolla_register_meta_boxes' );