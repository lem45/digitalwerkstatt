					<?php if (has_post_thumbnail( $post->ID ) ):?>									
									
									<div class="item animation" data-animation="animation-fade-in-up">		
									    <div class="post-content-container">
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										
										    <div class="post-image-container">
							                <?php if (has_post_thumbnail( $post->ID ) ):
				                                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog-single' );?>
												<img src="<?php echo esc_url($image[0]);?>" alt="" class="img-responsive"/>
											<?php endif;?>	
											</div>
											
											<div class="blogpost-title">
												<h2><?php the_title();?></h2>
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
													<span class="mar-rg comcount"><i class="fa fa-tags"></i></span>
													<span class="comcount"><?php the_tags(); ?></span>
													<span class="blo-line"></span>
												</div>
											</div><!-- .post-info end -->

											<p>
												<?php the_content();?>
											</p>
											
										</div>												
										</div>										
									</div>	
									
					<?php else:?>	

					        <?php get_template_part('post-formats/standard-single'); ?>

					<?php endif;?>						