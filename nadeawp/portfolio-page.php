<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php get_header();
/*Template Name:Portfolio Page Template*/
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

<!-- Portfolio Section Start -->

<!-- Two Column Layout -->

<?php if (( get_post_meta($post->ID,'rnr_portfolio-page-layout',true))=='twocl'):?>	

		<section class="ndprotfolio clear animation" data-animation="animation-fade-in-up" id="ndportfoliocolsec">
			<div class="container">
				<div class="row">
				
					<!-- PORTFOLIO CATEGORIES FILTERS -->
	                <?php if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
		                  $portfolio_category = get_terms('portfolio_category');?>
		            <?php if($portfolio_category):?>
				
					<div class="col-sm-12">
						<div class="portfolioFilter">
							<ul>
							  <li><a href="#" data-filter="*" class="current"><?php esc_attr_e('All','nadea');?></a></li>
							  <?php  foreach($portfolio_category as $portfolio_cat):?>
							  <li><a href="#" data-filter=".<?php echo esc_attr($portfolio_cat->slug);?>"><?php echo esc_attr($portfolio_cat->name);?></a></li>
							  <?php endforeach; ?>
							</ul>
						</div>
					</div>
				    <?php endif; endif;?>	
				
				</div>
				
				<div class="row-fulid">
					<ul class="portfolioContainer">
					
					<?php global $post, $post_id;?>
				    <?php query_posts(array('post_type' => 'portfolio','showposts' =>'-1'));
					  while ( have_posts() ) : the_post();?>
					<?php $portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');?>
					<?php foreach ($portfolio_category as $item);?>
					
						<li class="Photo design col-sm-6 <?php echo esc_attr($item->slug . ' ');?>">
							<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> 
							<?php if (has_post_thumbnail( $post->ID ) ):
				                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio' );?>
							<a href="<?php echo esc_url($image[0]);?>" title="<?php the_title();?>" class="zoom lb lb_warsaw1 img-responsive">	<i class="icon_search"></i> 
							</a>
							<?php endif;?>
							<span class="border-right"> </span> <a href="<?php the_permalink();?>" title="Details" target="_blank" class="linKed"> <i class="icon_link"> </i> </a></span> </span> 
							<?php if (has_post_thumbnail( $post->ID ) ):
				                 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-image' );?><img src="<?php echo esc_url($image[0]);?>" alt="" class="img-responsive" > 
							<?php endif;?>	
                            </div>							
							<div class="heading port-title loc">
							<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
							<?php  foreach($portfolio_category as $portfolio_cat):?>
							<p><?php echo esc_attr($portfolio_cat->name);?></p>
							<?php endforeach; ?>
                        
							</div>
						</li>	
                    <?php endwhile; wp_reset_query(); ?>
					
					</ul>					
				</div>
			
			</div>
	
		</section>
		
		<div class="ndheight"></div>		
		
<!-- Three Column Layout   --- ##############!!!___!!!!############### ---    THIS IS HOW WE DO IT (digitalwerkstatt)       --> 




<?php elseif (( get_post_meta($post->ID,'rnr_portfolio-page-layout',true))=='threecl'):?>	

<?php include (TEMPLATEPATH . '/includes/dws-page-header.php'); ?>




		<section class="ndprotfolio clear animation dws-kw-three-col" data-animation="animation-fade-in-up" id="ndportfoliocolsec">



<!-- INCLUDE FLEXIBLE CONTENT ELEMENTS -->
       <?php include (TEMPLATEPATH . '/includes/dws-flexible-content.php'); ?>
         
        
			<!-- portfolio filter used to live here... but not anymore -->
	
		</section>
		
		<div class="ndheight"></div>	

<!-- Four Column Layout -->

