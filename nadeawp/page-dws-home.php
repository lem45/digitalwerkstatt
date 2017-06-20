<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php get_header();
/*Template Name: Digitalwerkstatt Home Page */
?>
<?php $wr_options = get_option('nadea_wp'); ?> 


<!-- canvas header on home -->
<div class="dws-fullwidth-section" style="background-color:#eee; margin-bottom: 0px;">
     <div class="dws-fullwidth-wrapper">
        <div id="dws-logo" class="dws-logo hatch"><a href="http://www.digitalwerkstatt.de"><img  src="<?php the_field('logo', 'option'); ?>" alt=""/></a></div>
    </div><!-- fullwidth-wrapper -->
    <canvas id="Canvas"width="1920" height="150"></canvas>
</div>
<!-- end canvas header on home -->

<!-- INCLUDE FLEXIBLE CONTENT ELEMENTS -->
       <?php include (TEMPLATEPATH . '/includes/dws-flexible-content.php'); ?>










<?php /*?>

<div class="dws-fullwidth-section dws-two-third-container" style="background-color:#eee; margin-bottom: 40px;">
	<div class="dws-two-third-section">
        <h2>Ziele und Werte</h2>
        
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
        
        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        
        <a href="" class="dws-button dws-button-bg2">&Uuml;ber die Initiatoren</a>
        
    
    </div> <!-- close 2/3 -->
    <div class="dws-one-third-section">
    	<img src="http://www.digitalwerkstatt.de/wp-content/uploads/2016/01/animation_var.gif" />
    
    </div><!-- close 1/3 -->
<div class="clear clearfix"></div>
</div>





<div class="dws-fullwidth-section" style="background-color:#fff; margin-bottom: 40px;">
	<div class="dws-quote-section">
    	<div class="dws-quote">
        	"(...) ein zukunftsweisendes Experiment. Wir w&uuml;nschen HABA und allen Kindern viel Erfolg und werden weiterhin berichten (...)"
        </div>
        <div class="dws-quote-source">
        	<img src="http://www.digitalwerkstatt.de/wp-content/uploads/2016/01/eltern-logo.png" />
        </div>
    
    </div><!-- close quote section -->
<div class="clear clearfix"></div>
</div>


<div class="dws-fullwidth-section" style="background-color:#eee; margin-bottom: 0px;">
	<div class="dws-three-col-headline"><h2>Warum sollten Kinder programmieren lernen?</h2></div>
	<div class="dws-three-col-wrapper">
        <div class="dws-three-col">
        <img src="http://www.digitalwerkstatt.de/wp-content/uploads/2016/01/animation_truefalse.gif"  /><br />
        <h3>Ob Astronaut oder Bäcker – die Zukunft ist digital</h3>


       <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

        </div>
        <div class="dws-three-col">
        <img src="http://www.digitalwerkstatt.de/wp-content/uploads/2016/01/animation_var.gif"  /><br />
        <h3>Ob Logisches Denken fördern – so früh wie möglich</h3>


       <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
        </div>
        <div class="dws-three-col dws-last">
        <img src="http://www.digitalwerkstatt.de/wp-content/uploads/2016/01/animation_truefalse.gif"  /><br />
        <h3>Programmieren macht einfach Spaß</h3>


       <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
        
        </div>
        <div class="clear clearfix"></div>
    </div>


</div>


<div class="dws-fullwidth-section" style="background-color:#B0C822; margin-bottom: 0px;">
	<div class="dws-fullwidth-button">
    		<a href="" class="dws-button dws-button-bg2">Lernen Sie die Bausteine der Programmierung kennen</a>
    
    </div><!-- close dws-fullwidth-button  -->

</div>


<?php */?>










<?php get_footer(); ?>	