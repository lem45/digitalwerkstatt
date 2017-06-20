<?php

class Nadea_Accordion_DeWidget extends WP_Widget {
    var $settings = array( 'title', 'coltione', 'colconone','coltitwo', 'colcontwo','coltithree', 'colconthree', 'coltifour', 'colconfour');

    function Nadea_Accordion_DeWidget() {
        $widget_ops = array('description' => 'Nadea Accordion widget.' );
        parent::__construct(false, __('Nadea - Accordion Widget', 'nadea'),$widget_ops);
}


function widget($args, $instance) {
        $settings = $this->morpheus_get_settings();
        extract( $args, EXTR_SKIP );
        $instance = wp_parse_args( $instance, $settings );
        extract( $instance, EXTR_SKIP );

      
         echo $before_widget; 
        
        if ( $title != '' )
            echo $before_title . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $after_title;
        echo '<div class="aboutAccordian accordianShortCode" id="accordianShortCode">';
		
	   
	    if ( $coltione != '' ) {
		echo '<div class="accordionRow toggleRow triggerRow">';
	   echo '<a class="accordion-toggle3 WhoAreWetrigger activeLine" href="#collapseOne">';
            echo $coltione; 
			 echo '</a>';
			echo '<div id="collapseOne" class="accordion-content triggerMenu">
                  <p>';
				   echo $colconone; 
			echo '</p>
                  </div>';
		 echo '</div>';
		}
		
	    if ( $coltitwo != '' ) {
		echo '<div class="accordionRow toggleRow triggerRow">';
	   echo '<a class="accordion-toggle3 WhoAreWetrigger" href="#collapseTwo">';
            echo $coltitwo; 
			 echo '</a>';
			echo '<div id="collapseTwo" class="accordion-content triggerMenu">
                  <p>';
				   echo $colcontwo; 
			echo '</p>
                  </div>';
		 echo '</div>';
		}		
		
	    if ( $coltithree != '' ) {
		echo '<div class="accordionRow toggleRow triggerRow">';
	   echo '<a class="accordion-toggle3 WhoAreWetrigger" href="#collapseThree">';
            echo $coltithree; 
			 echo '</a>';
			echo '<div id="collapseThree" class="accordion-content triggerMenu">
                  <p>';
				   echo $colconthree; 
			echo '</p>
                  </div>';
		 echo '</div>';
		}	
		
	    if ( $coltifour != '' ) {
		echo '<div class="accordionRow toggleRow triggerRow">';
	   echo '<a class="accordion-toggle3 WhoAreWetrigger" href="#collapseFour">';
            echo $coltifour; 
			 echo '</a>';
			echo '<div id="collapseFour" class="accordion-content triggerMenu">
                  <p>';
				   echo $colconfour; 
			echo '</p>
                  </div>';
		 echo '</div>';
		}
		
		 
		echo '</div>';
       echo $after_widget;      
    }
	
	


function update( $new_instance, $old_instance ) {
        foreach ( array( 'title', 'coltione', 'colconone','coltitwo', 'colcontwo','coltithree', 'colconthree', 'coltifour', 'colconfour' ) as $setting )
            $new_instance[$setting] = strip_tags( $new_instance[$setting] );
        // Users without unfiltered_html cannot update this arbitrary HTML field
        if ( !current_user_can( 'unfiltered_html' ) )
            $new_instance['address'] = $old_instance['address'];
        return $new_instance;
    }


    function morpheus_get_settings() {
        // Set the default to a blank string
        $settings = array_fill_keys( $this->settings, '' );
        // Now set the more specific defaults
        return $settings;
    }

    function form($instance) {
        $instance = wp_parse_args( $instance, $this->morpheus_get_settings() );
        extract( $instance, EXTR_SKIP );
?>

    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
    </p>
	<p>
        <label for="<?php echo $this->get_field_id('coltione'); ?>"><?php _e('Title:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('coltione'); ?>" value="<?php echo esc_attr( $coltione ); ?>" class="widefat" id="<?php echo $this->get_field_id('coltione'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('colconone'); ?>"><?php _e('Content:','nadea'); ?></label>
        <textarea name="<?php echo $this->get_field_name('colconone'); ?>" class="widefat" id="<?php echo $this->get_field_id('colconone'); ?>"><?php echo esc_textarea( $colconone ); ?></textarea>
    </p>
	
	<p>
        <label for="<?php echo $this->get_field_id('coltitwo'); ?>"><?php _e('Title:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('coltitwo'); ?>" value="<?php echo esc_attr( $coltitwo ); ?>" class="widefat" id="<?php echo $this->get_field_id('coltitwo'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('colcontwo'); ?>"><?php _e('Content:','nadea'); ?></label>
        <textarea name="<?php echo $this->get_field_name('colcontwo'); ?>" class="widefat" id="<?php echo $this->get_field_id('colcontwo'); ?>"><?php echo esc_textarea( $colcontwo ); ?></textarea>
    </p>
	
	<p>
        <label for="<?php echo $this->get_field_id('coltithree'); ?>"><?php _e('Title:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('coltithree'); ?>" value="<?php echo esc_attr( $coltithree ); ?>" class="widefat" id="<?php echo $this->get_field_id('coltithree'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('colconthree'); ?>"><?php _e('Content:','nadea'); ?></label>
        <textarea name="<?php echo $this->get_field_name('colconthree'); ?>" class="widefat" id="<?php echo $this->get_field_id('colconthree'); ?>"><?php echo esc_textarea( $colconthree ); ?></textarea>
    </p>
	
	<p>
        <label for="<?php echo $this->get_field_id('coltifour'); ?>"><?php _e('Title:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('coltifour'); ?>" value="<?php echo esc_attr( $coltifour ); ?>" class="widefat" id="<?php echo $this->get_field_id('coltifour'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('colconfour'); ?>"><?php _e('Content:','nadea'); ?></label>
        <textarea name="<?php echo $this->get_field_name('colconfour'); ?>" class="widefat" id="<?php echo $this->get_field_id('colconfour'); ?>"><?php echo esc_textarea( $colconfour ); ?></textarea>
    </p>
    
   
   
    

    <?php 

    }
}

register_widget('Nadea_Accordion_DeWidget');