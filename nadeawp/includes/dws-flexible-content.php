<!-- flexible page content -->
<?php 
// check if the flexible content field has rows of data
if( have_rows('rows') ):

     // loop through the rows of data
    while ( have_rows('rows') ) : the_row();

        if( get_row_layout() == 'raw' ):

        	?>
			<div id="<?php the_sub_field('custom_id'); ?>" class="dws-fullwidth-section" style="background-color:<?php the_sub_field('bg-color'); ?>; margin-bottom: <?php the_sub_field('margin-bottom'); ?>px;">
           		 <div class="dws-fullwidth-wrapper" style="padding: 40px 0 ;">
            <?php the_sub_field('raw_html'); ?>
				<?php /*?><div id="dws-logo" class="dws-logo hatch"><a href="http://www.digitalwerkstatt.de"><img  src="<?php the_field('logo', 'option'); ?>" alt=""/></a></div>
				
				<canvas id="Canvas"width="1920" height="150"></canvas><?php */?>
				<div class="clear clearfix"></div>
			 </div><!-- fullwidth-wrapper -->
            </div><!-- fullwidth-section -->
           
		

        <?php  elseif( get_row_layout() == 'two_third_col' ):  ?> <!-- ELSE -------------------- -->

        	<div id="<?php the_sub_field('custom_id'); ?>" class="dws-fullwidth-section dws-two-third-container" style="background-color:<?php the_sub_field('bg-color'); ?>; margin-bottom: <?php the_sub_field('margin-bottom'); ?>px;">
            <div class="dws-fullwidth-wrapper" style="padding: 40px 0 ;">
               <div class="dws-two-third-section">
               		<?php the_sub_field('two_third_first'); ?>
               </div> <!-- close 2/3 -->
                  <div class="dws-one-third-section">
                    
                	<?php the_sub_field('two_third_last'); ?>
                </div><!-- close 1/3 -->
            <div class="clear clearfix"></div>
             </div><!-- fullwidth-wrapper -->
            </div><!-- fullwidth-section -->
            
            
            
            
        <?php elseif( get_row_layout() == 'one_third_col' ):  ?> <!-- ELSE -------------------- -->

        	<div id="<?php the_sub_field('custom_id'); ?>" class="dws-fullwidth-section dws-one-third-container" style="background-color:<?php the_sub_field('bg-color'); ?>; margin-bottom: <?php the_sub_field('margin-bottom'); ?>px;">
            <div class="dws-fullwidth-wrapper" style="padding: 40px 0;">
                 <div class="dws-one-third-section">
                    
                	<?php the_sub_field('one_third_first'); ?>
                </div><!-- close 1/3 -->
               <div class="dws-two-third-section">
               		<?php the_sub_field('one_third_last'); ?>
               </div> <!-- close 2/3 -->
                
            <div class="clear clearfix"></div>
             </div><!-- fullwidth-wrapper -->
            </div><!-- fullwidth-section -->    
            
            
            
            
            

		<?php  elseif( get_row_layout() == 'slider' ):  ?> <!-- ELSE -------------------- -->


			<?php if(is_page(60) || is_page(340)): ?>
				<?php include('custom-slider.php'); ?>
            <?php else: ?>
				<div id="<?php the_sub_field('custom_id'); ?>" class="dws-fullwidth-section" style="margin-bottom: <?php the_sub_field('margin-bottom'); ?>px;">
					<?php 
						$sliderName = get_sub_field('slider_name'); 
						putRevSlider( $sliderName ); 
					?>
				</div>
			<?php endif; ?>
            
            
            
            
            
       <?php  elseif( get_row_layout() == 'courses' ):  ?> <!-- ELSE -------------------- -->


        <div class="container"  id="<?php the_sub_field('custom_id'); ?>">
				<div class="row">
				
					<!-- PORTFOLIO CATEGORIES FILTERS -->
	                <?php if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
		                  $portfolio_category = get_terms('portfolio_category');?>
		            <?php if($portfolio_category):?>
				
					<div class="col-sm-12">
						<div class="dws-portfolio-filter-wrapper">
                            <div class="portfolioFilter">
                                <ul>
                                  <li class="dws-kw-all"><a href="#" data-filter="*" class="current"><?php esc_attr_e('Alle','nadea');?></a></li>
                                  <?php  foreach($portfolio_category as $portfolio_cat):?>
                                  <li class="dws-course-filter-<?php echo esc_attr($portfolio_cat->slug);?>"><a href="#" data-filter=".<?php echo esc_attr($portfolio_cat->slug);?>"><?php echo esc_attr($portfolio_cat->name);?></a></li>
                                  <?php endforeach; ?>
                                </ul>
                            </div>
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
					
						<?php

							$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
							foreach($portfolio_category as $portfolio_cat):
								if( esc_attr($portfolio_cat->name) != 'Featured'){
									
									$this_portfolio_cat =  strtolower(esc_attr($portfolio_cat->slug));
								}
							
							endforeach; 					
					
					
					// ------------ GET LOCATION -----------
                        
							$this_location = 'Berlin (Mitte)';
							
							switch(get_field('course-location')){
							
								case "berlin@digitalwerkstatt.de":
									$this_location = 'Berlin (Mitte)';
									break;
									
								case "berlin-charlottenburg@digitalwerkstatt.de":
									$this_location = 'Berlin (Charlottenburg)';
									break;
							} 
							
							
                        
                        
                        ?>
						<li class="Photo design col-sm-4 <?php echo esc_attr($this_portfolio_cat . ' ');?>">
							<div class="lightCon">
                            <div class="dws-courses-grid-image-headline"><span><?php the_title();?></span></div>
                       
							<?php if (has_post_thumbnail( $post->ID ) ):
				                 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-imagetw' );?><a href="<?php the_permalink();?>"><img src="<?php echo esc_url($image[0]);?>" alt="" class="img-responsive <?php the_post_thumbnail( 'full' ); ?>" ></a> 
							<?php endif;?>	
                            </div>	<!-- close hover and image stuff -->
                            
                            
                            
                            						
							<div class="heading port-title">
							<h4><a href="<?php the_permalink();?>"><?php /*?><?php the_title();?><?php */?><?php the_field('course-desc'); ?></a></h4>
							
							<p><?php /*?><?php echo esc_attr($portfolio_cat->name);?><?php */?><?php the_field('course-date'); ?><!--<br />--><span style="display:none;"><?php echo $this_location; ?></span></p>
                       
							
							</div>
						</li>	
                    <?php endwhile; wp_reset_query(); ?>
					
					</ul>					
				</div>
			
			</div>
            
            
            
            
            
            

		<?php  elseif( get_row_layout() == 'spacer' ):  ?> <!-- ELSE -------------------- -->


            <div class="dws-fullwidth-section" style="margin-bottom: <?php the_sub_field('spacer-marginbottom'); ?>px; margin-top: <?php the_sub_field('spacer-margintop'); ?>px; height: <?php the_sub_field('spacer-height'); ?>px; background-color: <?php the_sub_field('spacer-bgcolor'); ?>;">
            
            
            </div>



       <?php  elseif( get_row_layout() == 'fullwidth-button' ):  ?> <!-- ELSE -------------------- -->


            <div class="dws-fullwidth-section" style="background-color:<?php the_sub_field('bg-color'); ?>; margin-bottom: <?php the_sub_field('margin-bottom'); ?>px;">
                	<div class="dws-fullwidth-button">
    				<a href="<?php the_sub_field('button-link'); ?>" class="dws-button" style="background-color:<?php the_sub_field('button-color'); ?>"><?php the_sub_field('button-text'); ?></a>
    
    				</div><!-- close dws-fullwidth-button  -->
            </div>
            
            
         <?php  elseif( get_row_layout() == 'three_col' ):  ?> <!-- ELSE -------------------- -->
		

          <div id="<?php the_sub_field('custom_id'); ?>" class="dws-fullwidth-section" style="background-color:<?php the_sub_field('bg-color'); ?>; margin-bottom: <?php the_sub_field('margin-bottom'); ?>px;">
         <div class="dws-fullwidth-wrapper" style="padding: 40px 0;">
            <div class="dws-three-col-headline"><?php the_sub_field('col-header'); ?></div>
            <div class="dws-three-col-wrapper">
                <div class="dws-three-col">
                <?php the_sub_field('col-1'); ?>
                
        
                </div>
                <div class="dws-three-col">
                <?php the_sub_field('col-2'); ?>
                	
                </div>
                <div class="dws-three-col dws-last">
                <?php the_sub_field('col-3'); ?>
      
                </div>
                <div class="clear clearfix"></div>
            </div>


			 </div><!-- fullwidth-wrapper -->
            </div><!-- fullwidth-section -->

<?php
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
        
  <!-- end flexible page content --> 