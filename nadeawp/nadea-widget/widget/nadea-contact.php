<?php

class Nadea_Contact_DeWidget extends WP_Widget {
    var $settings = array( 'title', 'phone','email', 'address');

    function Nadea_Contact_DeWidget() {
        $widget_ops = array('description' => 'Use this widget to add any type of contact info (Only for footer widget area)' );
        parent::__construct(false, __('Nadea - Contact Info Widget', 'nadea'),$widget_ops);
}


function widget($args, $instance) {
        $settings = $this->morpheus_get_settings();
        extract( $args, EXTR_SKIP );
        $instance = wp_parse_args( $instance, $settings );
        extract( $instance, EXTR_SKIP );

      
         echo $before_widget; 
        
        if ( $title != '' )
            echo $before_title . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $after_title;
        
		
	   echo '<div class="nadea_ContInro">';
	   
	   	if ( $address != '' ) {
			echo '<span>';
			echo '<div class="pull-left"><div class="ftIcon icon-pin-add">';
			echo '<i class="ndlocationIcon ndftIcon"></i>';
			echo '</div></div>';
			echo '<p>';
			echo $address;
			echo '</p>';
			echo '</span>';
		 }

	   	if ( $phone != '' ) {
			echo '<span>';
			echo '<div class="pull-left"><div class="ftIcon icon-phone-add">';
			echo '<i class="ndphoneeIcon ndftIcon"></i>';
			echo '</div></div>';
			echo '<p class="phone-add">';
			echo $phone;
			echo '</p>';
			echo '</span>';
		 }		 
	   
	   	if ( $email != '' ) {
			echo '<span>';
			echo '<div class="pull-left"><div class="ftIcon icon-from">';
			echo '<i class="ndformIcon ndftIcon"></i>';
			echo '</div></div>';
			echo '<p>';
			echo '<a class="mail-box" href="mailto:';
			echo $email;
			echo '">';
			echo $email;
			echo '</a></p>';
			echo '</span>';
		 }
		
		
		echo '</div>';
       echo $after_widget;      
    }
	
	


function update( $new_instance, $old_instance ) {
        foreach ( array( 'title', 'phone','email','companyname', 'address','maplocation' ) as $setting )
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
        <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address:','nadea'); ?></label>
        <textarea name="<?php echo $this->get_field_name('address'); ?>" class="widefat" id="<?php echo $this->get_field_id('address'); ?>"><?php echo esc_attr( $address ); ?></textarea>
    </p>
	
    <p>
        <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone:','nadea'); ?></label>
        <textarea name="<?php echo $this->get_field_name('phone'); ?>" class="widefat" id="<?php echo $this->get_field_id('phone'); ?>"><?php echo esc_textarea( $phone ); ?></textarea>
    </p>
    
   
    <p>
        <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('E-mail:','nadea'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo esc_attr( $email ); ?>" class="widefat" id="<?php echo $this->get_field_id('email'); ?>" />
    </p>
	

    <?php 

    }
}

register_widget('Nadea_Contact_DeWidget');