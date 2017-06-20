<?php


/* DEFINE CUSTOM POST TYPE FOR CITY: BERLIN ------  */
if( ! function_exists( 'portfolio_post_types' ) ) {
    function portfolio_post_types() {

        register_post_type(
            'portfolio',
            array(
                'labels' => array(
                    'name'          => __( 'Kurse Berlin', 'portfolio' ),
                    'singular_name' => __( 'Kurs Berlin', 'portfolio' ),
                    'add_new'       => __( 'Hinzuf&uuml;gen', 'portfolio' ),
                    'add_new_item'  => __( 'Neuen Kurs hinzuf&uuml;gen', 'portfolio' ),
                    'edit'          => __( 'Edit', 'portfolio' ),
                    'edit_item'     => __( 'Edit Kurs', 'portfolio' ),
                    'new_item'      => __( 'New Kurs', 'portfolio' ),
                    'view'          => __( 'View Kurs', 'portfolio' ),
                    'view_item'     => __( 'View Kurs', 'portfolio' ),
                    'search_items'  => __( 'Search Kurs', 'portfolio' ),
                    'not_found'     => __( 'No Kurs item found', 'portfolio' ),
                    'not_found_in_trash' => __( 'No portfolio item found in Trash', 'portfolio' ),
                    'parent'        => __( 'Parent Kurs', 'portfolio' ),
                ),
                
                'description'       => __( 'Create a Berlin Kurs.', 'portfolio' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
				'rewrite' 			=> array( 'slug' => 'berlin/kurse'),
                'publicly_queryable'    => true,
                'exclude_from_search'   => false,
                'menu_position'         => 6,
                'hierarchical'      => false,
                'query_var'         => true,
				'menu_icon' => 'dashicons-portfolio',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
					'page-attributes',
                    
                )
            )
        );
register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => 'Kategorien', 'singular_name' => 'Kategorie', "rewrite" => true, "query_var" => true, 'slug' => 'kurse'));
        
        
    }
}

add_action( 'init', 'portfolio_post_types' ); // register post type
/* END ****** DEFINE CUSTOM POST TYPE FOR CITY: BERLIN ------  */




/* DEFINE CUSTOM POST TYPE FOR CITY: MUNICH ------  */

if( ! function_exists( 'kurse_muenchen_post_types' ) ) {
    function kurse_muenchen_post_types() {

        register_post_type(
            'kurse-muenchen',
            array(
                'labels' => array(
                    'name'          => __( 'Kurse M&uuml;nchen', 'kurse-muenchen' ),
                    'singular_name' => __( 'Kurs M&uuml;nchen', 'kurse-muenchen' ),
                    'add_new'       => __( 'Hinzuf&uuml;gen', 'kurse-muenchen' ),
                    'add_new_item'  => __( 'Neuen Kurs hinzuf&uuml;gen', 'kurse-muenchen' ),
                    'edit'          => __( 'Edit', 'kurse-muenchen' ),
                    'edit_item'     => __( 'Edit Kurs', 'kurse-muenchen' ),
                    'new_item'      => __( 'New Kurs', 'kurse-muenchen' ),
                    'view'          => __( 'View Kurs', 'kurse-muenchen' ),
                    'view_item'     => __( 'View Kurs', 'kurse-muenchen' ),
                    'search_items'  => __( 'Search Kurs', 'kurse-muenchen' ),
                    'not_found'     => __( 'No Kurs item found', 'kurse-muenchen' ),
                    'not_found_in_trash' => __( 'No kurse-muenchen item found in Trash', 'kurse-muenchen' ),
                    'parent'        => __( 'Parent Kurs', 'kurse-muenchen' ),
                ),
                
                'description'       => __( 'Neuer Muenchen Kurs.', 'kurse-muenchen' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
				'rewrite' 			=> array( 'slug' => 'muenchen/kurse'),
                'publicly_queryable'    => true,
                'exclude_from_search'   => false,
                'menu_position'         => 7,
                'hierarchical'      => false,
                'query_var'         => true,
				'menu_icon' => 'dashicons-portfolio',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
					'page-attributes',
                    
                )
            )
        );
register_taxonomy('kurse_muenchen_category', 'kurse-muenchen', array('hierarchical' => true, 'label' => 'Kategorien', 'singular_name' => 'Kategorie', "rewrite" => true, "query_var" => true, 'slug' => 'kurse-muc'));
        
        
    }
}

add_action( 'init', 'kurse_muenchen_post_types' ); // register post type

/* END DEFINE CUSTOM POST TYPE FOR CITY: MUNIC ------  */

/* DEFINE CUSTOM POST TYPE FOR CITY: FRANKFURT ------  */

