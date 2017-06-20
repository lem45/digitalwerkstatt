<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php $wr_options = get_option('nadea_wp'); ?> 

		<!-- Footer Section Start -->
		<section class="footer-bg clear animation" data-animation="animation-fade-in-up" id="footer">
			<div class="rows">
			
				<?php if ( is_active_sidebar( 'footer-left-sidebar' ) ) { ?>				
				<div class="col-sm-5 ndft-no-padding footerbg-left">
					<div class="footer-left">
						<div class="col-sm-12 fotter-nopadd">
                        <?php dynamic_sidebar( 'footer-left-sidebar' ); ?>
						</div><!-- 1Col end-->
					</div><!-- footer left end -->
				</div><!-- col 5 end -->
				<?php } ?>
				<?php if ( is_active_sidebar( 'footer-right-sidebar' ) ) { ?>
				<div class="col-sm-7 ndft-no-padding footerbg-right">
					<div class="footer-right">
						<div class="fotter-nopadd">
						<?php dynamic_sidebar( 'footer-right-sidebar' ); ?>							
						</div><!-- 6Col end-->
					</div><!-- .test row end -->
				</div><!-- col 7 end -->
                <?php } ?>				
			</div><!-- rows end -->
		
			<!-- Footer Bottom Start-->
			<div class="footer-bottom clear">
				<div class="container">
					<div class="row dws-footer">
						
                         <div class="col-sm-12">
                         
                         
                         	<div class="dws-social-links">
                            
                            <a href="https://www.facebook.com/habadigitalwerkstatt/" target="_blank"><img class="dws-fb" src="http://www.digitalwerkstatt.de/wp-content/themes/nadeawp/includes/images/icon_facebook.png" /></a>
                             <a href="https://twitter.com/HABAdigital" target="_blank"><img class="dws-tw" src="http://www.digitalwerkstatt.de/wp-content/themes/nadeawp/includes/images/icon_twitter.png" /></a>
                         	
                         	</div>
                             <div class="dws-custom-footer">
								 <?php $copy = AfterSetupTheme::return_thme_option('copyright');
                                            echo apply_filters('the_content',$copy);
                                            
                                            
                                             if (get_locale() == 'de_DE'):
                                             
                                            echo  '<p>' . the_field('footer_de', 'option') . '</p>';
                                             
                                              else: 
                                                                        
                                              echo  '<p>' . the_field('footer_en', 'option') . '</p>';     
                                              
                                             endif; 
                                            
                                        ?> 
                             </div>
                         </div>
                        
                        
                        
                        <?php /*?><div class="col-sm-6">
						<?php if($wr_options['footer-left'] == 'yes') {?>
						
							<?php get_template_part('menu-section2'); ?>
						
                        <?php } else { ?>	

	                        <p class="copywrite pull-left"><?php $copys = AfterSetupTheme::return_thme_option('footer-text');
									echo apply_filters('the_content',$copys);
								?></p>
	                   						
		                
						<?php }?>							
						</div><!-- col 6 end -->

						<div class="col-sm-6">
						
	                        <p class="copywrite pull-right"><?php $copy = AfterSetupTheme::return_thme_option('copyright');
									echo apply_filters('the_content',$copy);
								?></p>
	                   					
							
						</div><!-- col 6 end --><?php */?>
					</div><!-- row end -->
				</div><!-- container end -->
			</div><!-- Footer Bottom End -->
		</section><!-- footer section end  -->
		
		
		<!-- Back To Top End -->


<?php wp_footer(); ?>
</div> <!-- CLOSE DWS WRAPPER -->
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.digitalwerkstatt.de/tracking/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.digitalwerkstatt.de/tracking/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
</html>