<?php elseif (( get_post_meta($post->ID,'rnr_portfolio-page-layout',true))=='fourcl'):?>		
		
		<section class="ndprotfolio clear animation" data-animation="animation-fade-in-up" id="ndportfoliocolsec">
			<div class="container">
				<div class="row">
				
					<!-- PORTFOLIO CATEGORIES FILTERS -->
	                <?php if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
		                  $portfolio_category = get_terms('portfolio_category');?>
		            <?php if($portfolio_category):?>
				
					<div class="col-sm-12">
						<div class="portfolioFilter">
							<ul>
							  <li><a href="#" data-filter="*" class="current"><?php esc_attr_e('All','nadea');?></a></li>
							  <?php  foreach($portfolio_category as $portfolio_cat):?>
							  <li><a href="#" data-filter=".<?php echo esc_attr($portfolio_cat->slug);?>"><?php echo esc_attr($portfolio_cat->name);?></a></li>
							  <?php endforeach; ?>
							</ul>
						</div>
					</div>
				    <?php endif; endif;?>	
				
				</div>
				
				<div class="row-fulid">
					<ul class="portfolioContainer">
					
					<?php global $post, $post_id;?>
				    <?php query_posts(array('post_type' => 'portfolio','showposts' =>'-1'));
					  while ( have_posts() ) : the_post();?>
					<?php $portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');?>
					<?php foreach ($portfolio_category as $item);?>
					
						<li class="Photo design col-sm-3 <?php echo esc_attr($item->slug . ' ');?>">
							<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> 
							<?php if (has_post_thumbnail( $post->ID ) ):
				                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio' );?>
							<a href="<?php echo esc_url($image[0]);?>" title="<?php the_title();?>" class="zoom lb lb_warsaw1 img-responsive">	<i class="icon_search"></i> 
							</a>
							<?php endif;?>
							<span class="border-right"> </span> <a href="<?php the_permalink();?>" title="Details" target="_blank" class="linKed"> <i class="icon_link"> </i> </a></span> </span> 
							<?php if (has_post_thumbnail( $post->ID ) ):
				                 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-image' );?><img src="<?php echo esc_url($image[0]);?>" alt="" class="img-responsive" > 
							<?php endif;?>	
                            </div>							
							<div class="heading port-title">
							<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
							<?php  foreach($portfolio_category as $portfolio_cat):?>
							<p><?php echo esc_attr($portfolio_cat->name);?></p>
							<?php endforeach; ?>
							</div>
						</li>	
                    <?php endwhile; wp_reset_query(); ?>
					
					</ul>					
				</div>
			
			</div>
	
		</section>
		
		<div class="ndheight"></div>	
		
<?php else:?> 

		<section class="ndprotfolio clear animation" data-animation="animation-fade-in-up" id="ndportfoliocolsec">
			<div class="container">
				<div class="row">
				
					<!-- PORTFOLIO CATEGORIES FILTERS -->
	                <?php if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
		                  $portfolio_category = get_terms('portfolio_category');?>
		            <?php if($portfolio_category):?>
				
					<div class="col-sm-12">
						<div class="portfolioFilter">
							<ul>
							  <li><a href="#" data-filter="*" class="current"><?php esc_attr_e('All','nadea');?></a></li>
							  <?php  foreach($portfolio_category as $portfolio_cat):?>
							  <li><a href="#" data-filter=".<?php echo esc_attr($portfolio_cat->slug);?>"><?php echo esc_attr($portfolio_cat->name);?></a></li>
							  <?php endforeach; ?>
							</ul>
						</div>
					</div>
				    <?php endif; endif;?>	
				
				</div>
				
				<div class="row-fulid">
					<ul class="portfolioContainer isotope">
					
					<?php global $post, $post_id;?>
				    <?php query_posts(array('post_type' => 'portfolio','showposts' =>'-1'));
					  while ( have_posts() ) : the_post();?>
					<?php $portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');?>
					<?php foreach ($portfolio_category as $item);?>
					
						<li class="Photo design col-sm-6 <?php echo esc_attr($item->slug . ' ');?>">
							<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> 
							<?php if (has_post_thumbnail( $post->ID ) ):
				                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio' );?>
							<a href="<?php echo esc_url($image[0]);?>" title="<?php the_title();?>" class="zoom lb lb_warsaw1 img-responsive">	<i class="icon_search"></i> 
							</a>
							<?php endif;?>
							<span class="border-right"> </span> <a href="<?php the_permalink();?>" title="Details" target="_blank" class="linKed"> <i class="icon_link"> </i> </a></span> </span> 
							<?php if (has_post_thumbnail( $post->ID ) ):
				                 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-image' );?><img src="<?php echo esc_url($image[0]);?>" alt="" class="img-responsive" > 
							<?php endif;?>	
                            </div>							
							<div class="heading port-title">
							<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
							<?php  foreach($portfolio_category as $portfolio_cat):?>
							<p><?php echo esc_attr($portfolio_cat->name);?></p>
							<?php endforeach; ?>
							</div>
						</li>	
                    <?php endwhile; wp_reset_query(); ?>
					
					</ul>					
				</div>
			
			</div>
	
		</section>
		
		<div class="ndheight"></div>		

<?php endif ;?>	
				
				<?php while ( have_posts() ) : the_post(); ?> 
							
							<?php the_content();?>
	
				<?php endwhile; wp_reset_postdata(); ?>							



	
		
<?php get_footer(); ?>	