<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php get_header();
/*Template Name:Theme Nadea Page Template*/
?>
<?php $wr_options = get_option('nadea_wp'); ?> 
<?php global $post; ?>


<?php if (( get_post_meta($post->ID,'rnr_revolution',true))=='yes'){?>

		<!-- Slider Section Start -->
		<div class="fullwidthbanner-container nd_rv_slider">
			<div class="fullwidthbanner">
				<div class="bannercontainer">
					<div class="banner">
					
					<?php echo do_shortcode(get_post_meta($post->ID,'rnr_rev-alias',true)) ?>
					
					</div>
				</div>
				
			</div>
		</div>
		<!-- Slider Section End --> 

<?php }?>


		<!-- Page Title Section Start -->
		
<?php if (( get_post_meta($post->ID,'rnr_page-banner-on-off',true))=='yes'):?>

		<section id="page-title" class="clear skype-bg">
			<div class="container">
				<div class="row">
				
					<div class="col-sm-6">
					
					<?php if (( get_post_meta($post->ID,'rnr_page-title-show',true))=='yes'):?>
						<div class="page-title">
							<h1><?php the_title();?></h1>								
						</div>						
					
					<?php elseif (( get_post_meta($post->ID,'rnr_page-title-show',true))=='no'):?>
					
                    <!-- Empty -->
					
					<?php else:?>
						<div class="page-title">
							<h1><?php the_title();?></h1>								
						</div>						
					<?php endif ;?>	
					
					</div><!-- col 6-->	
					
					<div class="col-sm-6">
					<?php if($wr_options['breadcrumbs'] == 'no') {?>
                    <!-- Empty -->
					<?php } else { ?>
						<div class="ndbreadcrumb">
							<ul class="breadcrumb">
								<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_attr_e('Home','nadea');?></a> <?php esc_attr_e('/','nadea'); ?>
								<span class="current"><?php the_title();?></span>
							</ul>
						</div>				
					<?php }?>
					</div><!-- col 6-->
					
				</div><!-- .row end -->
			</div><!-- .container end -->
		</section>

<?php elseif (( get_post_meta($post->ID,'rnr_page-banner-on-off',true))=='no'):?>

<!-- Empty -->

<?php else:?> 	  

		<section id="page-title" class="clear skype-bg">
			<div class="container">
				<div class="row">
				
					<div class="col-sm-6">
					
					<?php if (( get_post_meta($post->ID,'rnr_page-title-show',true))=='yes'):?>
						<div class="page-title">
							<h1><?php the_title();?></h1>								
						</div>						
					
					<?php elseif (( get_post_meta($post->ID,'rnr_page-title-show',true))=='no'):?>
					
                    <!-- Empty -->
					
					<?php else:?>
						<div class="page-title">
							<h1><?php the_title();?></h1>								
						</div>						
					<?php endif ;?>	
					
					</div><!-- col 6-->	
					
					<div class="col-sm-6">
					<?php if($wr_options['breadcrumbs'] == 'no') {?>
                    <!-- Empty -->
					<?php } else { ?>
						<div class="ndbreadcrumb">
							<ul class="breadcrumb">
								<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_attr_e('Home','nadea');?></a> <?php esc_attr_e('/','nadea'); ?>
								<span class="current"><?php the_title();?></span>
							</ul>
						</div>				
					<?php }?>
					</div><!-- col 6-->
					
				</div><!-- .row end -->
			</div><!-- .container end -->
		</section>		
			
<?php endif ;?>	

<!-- Full Width Layout -->
<?php if (( get_post_meta($post->ID,'rnr_page-layout',true))=='full'):?>
				
				<?php while ( have_posts() ) : the_post(); ?> 
							
							<?php the_content();?>
	
				<?php endwhile; wp_reset_postdata(); ?>							

<!-- Right Sidebar Layout -->
<?php elseif (( get_post_meta($post->ID,'rnr_page-layout',true))=='right'):?>

		<section id="ndblogpage" class="ndblogsincol clear">
			<div class="container">
			
				<div class="row">

					<div class="col-sm-8">					    
						<div class="blogsinglecol page-postsing">
							<div class="row">
							
								<?php while ( have_posts() ) : the_post(); ?>  
							
							    <div class="col-sm-12">
							   
									<div class="item animation" data-animation="animation-fade-in-down">		
									    <div class="post-content-container">

                                        <?php the_content();?>
											
										</div>
									</div>									
																		
								</div><!--col 12 end -->								
								
								<?php endwhile; wp_reset_postdata(); ?>					
								
						    </div><!-- .row end -->							
						</div>		
                    </div>
				
					<!-- Sidebar Start -->
					<div class="col-sm-4">
						<div class="ndheight"></div>
						<div class="ndrightsidebar">

				        <?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
				        <?php dynamic_sidebar( 'page-sidebar' ); ?>
						<?php } ?>
							
						</div>
					</div>					
				
			    </div>	
				
			</div>
		</section>  <!-- Section End-->

		<div class="ndheight"></div>				

<!-- Left Sidebar Layout -->
<?php elseif (( get_post_meta($post->ID,'rnr_page-layout',true))=='left'):?>

		<section id="ndblogpage" class="ndblogsincol clear">
			<div class="container">
			
				<div class="row">
				
					<!-- Sidebar Start -->
					<div class="col-sm-4">
						<div class="ndheight"></div>
						<div class="ndrightsidebar">

				        <?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
				        <?php dynamic_sidebar( 'page-sidebar' ); ?>
						<?php } ?>
							
						</div>
					</div>

					<div class="col-sm-8">					    
						<div class="blogsinglecol page-postsing">
							<div class="row">
							
								<?php while ( have_posts() ) : the_post(); ?>  
							
							    <div class="col-sm-12">
							   
									<div class="item animation" data-animation="animation-fade-in-down">		
									    <div class="post-content-container">

                                        <?php the_content();?>
											
										</div>
									</div>									
																		
								</div><!--col 12 end -->								
								
								<?php endwhile; wp_reset_postdata(); ?>					
								
						    </div><!-- .row end -->							
						</div>		
                    </div>
				
			    </div>	
				
			</div>
		</section>  <!-- Section End-->

		<div class="ndheight"></div>	
		
<!-- Page Container Layout -->
<?php elseif (( get_post_meta($post->ID,'rnr_page-layout',true))=='default'):?>		

		<section id="ndblogfullpage" class="ndblogfullwd clear">
			<div class="container">
				<div class="blogfullwide">
				
				<?php while ( have_posts() ) : the_post(); ?> 
				
					<div class="row">
						<div class="col-sm-12">
							<div class="item animation" data-animation="animation-fade-in-up">
							
							<?php the_content();?>
							
							</div>							
						</div>
					</div>	
					
				<?php endwhile; wp_reset_postdata(); ?>		
					
				</div>
			</div>
		</section>	

        <div class="ndheight"></div>
		
<?php else:?> 

		<section id="ndblogfullpage" class="ndblogfullwd clear">
			<div class="container">
				<div class="blogfullwide">
				
				<?php while ( have_posts() ) : the_post(); ?> 
				
					<div class="row">
						<div class="col-sm-12">
							<div class="item animation" data-animation="animation-fade-in-up">
							
							<?php the_content();?>
							
							</div>							
						</div>
					</div>	
					
				<?php endwhile; wp_reset_postdata(); ?>		
					
				</div>
			</div>
		</section>	

        <div class="ndheight"></div>

<?php endif ;?>	

<?php get_footer(); ?>	