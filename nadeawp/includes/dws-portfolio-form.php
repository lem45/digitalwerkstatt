<?php //echo $this_portfolio_cat; 




if (get_locale() == 'de_DE'): ?>


    <!--// do something for de-->
    <?php
	// check for category
	switch($this_portfolio_cat){


	case "kurse": ?>
	


            <!-- start form section -->
            
            <?php if( get_field( 'course-category-1-headline', 'option')){ ?>
            <h2><?php the_field('course-category-1-headline', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-1-desc', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-1-desc', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="114" title="Kontaktformular Kurs"]' ); ?>
            
            <!-- ende form section -->
            
            
            
	<?php break;
	
	case "workshops": ?>
    
    
            <!-- start form section -->
            
            <?php if( get_field( 'course-category-2-headline', 'option')){ ?>
            <h2><?php the_field('course-category-2-headline', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-2-desc', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-2-desc', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="180" title="Kontaktformular Workshop"]' ); ?>
            
            <!-- ende form section -->
            
            
            
	<?php break;
	
	case "schulkooperationen": ?>
    
            <!-- start form section -->
            
            <?php if( get_field( 'course-category-3-headline', 'option')){ ?>
            <h2><?php the_field('course-category-3-headline', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-3-desc', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-3-desc', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="181" title="Kontaktformular Schulkooperation"]' ); ?>
            
            <!-- ende form section -->
            
            
            
	<?php break;
	
	case "feriencamps": ?>
        
            <!-- start form section -->
            
            <?php if( get_field( 'course-category-4-headline', 'option')){ ?>
            <h2><?php the_field('course-category-4-headline', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-4-desc', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-4-desc', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="182" title="Kontaktformular Sommercamp"]' ); ?>
            
            <!-- ende form section -->
            
            
            
	<?php break;
	
	case "schnupperstunde": ?>

            <!-- start form section -->
            
            <?php if( get_field( 'course-category-5-headline', 'option')){ ?>
            <h2><?php the_field('course-category-5-headline', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-5-desc', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-5-desc', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="183" title="Kontaktformular Schnupperstunde"]' ); ?>
            
            <!-- ende form section -->
            
            
            
	<?php break;
	
	case "fuer-erwachsene": ?>

            <!-- start form section -->
            
            <?php if( get_field( 'course-category-6-headline', 'option')){ ?>
            <h2><?php the_field('course-category-6-headline', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-6-desc', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-6-desc', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="184" title="Kontaktformular Erwachsene"]' ); ?>
            
            <!-- ende form section -->
            
      
    <?php break;
	
	case "kindergeburtstag": ?>

            <!-- start form section -->
            
            <?php /*?><?php if( get_field( 'course-category-6-headline', 'option')){ ?>
            <h2><?php the_field('course-category-6-headline', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-6-desc', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-6-desc', 'option'); ?>
            </div>
            <?php } ?><?php */?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="1848" title="Kontaktformular Kindergeburtstag"]' ); ?>
            
            <!-- ende form section -->
            
            
                  <?php break;
	
	case "fuer-lehrer": ?>

            <!-- start form section -->

            <?php 	echo do_shortcode( '[contact-form-7 id="1854" title="Kontaktformular Fuer Lehrer"]"]' ); ?>
            
            <!-- ende form section -->   
            
            
	<?php break;
	
	
	 } // close switch ?>
    
    
    
     <?php else: ?>    
     
     
     <?php
	 
	 /* ----------------- ///////////////// START ENGLISH SWITCH ---------------------*/
	 
	 //echo "english content! " . $this_portfolio_cat;
	 
	// check for category
	switch($this_portfolio_cat){


	case "courses": ?>
	
 

            <!-- start form section -->
            
            <?php if( get_field( 'course-category-1-headline-en', 'option')){ ?>
            <h2><?php the_field('course-category-1-headline-en', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-1-desc-en', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-1-desc-en', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="570" title="Kontaktformular Kurs_en"]' ); ?>
            
            <!-- ende form section -->
            
            
            
	<?php break;
	
	case "workshops-en": ?>
    
    
            <!-- start form section -->
            
            <?php if( get_field( 'course-category-2-headline-en', 'option')){ ?>
            <h2><?php the_field('course-category-2-headline-en', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-2-desc-en', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-2-desc-en', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="571" title="Kontaktformular Workshop_en"]' ); ?>
            
            <!-- ende form section -->
            
            
            
	<?php break;
	
	case "school-collaboration": ?>
    
            <!-- start form section -->
            
            <?php if( get_field( 'course-category-3-headline-en', 'option')){ ?>
            <h2><?php the_field('course-category-3-headline-en', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-3-desc-en', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-3-desc-en', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="572" title="Kontaktformular Schulkooperation_en"]' ); ?>
            
            <!-- ende form section -->
            
            
            
	<?php break;
	
	case "holiday-camps": ?>
        
            <!-- start form section -->
            
            <?php if( get_field( 'course-category-4-headline-en', 'option')){ ?>
            <h2><?php the_field('course-category-4-headline-en', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-4-desc-en', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-4-desc-en', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="573" title="Kontaktformular Sommercamp_en"]' ); ?>
            
            <!-- ende form section -->
            
            
            
	<?php break;
	
	case "trialsession": ?>

            <!-- start form section -->
            
            <?php if( get_field( 'course-category-5-headline-en', 'option')){ ?>
            <h2><?php the_field('course-category-5-headline-en', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-5-desc-en', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-5-desc-en', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="574" title="Kontaktformular Schnupperstunde_en"]' ); ?>
            
            <!-- ende form section -->
            
            
            
	<?php break;
	
	case "for-adults": ?>

            <!-- start form section -->
            
            <?php if( get_field( 'course-category-6-headline-en', 'option')){ ?>
            <h2><?php the_field('course-category-6-headline-en', 'option'); ?></h2>
            <?php } ?>
            
            <?php if( get_field( 'course-category-6-desc-en', 'option')){ ?>
            <div class="dws-courses-form-desc">
            <?php the_field('course-category-6-desc-en', 'option'); ?>
            </div>
            <?php } ?>
             
            <?php 	echo do_shortcode( '[contact-form-7 id="576" title="Kontaktformular Erwachsene_en"]' ); ?>
            
            <!-- ende form section -->
            
            
        	<?php break;
	
	case "birthdayparty": ?>

            <!-- start form section -->

            <?php 	echo do_shortcode( '[contact-form-7 id="1849" title="Kontaktformular Kindergeburtstag_en"]' ); ?>
            
            <!-- ende form section -->    
            
       
        <?php break;
	
	case "for-teachers": ?>

            <!-- start form section -->

            <?php 	echo do_shortcode( '[contact-form-7 id="1849" title="[contact-form-7 id="1852" title="Kontaktformular Fuer-Lehrer_en"]"]' ); ?>
            
            <!-- ende form section -->    
                
            
            
            
	<?php break;
	
	
	 } // close switch ?>
     

     <?php endif; ?>

