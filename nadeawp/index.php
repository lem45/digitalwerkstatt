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
									<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_attr_e('Home','nadea');?></a> <?php esc_attr_e('/','nadea'); ?>
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
		<section id="ndblogpage" class="ndblogsincol clear">
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
					
					<div class="col-sm-8">					    
						<div class="blogsinglecol page-postsing">
							<div class="row">
							
							<?php while ( have_posts() ) : the_post(); ?>
							
								<div class="col-sm-12">
								
								<!-- Image Post -->
								
								<?php if( has_post_format( 'image' ) !='') :?>							        
								
                                    <?php get_template_part('post-formats/image-index'); ?>  								
								
								<!-- Video Post -->
								
								<?php elseif( has_post_format( 'video' ) !='') :?>	

                                    <?php get_template_part('post-formats/video-index'); ?>   
								
								<!-- Audio Post -->
								
								<?php elseif( has_post_format( 'audio' ) !='') :?>

                                    <?php get_template_part('post-formats/audio-index'); ?>
									
								<!-- Gallery Post -->
								
								<?php elseif( has_post_format( 'gallery' ) !='') :?>
								
				                    <?php get_template_part('post-formats/gallery-index'); ?>
									
								<!-- Standard Post -->
								
								<?php else:?>	

                                    <?php get_template_part('post-formats/standard-index'); ?>

                                <?php endif; ?>	

								<!-- Post Formats End -->
									
								</div><!--col 12 end -->								
								
								<?php endwhile; wp_reset_postdata(); ?>	
								
							</div><!-- .row end -->
							
							<div style="display:none;"><?php the_tags(); next_posts_link(); previous_posts_link();wp_link_pages();comment_form();paginate_comments_links();previous_comments_link(); wp_enqueue_script('comment-reply');?></div>
							
							<!--Recent Work End -->
							<div class="row">
								<div class="blog-pagination animation" data-animation="animation-fade-in-down">
									<ul class="pagination">
										 <?php if (function_exists("pagination")) {pagination($wp_query->max_num_pages);} ?> 
									</ul>
								</div>
							</div><!-- Pagination Section End -->
						</div>
					</div>
				
				</div>
                    
				<?php } else { ?>
				
				<!-- Right Sidebar -->
			
				<div class="row">
					<div class="col-sm-8">					    
						<div class="blogsinglecol page-postsing">
							<div class="row">
							
							<?php while ( have_posts() ) : the_post(); ?>
							
								<div class="col-sm-12">
								
								<!-- Image Post -->
								
								<?php if( has_post_format( 'image' ) !='') :?>							        
								
                                    <?php get_template_part('post-formats/image-index'); ?>  								
								
								<!-- Video Post -->
								
								<?php elseif( has_post_format( 'video' ) !='') :?>	

                                    <?php get_template_part('post-formats/video-index'); ?>   
								
								<!-- Audio Post -->
								
								<?php elseif( has_post_format( 'audio' ) !='') :?>

                                    <?php get_template_part('post-formats/audio-index'); ?>
									
								<!-- Gallery Post -->
								
								<?php elseif( has_post_format( 'gallery' ) !='') :?>
								
				                    <?php get_template_part('post-formats/gallery-index'); ?>
									
								<!-- Standard Post -->
								
								<?php else:?>	

                                    <?php get_template_part('post-formats/standard-index'); ?>

                                <?php endif; ?>	

								<!-- Post Formats End -->	
									
								</div><!--col 12 end -->								
								
								<?php endwhile; wp_reset_postdata(); ?>	
								
							</div><!-- .row end -->
							
							<div style="display:none;"><?php the_tags(); next_posts_link(); previous_posts_link();wp_link_pages();comment_form();paginate_comments_links();previous_comments_link(); wp_enqueue_script('comment-reply');?></div>
							
							<!--Recent Work End -->
							<div class="row">
								<div class="blog-pagination animation" data-animation="animation-fade-in-down">
									<ul class="pagination">
										 <?php if (function_exists("pagination")) {pagination($wp_query->max_num_pages);} ?> 
									</ul>
								</div>
							</div><!-- Pagination Section End -->
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