if( ! function_exists( 'kurse_frankfurt_post_types' ) ) {
    function kurse_frankfurt_post_types() {

        register_post_type(
            'kurse-frankfurt',
            array(
                'labels' => array(
                    'name'          => __( 'Kurse Frankfurt', 'kurse-frankfurt' ),
                    'singular_name' => __( 'Kurs Frankfurt', 'kurse-frankfurt' ),
                    'add_new'       => __( 'Hinzuf&uuml;gen', 'kurse-frankfurt' ),
                    'add_new_item'  => __( 'Neuen Kurs hinzuf&uuml;gen', 'kurse-frankfurt' ),
                    'edit'          => __( 'Edit', 'kurse-frankfurt' ),
                    'edit_item'     => __( 'Edit Kurs', 'kurse-frankfurt' ),
                    'new_item'      => __( 'New Kurs', 'kurse-frankfurt' ),
                    'view'          => __( 'View Kurs', 'kurse-frankfurt' ),
                    'view_item'     => __( 'View Kurs', 'kurse-frankfurt' ),
                    'search_items'  => __( 'Search Kurs', 'kurse-frankfurt' ),
                    'not_found'     => __( 'No Kurs item found', 'kurse-frankfurt' ),
                    'not_found_in_trash' => __( 'No kurse-frankfurt item found in Trash', 'kurse-frankfurt' ),
                    'parent'        => __( 'Parent Kurs', 'kurse-frankfurt' ),
                ),
                
                'description'       => __( 'Neuer Frankfurt Kurs.', 'kurse-frankfurt' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
				'rewrite' 			=> array( 'slug' => 'frankfurt/kurse'),
                'publicly_queryable'    => true,
                'exclude_from_search'   => false,
                'menu_position'         => 8,
                'hierarchical'      => false,
                'query_var'         => true,
				'menu_icon' => 'dashicons-portfolio',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
					'page-attributes',
                    
                )
            )
        );
register_taxonomy('kurse_frankfurt_category', 'kurse-frankfurt', array('hierarchical' => true, 'label' => 'Kategorien', 'singular_name' => 'Kategorie', "rewrite" => true, "query_var" => true, 'slug' => 'kurse-fra'));
        
        
    }
}

add_action( 'init', 'kurse_frankfurt_post_types' ); // register post type

/* END DEFINE CUSTOM POST TYPE FOR CITY: FRANKFURT ------  */


/* DEFINE CUSTOM POST TYPE FOR CITY: HAMBURG ------  */

if( ! function_exists( 'kurse_hamburg_post_types' ) ) {
    function kurse_hamburg_post_types() {

        register_post_type(
            'kurse-hamburg',
            array(
                'labels' => array(
                    'name'          => __( 'Kurse Hamburg', 'kurse-hamburg' ),
                    'singular_name' => __( 'Kurs Hamburg', 'kurse-hamburg' ),
                    'add_new'       => __( 'Hinzuf&uuml;gen', 'kurse-hamburg' ),
                    'add_new_item'  => __( 'Neuen Kurs hinzuf&uuml;gen', 'kurse-hamburg' ),
                    'edit'          => __( 'Edit', 'kurse-hamburg' ),
                    'edit_item'     => __( 'Edit Kurs', 'kurse-hamburg' ),
                    'new_item'      => __( 'New Kurs', 'kurse-hamburg' ),
                    'view'          => __( 'View Kurs', 'kurse-hamburg' ),
                    'view_item'     => __( 'View Kurs', 'kurse-hamburg' ),
                    'search_items'  => __( 'Search Kurs', 'kurse-hamburg' ),
                    'not_found'     => __( 'No Kurs item found', 'kurse-hamburg' ),
                    'not_found_in_trash' => __( 'No kurse-hamburg item found in Trash', 'kurse-hamburg' ),
                    'parent'        => __( 'Parent Kurs', 'kurse-hamburg' ),
                ),
                
                'description'       => __( 'Neuer Hamburg Kurs.', 'kurse-hamburg' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
				'rewrite' 			=> array( 'slug' => 'hamburg/kurse'),
                'publicly_queryable'    => true,
                'exclude_from_search'   => false,
                'menu_position'         => 9,
                'hierarchical'      => false,
                'query_var'         => true,
				'menu_icon' => 'dashicons-portfolio',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
					'page-attributes',
                    
                )
            )
        );
register_taxonomy('kurse_hamburg_category', 'kurse-hamburg', array('hierarchical' => true, 'label' => 'Kategorien', 'singular_name' => 'Kategorie', "rewrite" => true, "query_var" => true, 'slug' => 'kurse-ham'));
        
        
    }
}

add_action( 'init', 'kurse_hamburg_post_types' ); // register post type

/* END DEFINE CUSTOM POST TYPE FOR CITY: HAMBURG ------  */





register_taxonomy_for_object_type('category', 'custom-type');

