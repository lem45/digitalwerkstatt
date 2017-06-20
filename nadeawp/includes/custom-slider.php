					<link rel="stylesheet" href="/wp-content/themes/nadeawp/includes/css/owl.carousel.css">
					<script src="/wp-content/themes/nadeawp/includes/js/owl.carousel.js"></script>
					<script type="text/javascript">
						jQuery( document ).ready(function( $ ) {
							jQuery('.owl-slider-portfolio').css('visibility','hidden');
							 var owl = jQuery(".owl-slider-portfolio");	
							 owl.owlCarousel({
							  navigation : false,
							  slideSpeed : 600,
							  paginationSpeed : 400,
							  rewindSpeed: 700,
							  singleItem:true
							});
							
							var action = 'click';
							if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
								action = 'touchend';
							}
							
							// Custom Navigation Events
							jQuery('body').on(action,'#arrright', function () { 
								owl.trigger('owl.next');
							})
							
							jQuery('body').on(action,'#arrleft', function () { 
								owl.trigger('owl.prev');
							})  
	
							setTimeout(function(){ 
								jQuery('.owl-slider-portfolio').css('visibility', 'visible');
							}, 500);
							
						});
					</script>
					<?php
						$args = array(
							'post_type' => 'portfolio',
							'orderby'=> 'menu_order',
							'post_status' => 'publish',
							'order'=> 'ASC',
							'posts_per_page' => 9999,
							'tax_query' => array(
								array(
									'taxonomy' => 'portfolio_category',
									'field' => 'id',
									'terms' => 9
								)
							)
						);
						$wp_query = new WP_Query( $args );
					?>
					
					<?php if ( $wp_query->have_posts() ): ?>

					<div class="slider-portfolio-wrapper">
						<div style="top: 50%; transform: matrix(1, 0, 0, 1, -60, -20); left: 100%;" id="arrright" class="tp-rightarrow tparrows gyges  noSwipe"></div>
						<div style="top: 50%; transform: matrix(1, 0, 0, 1, 20, -20); left: 0px;" id="arrleft" class="tp-leftarrow tparrows gyges  noSwipe"></div>
						<div class="container">
							<div class="row">
								<div class="owl-slider-portfolio">
									<?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
										<?php if(has_post_thumbnail(get_the_ID())): ?>
										<div class="slider-item">
											<a href="<?php echo get_the_permalink(get_the_ID()); ?>">
												<div class="slider-left">
													<?php the_post_thumbnail(get_the_ID(), 'full'); ?>
												</div>
												<div class="slider-right">
													<?php 
													 $portfolio_category = wp_get_post_terms(get_the_ID(),'portfolio_category');
													 foreach($portfolio_category as $portfolio_cat):
													  if( esc_attr($portfolio_cat->name) != 'Featured'){
													   
													   $this_portfolio_cat =  strtolower(esc_attr($portfolio_cat->slug));
													   $this_portfolio_cat_class = 'dws-portfolio-cat-' . strtolower(esc_attr($portfolio_cat->slug));
													  }
													 
													 endforeach;
													?>
												
													<div class="slider-header  <?php echo $this_portfolio_cat_class; ?>"><?php echo get_the_title(); ?></div>
													<div class="slider-content">
														<div class="slider-content-excerpt"><?php echo get_the_excerpt(); ?></div>
													</div>
												</div>
												<div class="clearfix"></div>
											</a>
										</div>
										<?php endif; ?>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				<?php endif;?>
				<?php wp_reset_query(); ?>