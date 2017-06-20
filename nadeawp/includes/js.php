<?php

if( !function_exists ('nadea_wp_enqueue_scripts') ) :
	function nadea_wp_scripts() {
		
		
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/includes/js/bootstrap.js', array('jquery'), '1.0',true);
		wp_enqueue_script('jqueryappear', get_template_directory_uri() . '/includes/js/lib/jquery.appear.js', array('jquery'), '1.0',true);
		wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/includes/js/lib/owl-carousel/owl.carousel.min.js', array('jquery'), '1.0',true);		
		wp_enqueue_script('isotope', get_template_directory_uri() . '/includes/js/lib/isotope.pkgd.min.js', array('jquery'), '1.0',true);
		wp_enqueue_script('jquery.ui.widget', get_template_directory_uri() . '/includes/js/jquery.ui.widget.min.js', array('jquery'), '1.0',true);
		wp_enqueue_script('jquery.ui.rlightbox', get_template_directory_uri() . '/includes/js/jquery.ui.rlightbox.js', array('jquery'), '1.0',true);
		wp_enqueue_script('ms.dropdown', get_template_directory_uri() . '/includes/js/ms-drop-down.js', array('jquery'), '1.0',true);
		wp_enqueue_script('easy.tabs', get_template_directory_uri() . '/includes/js/easy-tabs.js', array('jquery'), '1.0',true);
		wp_enqueue_script('main', get_template_directory_uri() . '/includes/js/main.js', array('jquery'), '1.0',true);
		
}
	add_action('wp_enqueue_scripts', 'nadea_wp_scripts');
endif;