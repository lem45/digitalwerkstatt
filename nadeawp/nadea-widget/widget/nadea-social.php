<?php

class Nadea_Social_DeWidget extends WP_Widget {
    var $settings = array( 'title', 'fb', 'tw', 'gm', 'in', 'yt', 'sk', 'im', 'be', 'sn', 'dr', 'gt');

    function Nadea_Social_DeWidget() {
        $widget_ops = array('description' => 'Use this widget to add any type of Social Links as a widget.' );
        parent::__construct(false, __('Nadea - Social Widget', 'nadea'),$widget_ops);
}


function widget($args, $instance) {
        $settings = $this->morpheus_get_settings();
        extract( $args, EXTR_SKIP );
        $instance = wp_parse_args( $instance, $settings );
        extract( $instance, EXTR_SKIP );

      
         echo $before_widget; 
        
        if ( $title != '' )
            echo $before_title . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $after_title;
        
		echo'<div class="social-icons team-social-icons">';
		echo'<div class="socials">';

	    if ( $fb != '' ) {
	   echo '<span><a href="';
	   echo $fb;
	   echo '"><i class="fa fa-facebook"></i></a></span>';
		}
		
		if ( $tw != '' ) {
	   echo '<span><a href="';
	   echo $tw;
	   echo '"><i class="fa fa-twitter"></i></a></span>';
		}
		
		if ( $gm != '' ) {
	   echo '<span><a href="';
	   echo $gm;
	   echo '"><i class="fa fa-google-plus"></i></a></span>';
		}

		
		if ( $sk != '' ) {
	   echo '<span><a href="';
	   echo $sk;
	   echo '"><i class="fa fa-skype"></i></a></span>';
		}
		
		
		if ( $in != '' ) {
	   echo '<span><a href="';
	   echo $in;
	   echo '"><i class="fa fa-linkedin"></i></a></span>';
		}	   
		
		if ( $yt != '' ) {
	   echo '<span><a href="';
	   echo $yt;
	   echo '"><i class="fa fa-youtube"></i></a></span>';
		}
		
		if ( $im != '' ) {
	   echo '<span><a href="';
	   echo $im;
	   echo '"><i class="fa fa-instagram"></i></a></span>';
		}	

		if ( $be != '' ) {
	   echo '<span><a href="';
	   echo $be;
	   echo '"><i class="fa fa-behance"></i></a></span>';
		}		

		if ( $sn != '' ) {
	   echo '<span><a href="';
	   echo $sn;
	   echo '"><i class="fa fa-soundcloud"></i></a></span>';
		}	

		if ( $dr != '' ) {
	   echo '<span><a href="';
	   echo $dr;
	   echo '"><i class="fa fa-dribbble"></i></a></span>';
		}	

		if ( $gt != '' ) {
	   echo '<span><a href="';
	   echo $gt;
	   echo '"><i class="fa fa-git-square"></i></a></span>';
		}		
		
		
       echo '</div>';      
       echo '</div>';      
       echo $after_widget;      
    }
	
	


function update( $new_instance, $old_instance ) {
        foreach ( array( 'title', 'address','phone','email' ) as $setting )
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
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
    </p>
	
    <p>
        <label for="<?php echo $this->get_field_id('fb'); ?>"><?php _e('Facebook:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('fb'); ?>" value="<?php echo esc_attr( $fb ); ?>" class="widefat" id="<?php echo $this->get_field_id('fb'); ?>" />
    </p>
	
	 <p>
        <label for="<?php echo $this->get_field_id('tw'); ?>"><?php _e('Twitter:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('tw'); ?>" value="<?php echo esc_attr( $tw ); ?>" class="widefat" id="<?php echo $this->get_field_id('tw'); ?>" />
    </p>
	
	 <p>
        <label for="<?php echo $this->get_field_id('gm'); ?>"><?php _e('Goole+:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('gm'); ?>" value="<?php echo esc_attr( $gm ); ?>" class="widefat" id="<?php echo $this->get_field_id('gm'); ?>" />
    </p>	
	
    
    <p>
        <label for="<?php echo $this->get_field_id('sk'); ?>"><?php _e('Skype:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('sk'); ?>" value="<?php echo esc_attr( $sk ); ?>" class="widefat" id="<?php echo $this->get_field_id('sk'); ?>" />
    </p>
	
	 <p>
        <label for="<?php echo $this->get_field_id('in'); ?>"><?php _e('Linkedin:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('in'); ?>" value="<?php echo esc_attr( $in ); ?>" class="widefat" id="<?php echo $this->get_field_id('in'); ?>" />
    </p>
	
	<p>
        <label for="<?php echo $this->get_field_id('yt'); ?>"><?php _e('Youtube:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('yt'); ?>" value="<?php echo esc_attr( $yt ); ?>" class="widefat" id="<?php echo $this->get_field_id('yt'); ?>" />
    </p>
	
	<p>
        <label for="<?php echo $this->get_field_id('im'); ?>"><?php _e('Instagram:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('im'); ?>" value="<?php echo esc_attr( $im ); ?>" class="widefat" id="<?php echo $this->get_field_id('im'); ?>" />
    </p>	
    
	<p>
        <label for="<?php echo $this->get_field_id('be'); ?>"><?php _e('Behance:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('be'); ?>" value="<?php echo esc_attr( $be ); ?>" class="widefat" id="<?php echo $this->get_field_id('be'); ?>" />
    </p>
	
	<p>
        <label for="<?php echo $this->get_field_id('sn'); ?>"><?php _e('Soundcloud:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('sn'); ?>" value="<?php echo esc_attr( $sn ); ?>" class="widefat" id="<?php echo $this->get_field_id('sn'); ?>" />
    </p>

	<p>
        <label for="<?php echo $this->get_field_id('dr'); ?>"><?php _e('Dribbble:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('dr'); ?>" value="<?php echo esc_attr( $dr ); ?>" class="widefat" id="<?php echo $this->get_field_id('dr'); ?>" />
    </p>	

	<p>
        <label for="<?php echo $this->get_field_id('gt'); ?>"><?php _e('Git-Square:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('gt'); ?>" value="<?php echo esc_attr( $gt ); ?>" class="widefat" id="<?php echo $this->get_field_id('gt'); ?>" />
    </p>    

    <?php 

    }
}

register_widget('Nadea_Social_DeWidget');