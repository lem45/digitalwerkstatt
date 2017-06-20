<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php
/*Template Name:Blog Page Template */
get_header();
?>
<?php $wr_options = get_option('nadea_wp'); ?> 
<?php global $post; ?>

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

<!-- Blog Section Start -->
		
<!-- Full Width Layout -->		
		
<?php if (( get_post_meta($post->ID,'rnr_blog-page-layout',true))=='full'):?>

		<section id="ndblogfullpage" class="ndblogfullwd clear">
			<div class="container">
				<div class="blogfullwide">
				
					<?php 
					
					    $showpost= get_post_meta($post->ID, 'rnr_blog-post-show', true);						
					    $categoryname= get_post_meta($post->ID, 'rnr_blog-post-cat', true);						
					    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
			            $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>$showpost, 'category_name'=> $categoryname, 'paged'=>$paged ) ); 						
				    ?>
					
				    <div class="row">
							
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
						<div class="col-sm-12">
								
								<!-- Image Post -->
								
								<?php if( has_post_format( 'image' ) !='') :?>							        
								
                                    <?php get_template_part('post-formats/image-index-full'); ?>  								
								
								<!-- Video Post -->
								
								<?php elseif( has_post_format( 'video' ) !='') :?>	

                                    <?php get_template_part('post-formats/video-index-full'); ?>   
								
								<!-- Audio Post -->
								
								<?php elseif( has_post_format( 'audio' ) !='') :?>

                                    <?php get_template_part('post-formats/audio-index-full'); ?>
									
								<!-- Gallery Post -->
								
								<?php elseif( has_post_format( 'gallery' ) !='') :?>
								
				                    <?php get_template_part('post-formats/gallery-index-full'); ?>
									
								<!-- Standard Post -->
								
								<?php else:?>	

                                    <?php get_template_part('post-formats/standard-index-full'); ?>

                                <?php endif; ?>	

								<!-- Post Formats End -->										

									
						</div><!--col 12 end -->							
							
					<?php endwhile; wp_reset_postdata(); ?>							
							
							<div style="display:none;"><?php the_tags(); next_posts_link(); previous_posts_link();wp_link_pages();comment_form();paginate_comments_links();previous_comments_link(); wp_enqueue_script('comment-reply');?></div>
							
							<!--Recent Work End -->
							<div class="row">
								<div class="blog-pagination animation" data-animation="animation-fade-in-down">
									<ul class="pagination">
										 <?php if (function_exists("pagination")) {pagination($loop->max_num_pages);} ?> 
									</ul>
								</div>
							</div><!-- Pagination Section End -->					
				    </div>
				</div>
			</div>	
		</section>
		
		
<!-- Right Sidebar -->

<?php elseif (( get_post_meta($post->ID,'rnr_blog-page-layout',true))=='right'):?>

		<section id="ndblogpage" class="ndblogsincol clear">
			<div class="container">
					
				<div class="row">

					<?php 
					
					    $showpost= get_post_meta($post->ID, 'rnr_blog-post-show', true);						
					    $categoryname= get_post_meta($post->ID, 'rnr_blog-post-cat', true);						
					    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
			            $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>$showpost, 'category_name'=> $categoryname, 'paged'=>$paged ) ); 
						
				    ?>				
										
					<div class="col-sm-8">					    
						<div class="blogsinglecol page-postsing">
							<div class="row">
							
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
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
										 <?php if (function_exists("pagination")) {pagination($loop->max_num_pages);} ?> 
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
				
			</div>
		</section>

		<div class="ndheight"></div>				

<!-- Left Sidebar Layout -->
<?php elseif (( get_post_meta($post->ID,'rnr_blog-page-layout',true))=='left'):?>

		<section id="ndblogpage" class="ndblogsincol clear">
			<div class="container">
					
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

					<?php 
					
					    $showpost= get_post_meta($post->ID, 'rnr_blog-post-show', true);						
					    $categoryname= get_post_meta($post->ID, 'rnr_blog-post-cat', true);						
					    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
			            $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>$showpost, 'category_name'=> $categoryname, 'paged'=>$paged ) ); 						
				    ?>				
										
					<div class="col-sm-8">					    
						<div class="blogsinglecol page-postsing">
							<div class="row">
							
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
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
										 <?php if (function_exists("pagination")) {pagination($loop->max_num_pages);} ?> 
									</ul>
								</div>
							</div><!-- Pagination Section End -->
						</div>
					</div>
								
				</div>
				
			</div>
		</section>

		<div class="ndheight"></div>		
		
<!-- Blog Two Column Layout -->
<?php elseif (( get_post_meta($post->ID,'rnr_blog-page-layout',true))=='twocl'):?>	

		<section id="ndblogpage" class="ndblogsincol clear">
			<div class="container">

					<?php 
					
					    $showpost= get_post_meta($post->ID, 'rnr_blog-post-show', true);						
					    $categoryname= get_post_meta($post->ID, 'rnr_blog-post-cat', true);						
					    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
			            $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>$showpost, 'category_name'=> $categoryname, 'paged'=>$paged ) ); 						
				    ?>	

										
                    <div class="blogcol2 page-postsing">
					
						<div class="row">
							
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>							
								
								<!-- Image Post -->
								
								<?php if( has_post_format( 'image' ) !='') :?>							        
								
                                    <?php get_template_part('post-formats/image-index-towcol'); ?>  																
								<!-- Standard Post -->
								
								<?php else:?>	

                                    <?php get_template_part('post-formats/standard-index-towcol'); ?>

                                <?php endif; ?>	

								<!-- Post Formats End -->																	
								
							<?php endwhile; wp_reset_postdata(); ?>	
								
						</div><!-- .row end -->
							
							<div style="display:none;"><?php the_tags(); next_posts_link(); previous_posts_link();wp_link_pages();comment_form();paginate_comments_links();previous_comments_link(); wp_enqueue_script('comment-reply');?></div>
							
							<!--Recent Work End -->
							<div class="row">
								<div class="blog-pagination animation" data-animation="animation-fade-in-down">
									<ul class="pagination">
										 <?php if (function_exists("pagination")) {pagination($loop->max_num_pages);} ?> 
									</ul>
								</div>
							</div><!-- Pagination Section End -->
						
					</div>
						
				
			</div>
		</section>

		<div class="ndheight"></div>


<?php else:?> 

		<section id="ndblogpage" class="ndblogsincol clear">
			<div class="container">
					
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

					<?php 
					
					    $showpost= get_post_meta($post->ID, 'rnr_blog-post-show', true);						
					    $categoryname= get_post_meta($post->ID, 'rnr_blog-post-cat', true);						
					    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
			            $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>$showpost, 'category_name'=> $categoryname, 'paged'=>$paged ) ); 						
				    ?>				
										
					<div class="col-sm-8">					    
						<div class="blogsinglecol page-postsing">
							<div class="row">
							
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
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
										 <?php if (function_exists("pagination")) {pagination($loop->max_num_pages);} ?> 
									</ul>
								</div>
							</div><!-- Pagination Section End -->
						</div>
					</div>
								
				</div>
				
			</div>
		</section>

		<div class="ndheight"></div>				

<?php endif ;?>	

				
				<?php while ( have_posts() ) : the_post(); ?> 
							
							<?php the_content();?>
	
				<?php endwhile; wp_reset_postdata(); ?>							


<?php get_footer(); ?>	
