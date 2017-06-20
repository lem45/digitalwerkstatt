<?php

	function nadea_wp_style() {

		    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/includes/css/bootstrap.css');
			wp_enqueue_style('style', get_template_directory_uri() . '/includes/css/main-style.css');
			wp_enqueue_style('animations', get_template_directory_uri() . '/includes/css/css3-animations.css');
			wp_enqueue_style('responsive', get_template_directory_uri() . '/includes/css/responsive.css');
			wp_enqueue_style('jqueryui', get_template_directory_uri() . '/includes/css/jquery-ui-1.8.16.custom.css');
			wp_enqueue_style('lightbox', get_template_directory_uri() . '/includes/css/lightbox.min.css');
			wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/includes/js/lib/owl-carousel/owl.carousel.css');
			wp_enqueue_style('owltheme', get_template_directory_uri() . '/includes/js/lib/owl-carousel/owl.theme.css');
			wp_enqueue_style('owltransitions', get_template_directory_uri() . '/includes/js/lib/owl-carousel/owl.transitions.css');
			wp_enqueue_style('fontawesome', get_template_directory_uri() . '/includes/font/css/font-awesome.css');
			wp_enqueue_style('7stroke', get_template_directory_uri() . '/includes/font/pe-icon-7-stroke/css/pe-icon-7-stroke.css');
			wp_enqueue_style('iconstyle', get_template_directory_uri() . '/includes/font/icons/iconstyle.css');
			
			$protocol = is_ssl() ? 'https' : 'http';
			wp_enqueue_style( 'oswald', "$protocol://fonts.googleapis.com/css?family=Oswald:400,700,300" );
			wp_enqueue_style( 'opensans', "$protocol://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" );
									
}
	add_action('wp_enqueue_scripts', 'nadea_wp_style');
	