if( ! function_exists( 'team_post_types' ) ) {
    function team_post_types() {

        register_post_type(
            'team',
            array(
                'labels' => array(
                    'name'          => __( 'Team', 'team' ),
                    'singular_name' => __( 'Team', 'team' ),
                    'add_new'       => __( 'Add New', 'team' ),
                    'add_new_item'  => __( 'Add New Team Member', 'team' ),
                    'edit'          => __( 'Edit', 'team' ),
                    'edit_item'     => __( 'Edit Team', 'team' ),
                    'new_item'      => __( 'New Team', 'team' ),
                    'view'          => __( 'View Team', 'team' ),
                    'view_item'     => __( 'View Team', 'team' ),
                    'search_items'  => __( 'Search Team', 'team' ),
                    'not_found'     => __( 'No Team Item found', 'team' ),
                    'not_found_in_trash' => __( 'No Team item found in Trash', 'team' ),
                    'parent'        => __( 'Parent Team', 'team' ),
                ),
                
                'description'       => __( 'Create a Team.', 'team' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 8,
                'hierarchical'      => true,
                'query_var'         => true,
				'menu_icon' => 'dashicons-id-alt',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
//register_taxonomy('team_category', 'team', array('hierarchical' => true, 'label' => 'Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
        
        

    }
}

//add_action( 'init', 'team_post_types' ); // register post type

//register_taxonomy_for_object_type('category', 'custom-type');

// Add class to <li> 

function add_menu_parent_class($items)
{

    $parents=array();
    foreach($items as $item){

        if($item->menu_item_parent && $item->menu_item_parent>0){
            $parents[]=$item->menu_item_parent;
        }
    }
    foreach($items as $item){
        if(in_array($item->ID,$parents)){
            $item->classes[]='current';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects','add_menu_parent_class');


class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $object, $depth = 0, $args = Array() , $current_object_id = 0) {
           
           global $wp_query;

           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $object->classes ) ? array() : (array) $object->classes;
           $icon_class = $classes[0];
       $classes = array_slice($classes,1);

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $object ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           

           $attributes  = ! empty( $object->attr_title ) ? ' title="'  . esc_attr( $object->attr_title ) .'"' : '';
           $attributes .= ! empty( $object->target )     ? ' target="' . esc_attr( $object->target     ) .'"' : '';
           $attributes .= ! empty( $object->xfn )        ? ' rel="'    . esc_attr( $object->xfn        ) .'"' : '';
            
           

           if($object->object == 'page')
           {
                $varpost = get_post($object->object_id);                
                $separatepages = get_post_meta($object->object_id, "rnr_open_page", true);
                $disable_menu = get_post_meta($object->object_id, "rnr_disable_section_from_menu", true);
        $current_page_id = get_option('page_on_front');

                if ( ( $disable_menu != true ) && ( $varpost->ID != $current_page_id ) ) {

                  $output .= $indent . '<li id="menu-item-'. $object->ID . '" class="page-scroll">';

                  if ( $separatepages == true )
                    $attributes .= ! empty( $object->url ) ? ' href="'   . esc_attr( $object->url ) .'"' : '';
                  else{
                    if (is_front_page()) 
                      $attributes .= ' href="#' . $varpost->post_name . '"'; 
                    else 
                      $attributes .= ' href=" '. home_url().'/#'. $varpost->post_name .'"';
                  } 

                  $object_output = $args->before;
                $object_output .= '<a class="scroll"'. $attributes .' data-toggle="my-scrollspy-2">';
                $object_output .= $args->link_before . '' . apply_filters( 'the_title', $object->title, $object->ID ) . '';
                $object_output .= $args->link_after;
                $object_output .= '</a>';
                $object_output .= $args->after;    

                 $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );                              
                }
                                         
           }
          
           
      }
}


add_action( 'after_setup_theme', 'mo_setup' );


// Multiple feature image add to post type
if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 2',
'id' => 'featured_image_2',
'post_type' => 'post'
 ) );

 }
 
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 3',
'id' => 'featured_image_3',
'post_type' => 'post'
 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 4',
'id' => 'featured_image_4',
'post_type' => 'post'
 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 5',
'id' => 'featured_image_5',
'post_type' => 'post'
 ) );

 }
 

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once (get_template_directory().'/framework/class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

       

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Redux Framework',
            'slug'      => 'redux-framework',
            'required'  => true,
        ),
		
		array(
            'name'      => 'Redux Developer Mode Disabler',
            'slug'      => 'redux-developer-mode-disabler',
            'required'  => true,
        ),
		
        array(
            'name'      => 'Visual Composer',
            'slug'      => 'js_composer',
			'source'    => 'http://webredox.net/plugins/js_composer.zip',
            'required'  => true,
        ),			
		
		array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
		
		array(
            'name'      => 'WP-PostViews',
            'slug'      => 'wp-postviews',
            'required'  => true,
        ),
		
		array(
            'name'      => 'MailPoet Newsletters',
            'slug'      => 'wysija-newsletters',
            'required'  => true,
        ),

		array(
            'name'      => 'Multiple Post Thumbnails',
            'slug'      => 'multiple-post-thumbnails',
            'required'  => true,
        ),		
		
		array(
            'name'               => 'Revolution Slider', 
            'slug'               => 'revslider',
            'source'             => 'http://webredox.net/plugins/revslider.zip',
            'required'           => false,  
        ),	
		

    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
       
    );

    tgmpa( $plugins, $config );

}

    
if( !function_exists('tm_fix_shortcodes') ) {
function tm_fix_shortcodes($content){ 
$array = array (
'<p>[' => '[', 
']</p>' => ']', 
']<br />' => ']'
);
$content = strtr($content, $array);
return $content;
}
add_filter('the_content', 'tm_fix_shortcodes');
}  
