<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php get_header();?>
<?php $wr_options = get_option('nadea_wp'); ?> 
<?php 


	$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
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
                    
                        <div class="dws-portfolio-subtitle" style="display:none;">
						<?php 
                        
							$this_location = 'Berlin (Mitte)';
							
							switch(get_field('course-location')){
							
								case "berlin@digitalwerkstatt.de":
									$this_location = 'Berlin (Mitte)';
									break;
									
								case "berlin-charlottenburg@digitalwerkstatt.de":
									$this_location = 'Berlin (Charlottenburg)';
									break;
							} 
							
							echo $this_location;
                        
                        
                        ?>
                        </div>
                        
                        <div class="dws-portfolio-subtitle"><?php the_field('course-date'); ?></div>
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
               
               <?php include (TEMPLATEPATH . '/includes/dws-portfolio-form.php'); ?>
               
               
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