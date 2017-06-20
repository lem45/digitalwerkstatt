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
							<h1><?php esc_attr_e('Tag:', 'nadea');?> &nbsp;<?php single_tag_title(); ?></h1>
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
								<span class="current"><?php esc_attr_e('Tag','nadea');?></span>
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
							
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							    <div class="col-sm-12">
							   
									<div class="item animation" data-animation="animation-fade-in-down">		
									    <div class="post-content-container">
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											
											<div class="blogpost-text-title">
												<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
											</div><!-- Blog Title-->
											
											<div class="post-info">
												<div class="post-date">
													<span class="icon-clock-lp"><i class="icon_clock_alt"></i></span>
													<span class="month"><?php the_time('M . d . Y'); ?></span>
													<span class="mar-rg admin-icon"><i class="icon_profile"></i></span>
													<span class="adminname"><?php the_author();?></span>
													<span class="mar-rg reviews"><i class="fa fa-eye fa-6"></i></span>
													<span class="adminname"><?php if(function_exists('the_views')) { the_views(); } ?></span>
													<span class="mar-rg comcount"><i class="icon_comment_alt"></i></span>
													<span class="comcount"><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></span>
													<span class="mar-rg comcount"><i class=" icon_tags_alt"></i></span>
													<span class="comcount"><?php the_category(', ') ?></span>
													<span class="blo-line"></span>
												</div>
											</div><!-- .post-info end -->

											<p>
												<?php
				                                      $excerpt= substr(strip_tags($post->post_content), 0, 400);
				                                      update_post_meta(get_the_ID(), 'excerpt', $excerpt);
				                                      echo esc_html($excerpt);
			                                    ?>
											</p>
											<div class="readmore">
												<a class="read-more" href="<?php the_permalink();?>"><?php esc_attr_e('Read More','nadea');?><i class="arrow_right"></i></a>
											</div>
											
										</div>												
										</div>
									</div>									
																		
								</div><!--col 12 end -->								
								
								<?php  endwhile; endif; wp_reset_postdata(); ?>					
								
						    </div><!-- .row end -->	

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
							
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							    <div class="col-sm-12">
							   
									<div class="item animation" data-animation="animation-fade-in-down">		
									    <div class="post-content-container">
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											
											<div class="blogpost-text-title">
												<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
											</div><!-- Blog Title-->
											
											<div class="post-info">
												<div class="post-date">
													<span class="icon-clock-lp"><i class="icon_clock_alt"></i></span>
													<span class="month"><?php the_time('M . d . Y'); ?></span>
													<span class="mar-rg admin-icon"><i class="icon_profile"></i></span>
													<span class="adminname"><?php the_author();?></span>
													<span class="mar-rg reviews"><i class="fa fa-eye fa-6"></i></span>
													<span class="adminname"><?php if(function_exists('the_views')) { the_views(); } ?></span>
													<span class="mar-rg comcount"><i class="icon_comment_alt"></i></span>
													<span class="comcount"><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></span>
													<span class="mar-rg comcount"><i class=" icon_tags_alt"></i></span>
													<span class="comcount"><?php the_category(', ') ?></span>
													<span class="blo-line"></span>
												</div>
											</div><!-- .post-info end -->

											<p>
												<?php
				                                      $excerpt= substr(strip_tags($post->post_content), 0, 400);
				                                      update_post_meta(get_the_ID(), 'excerpt', $excerpt);
				                                      echo esc_html($excerpt);
			                                    ?>
											</p>
											<div class="readmore">
												<a class="read-more" href="<?php the_permalink();?>"><?php esc_attr_e('Read More','nadea');?><i class="arrow_right"></i></a>
											</div>
											
										</div>												
										</div>
									</div>									
																		
								</div><!--col 12 end -->								
								
								<?php  endwhile; endif; wp_reset_postdata(); ?>					
								
						    </div><!-- .row end -->	

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