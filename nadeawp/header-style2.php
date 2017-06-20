<?php defined('ABSPATH') or die("No script kiddies please!");?>
<!DOCTYPE html>
<html class="no-js"  dir="ltr" <?php language_attributes(); ?>>

<head>
        <meta charset="utf-8" />
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
</head>

<body <?php body_class(); ?>>


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
		

		<!-- Header Section Start -->
		<div class="ndheaderv-9">
		<header class="header headerStyle" id="header">
			<div class="ndheader" id="ndheader">
				<div class="sticky scrollHeaderWrapper">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="logo pull-left">
								<?php if(!empty($wr_options['logotext'])):?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									<?php echo esc_attr($wr_options['logotext']); ?>										
									</a>
								<?php elseif(!empty($wr_options['logopic'])):?>	
									<a href="<?php echo esc_url(home_url('/')); ?>"><img class="responsive site-logo" src="<?php echo esc_url(AfterSetupTheme::return_thme_option('logopic','url'));?>" alt="Logo" /></a>
								<?php else:?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									    <?php esc_attr_e('Nade','nadea');?><span class="font-color"><?php esc_attr_e('a.','nadea');?></span>
									</a>
								<?php endif;?>	
								</div>

								<?php if($wr_options['header-search-box'] == 'no') {?>
								
								 <!-- Empty -->
								
								<?php } else { ?> 
								
								<div class="header-search">
									<div class="header-search-a"><i class="fa fa-search"></i></div>
									<div class="header-search-form">
										<form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
											<input type="text" name="s" placeholder="Search">
										</form>
									</div>
								</div>	

								<?php }?>									

								<nav class="mainMenu mainNav pull-right" id="mainNav">
									<?php get_template_part('menu-section'); ?>
								</nav><!-- end of main nav -->
					  
								<a href="#" class="generalLink" id="responsiveMainNavToggler"><i class="fa fa-bars"></i></a>
								<div class="clearfix"></div><!-- end of clearfix -->
								<div class="responsiveMainNav"></div><!-- end of responsive main nav -->
							  
							</div><!-- end fo col 12 -->
						</div><!-- end of row -->
					</div><!-- end of container -->
				</div><!-- end of sticky -->
			</div><!-- end of ndheader -->
		</header><!-- end of header -->
		</div>

