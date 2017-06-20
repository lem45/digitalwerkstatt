<?php
/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */
class Nadea_Recent_Posts extends WP_Widget {

	function Nadea_Recent_Posts() {
		$widget_ops = array('classname' => 'widget_recent_entries', 'description' => ( "The most recent posts on your site (Only for footer widget area)") );
		parent::__construct('nadea-recent-posts', ('Nadea Latest Posts'), $widget_ops);
		$this->alt_option_name = 'widget_recent_entries';

		add_action( 'save_post', array($this, 'flush_widget_cache') );
		add_action( 'deleted_post', array($this, 'flush_widget_cache') );
		add_action( 'switch_theme', array($this, 'flush_widget_cache') );
	}

	function widget($args, $instance) {
		$cache = wp_cache_get('widget_recent_posts', 'widget');

		if ( !is_array($cache) )
			$cache = array();

		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : ( 'Latest Posts' );
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 10;
		if ( ! $number )
 			$number = 10;
		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'post_type'=>'Post', 'ignore_sticky_posts' => true ) ) );
		if ($r->have_posts()) :
?>
		<?php echo $before_widget; ?>
		<?php if ( $title ) echo '<div class="widget-title">'; echo $title ; echo '</div>'; ?>
		
	<div class="nadea_recentposts">
		
		<?php
		global $post, $excerpt;
		while ( $r->have_posts() ) : $r->the_post(); ?>
		
		<div class="nadea_recentposts_li">
		
		   <?php if( has_post_format( 'image' ) !='') :?>
		   
		    <div class="pull-left">
				<img src="<?php echo get_template_directory_uri(); ?>/includes/images/blog/ftblog1.png" alt="" />
		    </div>
			
			<div class="pull-rightt text">
			    <h5 class="ftblog_head"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <span class="date-time"><?php the_time('M . d . Y'); ?></span>						
			</div>
			
			<?php elseif( has_post_format( 'video' ) !='') :?>
			
		    <div class="pull-left">
				<img src="<?php echo get_template_directory_uri(); ?>/includes/images/blog/ftblog3.png" alt="" />
		    </div>
			
			<div class="pull-rightt text">
			    <h5 class="ftblog_head"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <span class="date-time"><?php the_time('M . d . Y'); ?></span>						
			</div>		

            <?php elseif( has_post_format( 'audio' ) !='') :?>	

		    <div class="pull-left">
				<img src="<?php echo get_template_directory_uri(); ?>/includes/images/blog/ftblog2.png" alt="" />
		    </div>
			
			<div class="pull-rightt text">
			    <h5 class="ftblog_head"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <span class="date-time"><?php the_time('M . d . Y'); ?></span>						
			</div>				
			
			<?php elseif( has_post_format( 'gallery' ) !='') :?>

		    <div class="pull-left">
				<img src="<?php echo get_template_directory_uri(); ?>/includes/images/blog/ftblog1.png" alt="" />
		    </div>
			
			<div class="pull-rightt text">
			    <h5 class="ftblog_head"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <span class="date-time"><?php the_time('M . d . Y'); ?></span>						
			</div>
			
			<?php else:?>

		    <div class="pull-left">
				<img src="<?php echo get_template_directory_uri(); ?>/includes/images/blog/ftblog2.png" alt="" />
		    </div>
			
			<div class="pull-rightt text">
			    <h5 class="ftblog_head"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <span class="date-time"><?php the_time('M . d . Y'); ?></span>						
			</div>	
			
			<?php endif;?>	
			
		</div>	
			
		<?php endwhile; ?>
	
	</div>
		<?php echo $after_widget; ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;

		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('widget_recent_posts', $cache, 'widget');
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
		$instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_recent_entries']) )
			delete_option('widget_recent_entries');

		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete('widget_recent_posts', 'widget');
	}

	function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:','morpheus' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:','morpheus' ); ?></label>
		<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

		
<?php
	}
}
register_widget('Nadea_Recent_Posts');