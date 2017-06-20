					<?php if (has_post_thumbnail( $post->ID ) ):?>										
									
									<div class="ndslideitem animation" data-animation="animation-fade-in-up">		
									    <div class="post-content-container">
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
																													
										    <div id="owl-blogpage-postslide" class="blogpage-postslide">
											
											<?php if (has_post_thumbnail( $post->ID ) ):
										$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'gallery-blog' );?>
											<div class="item">
												<img src="<?php echo esc_url($image[0]);?>" alt="blog post image" class="img-responsive" />
											</div><!-- Slide 1 -->										
											<?php endif;?>
											
                                            <?php if (class_exists('MultiPostThumbnails')) { ?>
                                            <?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $custom2 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_2', $post->ID, 'gallery-blog');  ?>
											<?php $custom2=wp_get_attachment_image_src($custom2,'featured_image_2');   ?>
											<?php if($custom2 !='') :?>
											<div class="item">
												<img src="<?php echo esc_url($custom2[0]); ?>" alt="blog post image" class="img-responsive" />
											</div><!-- Slide 2 -->
											<?php endif; ?>
                                            <?php endif;?>											
											<?php } ?>											
											
										    <?php if (class_exists('MultiPostThumbnails')) { ?>
										    <?php if (has_post_thumbnail( $post->ID ) ): ?>
										    <?php $custom3 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_3', $post->ID, 'gallery-blog');  ?>
										    <?php $custom3=wp_get_attachment_image_src($custom3,'featured_image_3');   ?>
										    <?php if($custom3 !='') :?>
											<div class="item">
												<img src="<?php echo esc_url($custom3[0]); ?>" alt="blog post image" class="img-responsive" />
											</div><!-- Slide 3 -->
										    <?php endif; ?>
										    <?php endif; ?>
									        <?php } ?>
											
										    <?php if (class_exists('MultiPostThumbnails')) { ?>
										    <?php if (has_post_thumbnail( $post->ID ) ): ?>
										    <?php $custom4 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_4', $post->ID, 'gallery-blog');  ?>
										    <?php $custom4=wp_get_attachment_image_src($custom4,'featured_image_4');   ?>
										    <?php if($custom4 !='') :?>
											<div class="item">
												<img src="<?php echo esc_url($custom4[0]); ?>" alt="blog post image" class="img-responsive" />
											</div><!-- Slide 4 -->
										    <?php endif ?>
										    <?php endif ?>
									        <?php } ?>
											
										    <?php if (class_exists('MultiPostThumbnails')) { ?>
										    <?php if (has_post_thumbnail( $post->ID ) ): ?>
										    <?php $custom5 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_5', $post->ID, 'gallery-blog');  ?>
										    <?php $custom5=wp_get_attachment_image_src($custom4,'featured_image_5');   ?>
										    <?php if($custom5 !='') :?>
											<div class="item">
												<img src="<?php echo esc_url($custom5[0]); ?>" alt="blog post image" class="img-responsive" />
											</div><!-- Slide 4 -->
										    <?php endif ?>
										    <?php endif ?>
									        <?php } ?>											
											
											</div>
											
											<div class="blogpost-title blogtitle2">
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
											<div class="readmore">
												<a class="read-more" href="<?php the_permalink();?>"><?php esc_attr_e('Read More','nadea');?><i class="arrow_right"></i></a>
											</div>
											
										</div>												
										</div>
									</div>	
									
					<?php else:?>	

					        <?php get_template_part('post-formats/standard-index-full'); ?>

					<?php endif;?>											