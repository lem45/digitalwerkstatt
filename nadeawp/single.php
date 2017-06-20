<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php get_header();?>
<?php $wr_options = get_option('nadea_wp'); ?> 
<?php global $post; ?>

		<!-- Page Title Section Start -->
		
		<?php if($wr_options['page-banner'] == 'no') {?>
		<!-- Empty -->
		<?php } else { ?> 
		<section id="page-title" class="clear skype-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
					<?php if($wr_options['page-title'] == 'no') {?>
                    <!-- Empty -->
					<?php } else { ?> 
						<div class="page-title">
						<?php if(!empty($wr_options['blog-title'])): ?>
	                        <h1><?php echo esc_attr(($wr_options['blog-title']));?></h1>
	                    <?php else:?>
							<h1><?php esc_attr_e('Blog', 'nadea');?></h1>							
						<?php endif; ?>	
						</div>
					<?php }?>	
					</div><!-- col 6-->
					
					<div class="col-sm-6">
					<?php if($wr_options['breadcrumbs'] == 'no') {?>
                    <!-- Empty -->
					<?php } else { ?>
						<div class="ndbreadcrumb">
							<ul class="breadcrumb">
								<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_attr_e('Home','nadeawp');?></a> <?php esc_attr_e('/','nadeawp'); ?>
								<span class="current"><?php the_title();?></span>
							</ul>
						</div>				
					<?php }?>
					</div><!-- col 6-->
					
				</div><!-- .row end -->
			</div><!-- .container end -->
		</section>		  
		<?php }?>
		
		<!-- Page Title Section End -->
		
		<!-- Blog Section Start -->
		<section id="ndblogpage" class="ndblogsincol single-page clear">
			<div class="container">
			
				<?php if($wr_options['blog-sidebar-lr'] == 'no') {?>

				<!-- Left Sidebar -->
					
				<div class="row">
				
					<!-- Sidebar Start -->
					<div class="col-sm-4">
						<div class="ndheight"></div>
						<div class="ndrightsidebar">

				        <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
				        <?php dynamic_sidebar( 'blog-sidebar' ); ?>
						<?php } ?>
							
						</div>
					</div>
					
					<div class="col-sm-8 th-check">					    
						<div class="blogsinglecol page-postsing">							
							
							<?php if(have_posts()) : while ( have_posts() ) : the_post();?>
							
								<!-- Image Post -->
								
								<?php if( has_post_format( 'image' ) !='') :?>							        
								
                                    <?php get_template_part('post-formats/image-single'); ?>  								
								
								<!-- Video Post -->
								
								<?php elseif( has_post_format( 'video' ) !='') :?>	

                                    <?php get_template_part('post-formats/video-single'); ?>   
								
								<!-- Audio Post -->
								
								<?php elseif( has_post_format( 'audio' ) !='') :?>

                                    <?php get_template_part('post-formats/audio-single'); ?>
									
								<!-- Gallery Post -->
								
								<?php elseif( has_post_format( 'gallery' ) !='') :?>
								
				                    <?php get_template_part('post-formats/gallery-single'); ?>
									
								<!-- Standard Post -->
								
								<?php else:?>	

                                    <?php get_template_part('post-formats/standard-single'); ?>

                                <?php endif; ?>		

								<!-- Post Formats End -->
								
						    <?php endwhile;  endif; wp_reset_postdata(); ?>									
							
							<?php if($wr_options['blogauthorinfo'] == 'yes') {?>	
							<div class="ndheight"></div>
							<div class="post-author animation" data-animation="animation-fade-in-up">
								<div class="post-author-content">
									<figure><?php echo get_avatar( $comment, 92 ); ?></figure>
									<div class="post-author-text">
										<h5><?php echo get_the_author_link(); ?></h5>
										<p><?php echo the_author_meta('description'); ?> </p>
									</div>
								</div>
							</div><!-- Author Post End-->
							<?php }?>
							
							<div id="comments">		

                            <?php comments_template(); ?>							
							
                            </div>					

						</div>
					</div>	

				</div>					

				<?php } else { ?>	
				
				<!-- Right Sidebar -->				

				<div class="row">									
					<div class="col-sm-8 th-check">					    
						<div class="blogsinglecol page-postsing">							
							
							<?php if(have_posts()) : while ( have_posts() ) : the_post();?>
							
								<!-- Image Post -->
								
								<?php if( has_post_format( 'image' ) !='') :?>							        
								
                                    <?php get_template_part('post-formats/image-single'); ?>  								
								
								<!-- Video Post -->
								
								<?php elseif( has_post_format( 'video' ) !='') :?>	

                                    <?php get_template_part('post-formats/video-single'); ?>   
								
								<!-- Audio Post -->
								
								<?php elseif( has_post_format( 'audio' ) !='') :?>

                                    <?php get_template_part('post-formats/audio-single'); ?>
									
								<!-- Gallery Post -->
								
								<?php elseif( has_post_format( 'gallery' ) !='') :?>
								
				                    <?php get_template_part('post-formats/gallery-single'); ?>
									
								<!-- Standard Post -->
								
								<?php else:?>	

                                    <?php get_template_part('post-formats/standard-single'); ?>

                                <?php endif; ?>	

								<!-- Post Formats End -->								
								
						    <?php endwhile;  endif; wp_reset_postdata(); ?>									
							
							<?php if($wr_options['blogauthorinfo'] == 'yes') {?>	
							<div class="ndheight"></div>
							<div class="post-author animation" data-animation="animation-fade-in-up">
								<div class="post-author-content">
									<figure><?php echo get_avatar( $comment, 92 ); ?></figure>
									<div class="post-author-text">
										<h5><?php echo get_the_author_link(); ?></h5>
										<p><?php echo the_author_meta('description'); ?> </p>
									</div>
								</div>
							</div><!-- Author Post End-->
							<?php }?>
							
							<div id="comments">		

                            <?php comments_template(); ?>							
							
                            </div>					

						</div>
					</div>
			
					<!-- Sidebar Start -->
					<div class="col-sm-4">
						<div class="ndheight"></div>
						<div class="ndrightsidebar">

				        <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
				        <?php dynamic_sidebar( 'blog-sidebar' ); ?>
						<?php } ?>
							
						</div>
					</div>				
				</div>
				
			<?php }?>	
			</div>
		</section>
		<!-- Blog Post Section End-->

		<div class="ndheight"></div>
		

 <?php get_footer(); ?> 