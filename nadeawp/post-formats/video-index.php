					<?php if(get_post_meta($post->ID,'rnr_bl-video',true)):?>				
									
									<div class="item animation" data-animation="animation-fade-in-down">		
									    <div class="post-content-container">
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										
										   <div class="post-video-container">
												<iframe src="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl-video',true));?>" allowfullscreen="" id=""></iframe>
											</div>											
											
											<div class="blogpost-text-title blogvideo">
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
				                                      $excerpt= substr(strip_tags($post->post_content), 0, 600);
				                                      update_post_meta(get_the_ID(), 'excerpt', $excerpt);
				                                      echo esc_html($excerpt);
			                                    ?>
											</p>
											<!--more-->
											<div class="readmore">
												<a class="read-more" href="<?php the_permalink();?>"><?php esc_attr_e('Read More','nadea');?><i class="arrow_right"></i></a>
											</div>
											<!--more-->
											
										</div>												
										</div>
									</div>
									
					<?php else:?>	

					        <?php get_template_part('post-formats/standard-index'); ?>

					<?php endif;?>										