<?php

// Theme Custom CSS Options
   include('includes/custom.php');

// Enqueue Style
   include('includes/style.php');

// Enqueue JS
   include('includes/js.php');
	
// Redux Options	
   include_once 'includes/sample-config.php';
   include_once 'includes/AfterSetupTheme.php';

// Sidebar's functionality
   include('includes/functions.php');

// Custom Widget
   include('nadea-widget/nadea-widget.php');	

// Shortcode's functionality
   include('pagination.php');

if ( ! isset( $content_width ) ) $content_width = 900;	

// register nav menu
	function mo_register_menus() {
		register_nav_menus( array( 
      'main-menu' => __( 'Primary menu','nadea_wp' ),
      'footer-menu' => __('Footer Menu ','nadea_wp'), 
		// register digitalwerkstatt custom menus
		'muc-menu' => __('Munich Menu ','nadea_wp'), 
	  	'bln-menu' => __('Berlin Menu ','nadea_wp'),
	  	'ham-menu' => __('Hamburg Menu ','nadea_wp'),
                        )
							);
	}
	add_action('init', 'mo_register_menus');


function mo_setup() {
// Theme Support  
	function wr_editor_styles() {
    add_editor_style( 'style.css' );
}
	add_action( 'after_setup_theme', 'wr_add_editor_styles' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( "title-tag" );
	add_theme_support( 'post-formats', array( 'image','video','audio','gallery' ) );
	add_post_type_support( 'portgallery', 'post-formats' );

}
// Word Limit 
	function mo_string_limit_words($string, $word_limit)
	{
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
	}


// Add post thumbnail functionality
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 559, 220, true ); // Normal post thumbnails
	add_image_size( 'home-image', 220, 220, true ); // Home Blog/Portfolio/Portfolio 4Col Thumbnail
	add_image_size( 'portfolio-single', 940, 400, true ); // Portfolio Single Thumbnail	
	add_image_size( 'portfolio-image', 460, 460, true ); // Portfolio 2Col Thumbnail
	add_image_size( 'portfolio-imagetw', 300, 300, true ); // Portfolio 3Col Thumbnail
	add_image_size( 'medium-thumbnail', 150, 137, true ); // Medium Thumbnail
	add_image_size( 'team-img', 213, 213, true ); // Team Member Thumbnail
	add_image_size( 'blog-imgtw', 455, 303, true ); // Blog 2Col Thumbnail
	add_image_size( 'blog-single', 617, 328, true ); // Blog Single Thumbnail


include(get_template_directory().'/symple-shortcodes/symple-shortcodes.php');

 
// How comments are displayed

function ck_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
      $tag = 'div';
      $add_below = 'comment';
    } else {
      $tag = 'li';
      $add_below = 'div-comment';
    }
?>
    <<?php echo balanceTags($tag) ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment">
	<div class="comment depth-1 media">
    <?php endif; ?>
   
    <div class="animation" data-animation="animation-fade-in-up">
      
        <figure><?php echo get_avatar( $comment, 92 ); ?></figure>
	       
	    <div class="content">
		   <div class="coment-head clear">
		  <h5 class="pull-left"><?php printf(__('%s','nadea'), get_comment_author_link()) ?></h5>
		   <span class="comment-meta pull-right"><?php printf( __(' %1$s  ','nadea'), comment_time('M j, Y \a\t g:i A')) ?>    <strong><?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></strong></span>
		   </div>
		  <p class="com-text clear"><?php comment_text() ?></p>
	       
	    </div>
    
    </div>    
    
<?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.','nadea') ?></em>
    <br />
<?php endif; ?>

    
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    </div>
    <?php endif; ?>
<?php
        }		
		

// create sidebar & widget area

if(function_exists('register_sidebar')) {

  function nd_theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'nadea' ),
        'id' => 'blog-sidebar',
        'description' => __( 'This area for blog widgets.', 'nadea' ),
        'before_widget' => '<div id="%1$s" class="widget sidebar-widget clear animation %2$s"  data-animation="animation-fade-in-right">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h3>', 
		'after_title'   => '</h3>'
    ) );
}
add_action( 'widgets_init', 'nd_theme_slug_widgets_init' );

function nd_theme_slug_widgets__init() {
    register_sidebar( array(
        'name' => __( 'Page Sidebar', 'nadea' ),
        'id' => 'page-sidebar',
        'description' => __( 'This area for page widgets.', 'nadea' ),
        'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h3>', 
		'after_title'   => '</h3>'
    ) );
}
add_action( 'widgets_init', 'nd_theme_slug_widgets__init' );

function nd_theme_slug_widgets____init() {
    register_sidebar( array(
        'name' => __( 'Footer Left Sidebar', 'nadea' ),
        'id' => 'footer-left-sidebar',
        'description' => __( 'This area for footer left widgets.', 'nadea' ),
        'before_widget' => '<div id="%1$s" class="widget footer-sidebar ft_left %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h1 class="texth1">', 
		'after_title'   => '</h1>'
    ) );
}
add_action( 'widgets_init', 'nd_theme_slug_widgets____init' );

function nd_theme_slug_widgets_____init() {
    register_sidebar( array(
        'name' => __( 'Footer Right Sidebar', 'nadea' ),
        'id' => 'footer-right-sidebar',
        'description' => __( 'This area for footer right widgets.', 'nadea' ),
        'before_widget' => '<div id="%1$s" class="widget footer-sidebar-right ft_center %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h3 class="fthead">', 
		'after_title'   => '</h3>'
    ) );
}
add_action( 'widgets_init', 'nd_theme_slug_widgets_____init' );

}

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if(function_exists('vc_set_as_theme')) vc_set_as_theme();

// Initialising Shortcodes
if (class_exists('WPBakeryVisualComposerAbstract')) {
	function requireVcExtend(){
		require_once locate_template('/extendvc/extend-vc.php');
	}
	add_action('init', 'requireVcExtend',2);
}

/* Include Meta Box Framework */
define( 'RWMB_URL', trailingslashit( get_template_directory_uri() . '/includes/metaboxes' ) );
define( 'RWMB_DIR', trailingslashit( get_template_directory() . '/includes/metaboxes' ) );

require_once RWMB_DIR . 'meta-box.php';
include(get_template_directory().'/includes/metaboxes.php');

