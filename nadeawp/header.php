<?php defined('ABSPATH') or die("No script kiddies please!");?>
<!DOCTYPE html>
<html class="no-js"  dir="ltr" <?php language_attributes(); ?>>

<head>
        <meta charset="utf-8" />
         <?php the_field('custom_includes', 'option'); ?>
        <?php $wr_options = get_option('nadea_wp'); ?> 
        <title><?php wp_title( '|', true, 'right' ); ?></title>
		
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
               
        <?php if(!empty($wr_options['favicon'])): ?>
        <link rel="shortcut icon" href="<?php echo esc_url(AfterSetupTheme::return_thme_option('favicon','url'));?>" type="image/x-icon" />
        <?php else:?>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/includes/images/favicon.ico" />
        <?php endif;?>  

	<?php 
		if ( is_singular() && comments_open() && get_option('thread_comments') )
		  wp_enqueue_script( 'comment-reply' );
		wp_head(); 
	?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body onLoad="dws_init();" onResize="dws_init();" <?php body_class(); ?>>

<div class="dws-wrapper">
	<!-- PRELOADER-->
	
	<?php if($wr_options['website-preloader'] == 'no') {?>
	
	<!-- Empty -->
	
	<?php } else { ?> 

		<div id="preloader">
			<div class="preloader-container">
				<img src="<?php echo get_template_directory_uri(); ?>/includes/images/preloader.gif" class="preload-gif" alt="preload-image">
			</div>
		</div>	
	
	<?php }?>
		
<?php get_template_part('header-style'); ?>


