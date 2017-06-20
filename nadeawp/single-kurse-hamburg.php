<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php get_header();?>
<?php $wr_options = get_option('nadea_wp'); ?> 
<?php 


	$portfolio_category = wp_get_post_terms($post->ID,'kurse_hamburg_category');
	foreach($portfolio_category as $portfolio_cat):
		if( esc_attr($portfolio_cat->name) != 'Featured'){
			
			$this_portfolio_cat =  strtolower(esc_attr($portfolio_cat->slug));
			$this_portfolio_cat_class = 'dws-portfolio-cat-' . strtolower(esc_attr($portfolio_cat->slug));
		}
	
	endforeach; 

?>
<?php include (TEMPLATEPATH . '/includes/dws-portfolio-header.php'); ?>
            
            
						

     	<div class="dws-fullwidth-section" style="margin-top: 0px; background-color: #FFF; padding: 0 0 40px 0;">
        	<div class="dws-fullwidth-wrapper">
               <div class="dws-portfolio-twothird">
               
               		<?php if (has_post_thumbnail( $post->ID ) ):
				                 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-single' );?>									
                            <div class="dws-portfoliosingle-image">
                            <div class="dws-portfoliosingle-desc <?php echo $this_portfolio_cat_class; ?>"><?php the_title();?></div>
                               <img src="<?php echo esc_url($image[0]);?>" alt="" />	
                            </div>
					<?php endif;?>	
                                        
                    <div class="dws-portfoliosingle-text">
                    
                        <?php // get Entities straight 
										$this_location = get_field('course-location');
										
										if($this_location == ''){
											$this_location = 'Berlin (Linienstra&szlig;e)';
										}
										
										if($this_location == 'Munchen'){
											$this_location = 'M&uuml;nchen';
										}
										if($this_location == 'Berlin (Linienstrasse)'){
											$this_location = 'Berlin (Linienstra&szlig;e)';
										}
	
									?>
						
                     
                        
                        <div class="dws-portfolio-subtitle">
						<?php the_field('course-date'); ?><br />
                        <?php echo $this_location; ?><br />
                        <?php the_field('course-agegroup'); ?>
                        
                        </div>
                        <h1><?php the_field('course-desc'); ?></h1>

                        
                        <?php if(have_posts()): while ( have_posts() ) : the_post();?>
                        <?php the_content();?>
                        <?php endwhile; endif; wp_reset_postdata(); ?>	  
                    
                    </div>        
                                   
                                   
                               
                                    
                                        
               </div> <!-- close 2/3 -->
                  
            <div class="clear clearfix"></div>
             </div><!-- fullwidth-wrapper -->
            </div><!-- fullwidth-section -->
		
        <div class="dws-fullwidth-section" style="background-color:#eee; padding: 20px 0; margin: 20px 0 20px 0;">
        	<div class="dws-fullwidth-wrapper">
                <div class="dws-portfolio-twothird">
               
               
               <?php if(get_field('course-noform') == 1){
			   		
					echo '<div class="dws-alternate-registration">' . the_field('course-alternate-registration')  . '</div>';
			   
			   }else{
			   
			   		include (TEMPLATEPATH . '/includes/dws-portfolio-form.php'); 
			   
			   }?>
               
               
                    <div class="clear clearfix"></div>
                
                </div> <!-- close 2/3 -->
                
                
                <div class="dws-portfolio-onethird">
                <?php
					// chekc if coach info is given
					if(get_field('course-coach-name') != "" && get_field('course-coach-image')  != ""){
						
							// check if alternative  headline is given
							if(get_field('course-coach-alt-headline') != ""){
								$coach_headline =  get_field('course-coach-alt-headline') ; 
							}else{
								$coach_headline =  'Trainer' ; 
							}
				
				?>
                
                
                
                    <h2><?php echo $coach_headline; ?></h2>
                     <?php 
					
						if(get_field('course-coach-image') != ""){ ?>
                        
                        	<?php if(get_field('course-coach-image-link') != ""){ ?>
                            <a href="http://<?php the_field('course-coach-image-link'); ?>" target="_blank" title="<?php the_field('course-coach-name'); ?>">
                            <?php } ?>
                            	<img src='<?php the_field('course-coach-image'); ?>' />
                            <?php if(get_field('course-coach-image-link') != ""){ ?>
                            </a>
                            <?php } ?>
                            
                        <?php } ?>
                    
                    <div class="dws-portfolio-coach-name"><?php the_field('course-coach-name'); ?></div>
					
                    <?php } // close if  ?>
                
                </div>
                
                <div class="clear clearfix"></div>
                </div><!-- fullwidth-wrapper -->
            </div><!-- fullwidth-section -->
		<!-- Page Title Section End -->
        
		<!-- INCLUDE FLEXIBLE CONTENT ELEMENTS -->
       <?php include (TEMPLATEPATH . '/includes/dws-flexible-content.php'); ?>
 	
 <?php get_footer(); ?> 