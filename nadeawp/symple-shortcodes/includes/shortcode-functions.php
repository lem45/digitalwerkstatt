<?php
/**
*
*
*
 * Allow shortcodes in widgets
 * @since v1.0
 */
add_filter('widget_text', 'do_shortcode');


// Full Width Section Shortcode
if(! function_exists('wr_section_shortcode')){
	function wr_section_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'background_color'=>'',
			'background_img'=>'',
			'margin'=>'',
			'padding'=>'',
			'parallax'=>'',
			'gradient'=>'',
			), $atts) );

				
		return '
		    <div id="'.$id.'" class="col-sm-12 full-width-section '.$class.'" style="background-color:'.$background_color.';background-image: '.$gradient.' url('.$background_img.');  background-attachment:'.$parallax.'; background-size:cover; margin:'.$margin.';padding:'.$padding.';">
			 '.do_shortcode($content).'
            </div> 
				';
	}
	add_shortcode('wr_section_box', 'wr_section_shortcode');
}

// Container Section Shortcode
if(! function_exists('wr_section_container_shortcode')){
	function wr_section_container_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="container '.$class.'">
			    <div class="row">
			    '.do_shortcode($content).'
		        </div> 
		    </div> 
				';
	}
	add_shortcode('wr_section_container', 'wr_section_container_shortcode');
}

// 1 Column Shortcode
if(! function_exists('wr_1_column_shortcode')){
	function wr_1_column_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="col-sm-12 '.$class.'">
			 '.do_shortcode($content).'
		    </div> 
				';
	}
	add_shortcode('wr_1_column', 'wr_1_column_shortcode');
}

// 1/2 Columns Shortcode
if(! function_exists('wr_1_2_column_shortcode')){
	function wr_1_2_column_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="col-sm-6 '.$class.'">
			 '.do_shortcode($content).'
		    </div> 
				';
	}
	add_shortcode('wr_1_2_column', 'wr_1_2_column_shortcode');
}

// 1/3 Columns Shortcode
if(! function_exists('wr_1_3_column_shortcode')){
	function wr_1_3_column_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="col-sm-4 '.$class.'">
			 '.do_shortcode($content).'
		    </div> 
				';
	}
	add_shortcode('wr_1_3_column', 'wr_1_3_column_shortcode');
}

// 1/4 Columns Shortcode
if(! function_exists('wr_1_4_column_shortcode')){
	function wr_1_4_column_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="col-sm-3 '.$class.'">
			 '.do_shortcode($content).'
		    </div> 
				';
	}
	add_shortcode('wr_1_4_column', 'wr_1_4_column_shortcode');
}

// 1/6 Columns Shortcode
if(! function_exists('wr_1_6_column_shortcode')){
	function wr_1_6_column_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="col-sm-2 '.$class.'">
			 '.do_shortcode($content).'
		    </div> 
				';
	}
	add_shortcode('wr_1_6_column', 'wr_1_6_column_shortcode');
}

// 2/3 Columns Shortcode
if(! function_exists('wr_2_3_column_shortcode')){
	function wr_2_3_column_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="col-sm-8 '.$class.'">
			 '.do_shortcode($content).'
		    </div> 
				';
	}
	add_shortcode('wr_2_3_column', 'wr_2_3_column_shortcode');
}

// 3/4 Columns Shortcode
if(! function_exists('wr_3_4_column_shortcode')){
	function wr_3_4_column_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="col-sm-9 '.$class.'">
			 '.do_shortcode($content).'
		    </div> 
				';
	}
	add_shortcode('wr_3_4_column', 'wr_3_4_column_shortcode');
}

// 5/6 Columns Shortcode
if(! function_exists('wr_5_6_column_shortcode')){
	function wr_5_6_column_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="col-sm-10 '.$class.'">
			 '.do_shortcode($content).'
		    </div> 
				';
	}
	add_shortcode('wr_5_6_column', 'wr_5_6_column_shortcode');
}

// 5/12 Columns Shortcode
if(! function_exists('wr_5_12_column_shortcode')){
	function wr_5_12_column_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="col-sm-5 '.$class.'">
			 '.do_shortcode($content).'
		    </div> 
				';
	}
	add_shortcode('wr_5_12_column', 'wr_5_12_column_shortcode');
}

// 7/12 Columns Shortcode
if(! function_exists('wr_7_12_column_shortcode')){
	function wr_7_12_column_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			
			), $atts) );

				
		return '
			<div class="col-sm-7 '.$class.'">
			 '.do_shortcode($content).'
		    </div> 
				';
	}
	add_shortcode('wr_7_12_column', 'wr_7_12_column_shortcode');
}

// Section Title Shortcode

if(! function_exists('wr_section_title_shortcode')){
	function wr_section_title_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'margin'=>'',
			'padding'=>'',			
			'color'=>'',
			'font_size'=>'',
			'font_weight'=>'',
			'line_height'=>'',
			'text_align'=>'',
			'text_transform'=>'',
			), $atts) );

				
		return '
		     <div id="'.$id.'" class="heading '.$class.'">
			 <h2 style="margin:'.$margin.';padding:'.$padding.'; color:'.$color.'; font-size:'.$font_size.'; font-weight:'.$font_weight.'; line-height:'.$line_height.'; text-align:'.$text_align.'; text-transform:'.$text_transform.';">'.$title.'</h2>
			 </div>
                
				';
	}
	add_shortcode('wr_section_title', 'wr_section_title_shortcode');
}


// Section Title Shortcode (Visual)

if(! function_exists('wr_vc_section_title_shortcode')){
	function wr_vc_section_title_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'margin'=>'',
			'padding'=>'',			
			'color'=>'',
			'font_size'=>'',
			'font_weight'=>'',
			'line_height'=>'',
			'text_align'=>'',
			'text_transform'=>'',
			), $atts) );

				
		return '
		     <div class="heading '.$class.'">
			 <h2 style="margin:'.$margin.';padding:'.$padding.'; color:'.$color.'; font-size:'.$font_size.'; font-weight:'.$font_weight.'; line-height:'.$line_height.'; text-align:'.$text_align.'; text-transform:'.$text_transform.';">'.$title.'</h2>
			 </div>
                
				';
	}
	add_shortcode('wr_vc_section_title', 'wr_vc_section_title_shortcode');
}


// Section Text Shortcode

if(! function_exists('wr_section_text_shortcode')){
	function wr_section_text_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'margin'=>'',
			'padding'=>'',			
			'color'=>'',
			'font_size'=>'',
			'font_weight'=>'',
			'line_height'=>'',
			'text_align'=>'',
			'text_transform'=>'',
			), $atts) );

				
		return '
		     <div id="'.$id.'" class="heading '.$class.'">
			 <p style="margin:'.$margin.';padding:'.$padding.'; color:'.$color.'; font-size:'.$font_size.'; font-weight:'.$font_weight.'; line-height:'.$line_height.'; text-align:'.$text_align.'; text-transform:'.$text_transform.';">'.$content.'</p>
			 </div>
                
				';
	}
	add_shortcode('wr_section_text', 'wr_section_text_shortcode');
}

// Section Text Shortcode (Visual)

if(! function_exists('wr_vc_section_text_shortcode')){
	function wr_vc_section_text_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'margin'=>'',
			'padding'=>'',			
			'color'=>'',
			'font_size'=>'',
			'font_weight'=>'',
			'line_height'=>'',
			'text_align'=>'',
			'text_transform'=>'',
			), $atts) );

				
		return '
		     <div class="heading '.$class.'">
			 <p style="margin:'.$margin.';padding:'.$padding.'; color:'.$color.'; font-size:'.$font_size.'; font-weight:'.$font_weight.'; line-height:'.$line_height.'; text-align:'.$text_align.'; text-transform:'.$text_transform.';">'.$content.'</p>
			 </div>
                
				';
	}
	add_shortcode('wr_vc_section_text', 'wr_vc_section_text_shortcode');
}


// Section Image Shortcode

if(! function_exists('wr_section_image_shortcode')){
	function wr_section_image_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'width'=>'',
			'height'=>'',
			'margin'=>'',
			'padding'=>'',			
			'position'=>'',			
			'float'=>'',			
			'top'=>'',
			'bottom'=>'',
			'right'=>'',
			'left'=>'',
			'img_url'=>'',

			), $atts) );




			
				
		return '
		     <div id="'.$id.'" class="heading-img '.$class.'">
			 <img src="'.$img_url.'" style="width:'.$width.';height:'.$height.';float:'.$float.';margin:'.$margin.';padding:'.$padding.';position:'.$position.';top:'.$top.';bottom:'.$bottom.';right:'.$right.';left:'.$left.';" alt="img" class="img-responsive"/>
			 </div>
                
				';
	}
	add_shortcode('wr_section_image', 'wr_section_image_shortcode');
}

// Section Image Shortcode (Visual)

if(! function_exists('wr_vc_section_image_shortcode')){
	function wr_vc_section_image_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'width'=>'',
			'height'=>'',
			'margin'=>'',
			'padding'=>'',			
			'position'=>'',			
			'float'=>'',			
			'top'=>'',
			'bottom'=>'',
			'right'=>'',
			'left'=>'',
			'img_url'=>'',
			'link_url'=>'',
			'link_target'=>'',						

			), $atts) );
			
		$html='';
			
            $wr_back_image ="";
            if($img_url != '' || $img_url != ' ') { 
	            $wr_back_image = wp_get_attachment_image_src( $img_url, 'full');
            }
				
		
		    $html .='<div class="heading-img '.$class.'">';
			if($link_url != '') {	
			$html .='<a class="img-link" href="'.$link_url.'" target="'.$link_target.'">';
			}
			$html .='<img src="'.$wr_back_image[0].'" style="width:'.$width.';height:'.$height.';float:'.$float.';margin:'.$margin.';padding:'.$padding.';position:'.$position.';top:'.$top.';bottom:'.$bottom.';right:'.$right.';left:'.$left.';" alt="img" class="img-responsive"/>';
			if($link_url != '') {
			$html .='</a>';
			}
			$html .='</div>';
                
		return $html;			
			
	}
	add_shortcode('wr_vc_section_image', 'wr_vc_section_image_shortcode');
}


// Icon Section Shortcode
if(! function_exists('wr_icon_shortcode')){
	function wr_icon_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'icon_style'=>'',
			'icon_name'=>'',
			'icon_size'=>'',			
			'icon_color'=>'',			
			'icon_position'=>'',			
			'icon_float'=>'',			
			'icon_border'=>'',			
			'icon_padding'=>'',			
			'icon_margin'=>'',			
			'icon_bar'=>'',			
			), $atts) );

				
		return '
		    
			<div class="ndservice-item icbn '.$class.' '.$icon_position.' '.$icon_float.' ">		        
                 	<div class="'.$icon_border.'"><i class="'.$icon_style.' '.$icon_name.' '.$icon_size.' icon-border-s1 icon-border-s2" style="color:'.$icon_color.'; padding:'.$icon_padding.'; margin:'.$icon_margin.';border-color:'.$icon_color.'; "></i></div>			
            </div> 
            <div class="'.$icon_bar.'" style="background:'.$icon_color.';"></div>			
			
				';
	}
	add_shortcode('wr_icon', 'wr_icon_shortcode');
}


// Icon Section Shortcode (Visual)
if(! function_exists('wr_vc_icon_shortcode')){
	function wr_vc_icon_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'icon_style'=>'',
			'icon_name'=>'',
			'icon_size'=>'',			
			'icon_color'=>'',			
			'icon_position'=>'',			
			'icon_float'=>'',			
			'icon_border'=>'',			
			'icon_padding'=>'',			
			'icon_margin'=>'',			
			'icon_bar'=>'',			
			), $atts) );

				
		return '
		    
			<div class="ndservice-item icbn '.$class.' '.$icon_position.' '.$icon_float.' ">		        
                 	<div class="'.$icon_border.'"><i class="'.$icon_style.' '.$icon_name.' '.$icon_size.' icon-border-s1 icon-border-s2" style="color:'.$icon_color.'; padding:'.$icon_padding.'; margin:'.$icon_margin.';border-color:'.$icon_color.'; "></i></div>			
            </div> 
            <div class="'.$icon_bar.'" style="background:'.$icon_color.';"></div>			
			
				';
	}
	add_shortcode('wr_vc_icon', 'wr_vc_icon_shortcode');
}


// Section Button Shortcode

if(! function_exists('wr_section_button_shortcode')){
	function wr_section_button_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'link_url'=>'',
			'link_target'=>'',
			'button_style'=>'',
			'margin'=>'',
			'padding'=>'',			
			'background'=>'',			
			'color'=>'',
			'border'=>'',
			'border_radius'=>'',		
			'font_size'=>'',
			'font_weight'=>'',
			'float'=>'',
			'text_transform'=>'',
			), $atts) );

				
		return '
		     <div id="'.$id.'" class="heading-button '.$class.'">
			 <a href="'.$link_url.'" target="'.$link_target.'" style="margin:'.$margin.';padding:'.$padding.'; background:'.$background.'; color:'.$color.'; border:'.$border.'; border-radius:'.$border_radius.'; font-size:'.$font_size.'; font-weight:'.$font_weight.'; float:'.$float.';">'.$title.'</a>
			 </div>
                
				';
	}
	add_shortcode('wr_section_button', 'wr_section_button_shortcode');
}


// Section Button Shortcode (Visual)

if(! function_exists('wr_vc_section_button_shortcode')){
	function wr_vc_section_button_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'link_url'=>'',
			'link_target'=>'',
			'button_style'=>'',
			'margin'=>'',
			'padding'=>'',			
			'background'=>'',			
			'color'=>'',
			'border'=>'',
			'border_radius'=>'',		
			'font_size'=>'',
			'font_weight'=>'',
			'float'=>'',
			'text_transform'=>'',
			), $atts) );

				
		return '
		     <div id="'.$id.'" class="heading-button '.$class.'">
			 <a href="'.$link_url.'" target="'.$link_target.'" style="margin:'.$margin.';padding:'.$padding.'; background:'.$background.'; color:'.$color.'; border:'.$border.'; border-radius:'.$border_radius.'; font-size:'.$font_size.'; font-weight:'.$font_weight.'; float:'.$float.';text-transform:'.$text_transform.';">'.$title.'</a>
			 </div>
                
				';
	}
	add_shortcode('wr_vc_section_button', 'wr_vc_section_button_shortcode');
}


// Divider Section Shortcode
if(! function_exists('wr_bar_shortcode')){
	function wr_bar_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'width'=>'',
			'height'=>'',
			'float'=>'',
			'color'=>'',
			'position'=>'',
			'margin'=>'',
			'padding'=>'',					
			'border'=>'',					
			
			), $atts) );

				
		return '
		    

            <div id ="'.$id.'" class="'.$class.'" style="width:'.$width.';height:'.$height.';float:'.$float.'; background:'.$color.'; position:'.$position.'; margin:'.$margin.'; padding:'.$padding.'; border:'.$border.';"></div>			
			
				';
	}
	add_shortcode('wr_bar', 'wr_bar_shortcode');
}

// Divider Section Shortcode (Visual)
if(! function_exists('wr_vc_bar_shortcode')){
	function wr_vc_bar_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'width'=>'',
			'height'=>'',
			'float'=>'',
			'color'=>'',
			'position'=>'',
			'margin'=>'',
			'padding'=>'',					
			'border'=>'',					
			'border_radius'=>'',
			
			), $atts) );

				
		return '
		    

            <div class="'.$class.'" style="width:'.$width.';height:'.$height.';float:'.$float.'; background:'.$color.'; position:'.$position.'; margin:'.$margin.'; padding:'.$padding.'; border:'.$border.'; border-radius:'.$border_radius.';"></div>			
			
				';
	}
	add_shortcode('wr_vc_bar', 'wr_vc_bar_shortcode');
}



// Blog Section Shortcode

if(! function_exists('wr_blog_shortcode')){
	function wr_blog_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
            'categoryname'=>'',
            'showpost'=>'',			

			), $atts) );
			
			$html='';
			
			$html .= '<section id="ndlatestpost" class="'.$class.' home-img clear">';
			$html .= '<div class="container">';			
		    
		    $html .= '<div class="row">';						
		    $html .= '<div class="col-sm-12">';						
			$html .= '<div class="latestpost animation" data-animation="animation-fade-in-down">';			
			$html .= '<div class="heading">';			
		    $html .= '<h2>'.$title.'</h2>';
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';	
		    	
		    	
			
			$html .='<div class="latest-post-owl animation" data-animation="animation-fade-in-up">';
			$html .='<div class="row">';
			$html .='<div id="owl-latest-post" class="blog-post nadea-theme">';
			
			global $post;
		    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
		    $loop = new WP_Query( array( 'post_type' => 'post','category_name'=> $categoryname, 'posts_per_page'=> $showpost) );
 		    while ( $loop->have_posts() ) : $loop->the_post();
			
			if( has_post_format( 'image' ) !='') :
			
			$html .='<div class="item col-sm-3">';
			$html .='<article class="post-content-container">';
			
			$html .='<div class="post-image-container">';
		    $html .= '<a href="';
		    $html .= get_the_permalink();
		    $html .= '">';		    
		    if (has_post_thumbnail( $post->ID ) ):		
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-image' );			
			$html .='<img src="';
			$html .= $image[0];
			$html .='" alt="blog post image" />';
			endif;
			$html .= '</a>';
			$html .='</div>';
			
			$html .='<div class="post-title">';
		    $html .= '<a href="';
		    $html .= get_the_permalink();
		    $html .= '" target="_blank">';	
			$html .='<h4>';
			$html .=get_the_title();
			$html .='</h4>';		
            $html .='</a>';				
			$html .='</div>';
			
			$html .='<div class="post-info">';
			$html .='<div class="post-date">';
			$html .='<span class="icon-clock-lp"><i class="icon_clock_alt"></i></span>';
			$html .='&nbsp;';
			$html .='<span class="month">';
			$html .=get_the_date('M');
			$html .='</span>';
			$html .='&nbsp;';
			$html .='<span class="day">';
			$html .=get_the_date('d');
			$html .='</span>';
			$html .='&nbsp;';
			$html .='<span class="year">';
			$html .=get_the_date('y');
			$html .='</span>';
			$html .='<span class="line-pp"></span>';
			$html .='</div>';
			$html .='</div>';
			
			$html .='<p>';
			$html .= substr(strip_tags($post->post_content), 0, 130);
			$html .='</p>';	
            			
			$html .='<div class="readmore">';
			$html .='<a class="read-more" href="';
		    $html .= get_the_permalink();
		    $html .= '" target="_blank">';	
			$html .='Read More';
			$html .='<i class="arrow_right"></i>';		
            $html .='</a>';		
			$html .='</div>';
			
			$html .='</article>';
			$html .='</div>';
			
			endif;
			
			endwhile;
			wp_reset_query();
			$html .='</div>';
			$html .='</div>';
			$html .='</div>';
			
			$html .='</div>';
			$html .='</section>';
		
		return $html;       
				
	}
	add_shortcode('wr_blog', 'wr_blog_shortcode');
}


// Blog Slider Shortcode

if(! function_exists('wr_blog_slider_shortcode')){
	function wr_blog_slider_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
            'categoryname'=>'',
            'showpost'=>'',			

			), $atts) );
			
			$html='';
			
			$html .= '<section id="latestpost3" class="'.$class.' home-img clear">';
			$html .= '<div class="container">';			
		    $html .= '<div class="row">';
			
		    $html .= '<div class="ndlatestpost3 animation" data-animation="animation-fade-in-left">';						
		    $html .= '<div class="col-sm-3">';												
		    $html .= '<div class="latestpost-three">';												
			$html .= '<div class="heading">';			
		    $html .= '<h2>'.$title.'</h2>';
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';	
		    	
		    	
			
			$html .='<div class="col-sm-9">';
			$html .='<div class="latest-post-owl animation" data-animation="animation-fade-in-right">';
			$html .='<div class="row">';
			$html .='<div id="owl-latest-post-home3" class="blog-post nadea-theme">';
			
			global $post;
		    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
		    $loop = new WP_Query( array( 'post_type' => 'post','category_name'=> $categoryname, 'posts_per_page'=> $showpost) );
 		    while ( $loop->have_posts() ) : $loop->the_post();
			
			if( has_post_format( 'image' ) !='') :
			
			$html .='<div class="item col-sm-3">';
			$html .='<article class="post-content-container">';
			
			$html .='<div class="post-image-container">';
		    $html .= '<a href="';
		    $html .= get_the_permalink();
		    $html .= '">';		    
		    if (has_post_thumbnail( $post->ID ) ):		
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-image' );			
			$html .='<img src="';
			$html .= $image[0];
			$html .='" alt="blog post image" />';
			endif;
			$html .= '</a>';
			$html .='</div>';
			
			$html .='<div class="post-title">';
		    $html .= '<a href="';
		    $html .= get_the_permalink();
		    $html .= '" target="_blank">';	
			$html .='<h4>';
			$html .=get_the_title();
			$html .='</h4>';		
            $html .='</a>';				
			$html .='</div>';
			
			$html .='<div class="post-info">';
			$html .='<div class="post-date">';
			$html .='<span class="icon-clock-lp"><i class="icon_clock_alt"></i></span>';
			$html .='&nbsp;';
			$html .='<span class="month">';
			$html .=get_the_date('M');
			$html .='</span>';
			$html .='&nbsp;';
			$html .='<span class="day">';
			$html .=get_the_date('d');
			$html .='</span>';
			$html .='&nbsp;';
			$html .='<span class="year">';
			$html .=get_the_date('y');
			$html .='</span>';
			$html .='<span class="line-pp"></span>';
			$html .='</div>';
			$html .='</div>';
			
			$html .='<p>';
			$html .= substr(strip_tags($post->post_content), 0, 130);
			$html .='</p>';	
            			
			$html .='<div class="readmore">';
			$html .='<a class="read-more" href="';
		    $html .= get_the_permalink();
		    $html .= '" target="_blank">';	
			$html .='Read More';
			$html .='<i class="arrow_right"></i>';		
            $html .='</a>';		
			$html .='</div>';
			
			$html .='</article>';
			$html .='</div>';
			
			endif;
			
			endwhile;
			wp_reset_query();
			$html .='</div>';
			$html .='</div>';
			$html .='</div>';
			$html .='</div>';
			
			$html .='</div>';
			$html .='</div>';
			$html .='</section>';
		
		return $html;       
				
	}
	add_shortcode('wr_blog_slider', 'wr_blog_slider_shortcode');
}

// Blog Section Shortcode (Visual)

if(! function_exists('wr_vc_blog_shortcode')){
	function wr_vc_blog_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
            'categoryname'=>'',
            'showpost'=>'',			

			), $atts) );
			
			$html='';
			
			$html .= '<section id="ndlatestpost" class="'.$class.' home-img clear">';		
		    
		    $html .= '<div class="row">';						
		    $html .= '<div class="col-sm-12">';						
			$html .= '<div class="latestpost animation" data-animation="animation-fade-in-down">';			
			$html .= '<div class="heading">';			
		    $html .= '<h2>'.$title.'</h2>';
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';	
		    	

			$html .='<div class="latest-post-owl animation" data-animation="animation-fade-in-up">';
			$html .='<div class="row">';
			$html .='<div id="owl-latest-post" class="blog-post nadea-theme">';
			
			global $post;
		    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
		    $loop = new WP_Query( array( 'post_type' => 'post','category_name'=> $categoryname, 'posts_per_page'=> $showpost) );
 		    while ( $loop->have_posts() ) : $loop->the_post();
			
			if( has_post_format( 'image' ) !='') :
			
			$html .='<div class="item col-sm-3">';
			$html .='<article class="post-content-container">';
			
			$html .='<div class="post-image-container">';
		    $html .= '<a href="';
		    $html .= get_the_permalink();
		    $html .= '">';		    
		    if (has_post_thumbnail( $post->ID ) ):		
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-image' );			
			$html .='<img src="';
			$html .= $image[0];
			$html .='" alt="blog post image" />';
			endif;
			$html .= '</a>';
			$html .='</div>';
			
			$html .='<div class="post-title">';
		    $html .= '<a href="';
		    $html .= get_the_permalink();
		    $html .= '" target="_blank">';	
			$html .='<h4>';
			$html .=get_the_title();
			$html .='</h4>';		
            $html .='</a>';				
			$html .='</div>';
			
			$html .='<div class="post-info">';
			$html .='<div class="post-date">';
			$html .='<span class="icon-clock-lp"><i class="icon_clock_alt"></i></span>';
			$html .='&nbsp;';
			$html .='<span class="month">';
			$html .=get_the_date('M');
			$html .='</span>';
			$html .='&nbsp;';
			$html .='<span class="day">';
			$html .=get_the_date('d');
			$html .='</span>';
			$html .='&nbsp;';
			$html .='<span class="year">';
			$html .=get_the_date('y');
			$html .='</span>';
			$html .='<span class="line-pp"></span>';
			$html .='</div>';
			$html .='</div>';
			
			$html .='<p>';
			$html .= substr(strip_tags($post->post_content), 0, 120);
			$html .='</p>';	
            			
			$html .='<div class="readmore">';
			$html .='<a class="read-more" href="';
		    $html .= get_the_permalink();
		    $html .= '" target="_blank">';	
			$html .='Read More';
			$html .='<i class="arrow_right"></i>';		
            $html .='</a>';		
			$html .='</div>';
			
			$html .='</article>';
			$html .='</div>';
			
			endif;
			
			endwhile;
			wp_reset_query();
			$html .='</div>';
			$html .='</div>';
			$html .='</div>';
			
			$html .='</section>';
		
		return $html;       
				
	}
	add_shortcode('wr_vc_blog', 'wr_vc_blog_shortcode');
}


// Blog Slider Shortcode (Visual)

if(! function_exists('wr_vc_blog_slider_shortcode')){
	function wr_vc_blog_slider_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
            'categoryname'=>'',
            'showpost'=>'',			

			), $atts) );
			
			$html='';
			
			$html .= '<section id="latestpost3" class="'.$class.' home-img clear">';
			$html .= '<div class="container">';			
		    $html .= '<div class="row">';
			
		    $html .= '<div class="ndlatestpost3 animation" data-animation="animation-fade-in-left">';						
		    $html .= '<div class="col-sm-3">';												
		    $html .= '<div class="latestpost-three">';												
			$html .= '<div class="heading">';			
		    $html .= '<h2>'.$title.'</h2>';
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';	
	    	
			
			$html .='<div class="col-sm-9">';
			$html .='<div class="latest-post-owl animation" data-animation="animation-fade-in-right">';
			$html .='<div class="row">';
			$html .='<div id="owl-latest-post-home3" class="blog-post nadea-theme">';
			
			global $post;
		    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
		    $loop = new WP_Query( array( 'post_type' => 'post','category_name'=> $categoryname, 'posts_per_page'=> $showpost) );
 		    while ( $loop->have_posts() ) : $loop->the_post();
			
			if( has_post_format( 'image' ) !='') :
			
			$html .='<div class="item col-sm-3">';
			$html .='<article class="post-content-container">';
			
			$html .='<div class="post-image-container">';
		    $html .= '<a href="';
		    $html .= get_the_permalink();
		    $html .= '">';		    
		    if (has_post_thumbnail( $post->ID ) ):		
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-image' );			
			$html .='<img src="';
			$html .= $image[0];
			$html .='" alt="blog post image" />';
			endif;
			$html .= '</a>';
			$html .='</div>';
			
			$html .='<div class="post-title">';
		    $html .= '<a href="';
		    $html .= get_the_permalink();
		    $html .= '" target="_blank">';	
			$html .='<h4>';
			$html .=get_the_title();
			$html .='</h4>';		
            $html .='</a>';				
			$html .='</div>';
			
			$html .='<div class="post-info">';
			$html .='<div class="post-date">';
			$html .='<span class="icon-clock-lp"><i class="icon_clock_alt"></i></span>';
			$html .='&nbsp;';
			$html .='<span class="month">';
			$html .=get_the_date('M');
			$html .='</span>';
			$html .='&nbsp;';
			$html .='<span class="day">';
			$html .=get_the_date('d');
			$html .='</span>';
			$html .='&nbsp;';
			$html .='<span class="year">';
			$html .=get_the_date('y');
			$html .='</span>';
			$html .='<span class="line-pp"></span>';
			$html .='</div>';
			$html .='</div>';
			
			$html .='<p>';
			$html .= substr(strip_tags($post->post_content), 0, 120);
			$html .='</p>';	
            			
			$html .='<div class="readmore">';
			$html .='<a class="read-more" href="';
		    $html .= get_the_permalink();
		    $html .= '" target="_blank">';	
			$html .='Read More';
			$html .='<i class="arrow_right"></i>';		
            $html .='</a>';		
			$html .='</div>';
			
			$html .='</article>';
			$html .='</div>';
			
			endif;
			
			endwhile;
			wp_reset_query();
			$html .='</div>';
			$html .='</div>';
			$html .='</div>';
			$html .='</div>';
			
			$html .='</div>';
			$html .='</div>';
			$html .='</section>';
		
		return $html;       
				
	}
	add_shortcode('wr_vc_blog_slider', 'wr_vc_blog_slider_shortcode');
}


// Protfolio Filter Section

 if(! function_exists('wr_portfolio_shortcode')){
	function wr_portfolio_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'filter_style'=>'',
			'link_name'=>'',
			'link_url'=>'',
			'link_icon_show'=>'',
			
			), $atts) );
			
		$html='';
		
		$html .= '<div class="col-sm-12">';
		$html .= '<div class="row port-row">';
		$html .= '<div class="heading port-hding">';
		$html .= '<h2>'.$title.'</h2>';
		$html .= '</div>';
		$html .= '<div class="view-all"><a class="fadeInup" href="'.$link_url.'" target="_blank">'.$link_name.'<i class="'.$link_icon_show.'"></i></a></div>';
		$html .= '</div>';
		$html .= '</div>';
		
		global $post;
		
		$html .= '<div class="col-sm-12">';
		$html .= '<div class="row port-row">';
		if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
		$portfolio_category = get_terms('portfolio_category');
		if($portfolio_category):
		$html .= '<div class="portfolioFilter '.$filter_style.'">';
		$html .= '<ul>';
		$html .= '<li><a href="#" class="current" data-filter="*">All</a></li>';
		foreach($portfolio_category as $portfolio_cat):
		$html .= '<li><a href="#" data-filter=".';
		$html .= $portfolio_cat->slug;
		$html .= '">';
		$html .= $portfolio_cat->name;
		$html .= '</a>';
		$html .= '</li>';
		endforeach;
		$html .= '</ul>';
		$html .= '</div>';
		endif; 
		endif;
        $html .= '</div>';
        $html .= '</div>';
				
		return $html;
	}
	add_shortcode('wr_portfolio_header', 'wr_portfolio_shortcode');
}

 if(! function_exists('wr_portfolio_body_shortcode')){
	function wr_portfolio_body_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'showpost'=>'',
			
			), $atts) );
		$html='';
		
		
		global $post;
		$html .= '<div class="col-sm-12">';
		$html .= '<div class="row-fulid">';
		$html .= ' <ul class="portfolioContainer home-port">';
		query_posts(array('post_type' => 'portfolio','posts_per_page' => $showpost));
		while ( have_posts() ) : the_post();
		$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
		$html .= '<li class="';
		foreach($portfolio_category as $portfolio_cat):
		$html .= $portfolio_cat->slug;	
        endforeach;		
		$html .= ' col-sm-3">';
		$html .= '<div class="portfolio4col">';
		$html .= '<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon">';
		if (has_post_thumbnail( $post->ID ) ):		
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
		$html .= '<a href="';
		$html .= $image[0];
		$html .= '" title="';
		$html .= get_the_title();
		$html .= '"  class="zoom lb lb_warsaw1"><i class="icon_search"></i>';
		$html .= '</a>';
		endif;
		$html .= '<span class="border-right"> </span> <a href="';
		$html .= get_the_permalink();
		$html .= '" title="Details" target="_blank" class="linKed"> <i class="icon_link"> </i> </a></span> </span>';
		if (has_post_thumbnail( $post->ID ) ):
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-image' );
		$html .='<img src="';
		$html .= $image[0];
		$html .= '" alt="" class="img-responsive" />';
        endif;		
		$html .= '</div>';
		$html .= '</div>';
		
		$html .= '</li>';
		
		endwhile;
		wp_reset_query();
		$html .= '</ul>';
		$html .= '</div>';
		$html .= '</div>';
		
				
		return $html;
	}
	add_shortcode('wr_portfolio', 'wr_portfolio_body_shortcode');
}

// Protfolio Slider Section


if(! function_exists('wr_portfolio_slider_shortcode')){
	function wr_portfolio_slider_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
            'categoryname'=>'',
            'showpost'=>'',			

			), $atts) );
			
			$html='';
		
		
			$html .= '<section id="ndrecentworks3" class="'.$class.' home-img clear ndprotfolio3">';
			$html .= '<div class="container">';			
		    $html .= '<div class="row">';
		   						
		    $html .= '<div class="ndporfixcol">';						
		    $html .= '<div class="col-sm-3">';						
			$html .= '<div class="latestpost-three animation" data-animation="animation-fade-in-down">';			
			$html .= '<div class="heading">';			
		    $html .= '<h2>'.$title.'</h2>';
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';		
		    	
		    	
			
			$html .='<div class="col-sm-9">';
			$html .='<div class="row-fulid">';
			$html .='<ul class="portfolioContainer3 isotope animation ndrecentwork3" data-animation="animation-fade-in-up" id="owl-ndrecentworks3">';
			
			global $post;
		    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
		    $loop = new WP_Query( array( 'post_type' => 'portfolio','portfolio_category'=> $categoryname, 'posts_per_page'=> $showpost) );
 		    while ( $loop->have_posts() ) : $loop->the_post();
			
		    $html .= '<li class="col-sm-3">';
		    $html .= '<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon">';
		    if (has_post_thumbnail( $post->ID ) ):		
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
		    $html .= '<a href="';
		    $html .= $image[0];
		    $html .= '" title="';
		    $html .= get_the_title();
		    $html .= '"  class="zoom lb lb_warsaw1"><i class="icon_plusnd"></i>';
		    $html .= ' </a></span> </span> ';
		    endif;
		    if (has_post_thumbnail( $post->ID ) ):
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-image' );
		    $html .='<img src="';
		    $html .= $image[0];
		    $html .= '" alt="" class="img-responsive" />';
            endif;		
		    $html .= '</div>';
		    $html .= '</li>';
						
			endwhile;
			wp_reset_query();
			$html .='</ul>';
			$html .='</div>';
			$html .='</div>';
			
			$html .='</div>';
			$html .='</div>';
			$html .='</section>';
		
				
		return $html;
	}
	add_shortcode('wr_portfolio_slider', 'wr_portfolio_slider_shortcode');
}


// Protfolio Filter Section (Visual)

 if(! function_exists('wr_vc_portfolio_shortcode')){
	function wr_vc_portfolio_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'filter_style'=>'',
			'link_name'=>'',
			'link_url'=>'',
			'link_icon_show'=>'',
			
			), $atts) );
			
		$html='';
		
		$html .= '<div class="port-vc '.$class.'">';
		
		$html .= '<div class="col-sm-12">';
		$html .= '<div class="row port-row">';
		$html .= '<div class="heading port-hding">';
		$html .= '<h2>'.$title.'</h2>';
		$html .= '</div>';
		$html .= '<div class="view-all"><a class="fadeInup" href="'.$link_url.'" target="_blank">'.$link_name.'<i class="'.$link_icon_show.'"></i></a></div>';
		$html .= '</div>';
		$html .= '</div>';
		
		global $post;
		
		$html .= '<div class="col-sm-12">';
		$html .= '<div class="row port-row">';
		if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
		$portfolio_category = get_terms('portfolio_category');
		if($portfolio_category):
		$html .= '<div class="portfolioFilter '.$filter_style.'">';
		$html .= '<ul>';
		$html .= '<li><a href="#" class="current" data-filter="*">All</a></li>';
		foreach($portfolio_category as $portfolio_cat):
		$html .= '<li><a href="#" data-filter=".';
		$html .= $portfolio_cat->slug;
		$html .= '">';
		$html .= $portfolio_cat->name;
		$html .= '</a>';
		$html .= '</li>';
		endforeach;
		$html .= '</ul>';
		$html .= '</div>';
		endif; 
		endif;
        $html .= '</div>';
        $html .= '</div>';
		
        $html .= do_shortcode('[wr_vc_portfolio]');
		
		$html .= '</div>';		
		return $html;
	}
	add_shortcode('wr_vc_portfolio_header', 'wr_vc_portfolio_shortcode');
}

 if(! function_exists('wr_vc_portfolio_body_shortcode')){
	function wr_vc_portfolio_body_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'showpost'=>'',
			
			), $atts) );
		$html='';
		
		
		global $post;
		$html .= '<div class="col-sm-12 no-padding">';
		$html .= '<div class="row-fulid">';
		$html .= ' <ul class="portfolioContainer home-port">';
		query_posts(array('post_type' => 'portfolio','posts_per_page' => '8'));
		while ( have_posts() ) : the_post();
		$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
		$html .= '<li class="';
		foreach($portfolio_category as $portfolio_cat):
		$html .= $portfolio_cat->slug;	
        endforeach;		
		$html .= ' col-sm-3">';
		$html .= '<div class="portfolio4col">';
		$html .= '<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon">';
		if (has_post_thumbnail( $post->ID ) ):		
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
		$html .= '<a href="';
		$html .= $image[0];
		$html .= '" title="';
		$html .= get_the_title();
		$html .= '"  class="zoom lb lb_warsaw1"><i class="icon_search"></i>';
		$html .= '</a>';
		endif;
		$html .= '<span class="border-right"> </span> <a href="';
		$html .= get_the_permalink();
		$html .= '" title="Details" target="_blank" class="linKed"> <i class="icon_link"> </i> </a></span> </span>';
		if (has_post_thumbnail( $post->ID ) ):
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-image' );
		$html .='<img src="';
		$html .= $image[0];
		$html .= '" alt="" class="img-responsive" />';
        endif;		
		$html .= '</div>';
		$html .= '</div>';
		
		$html .= '</li>';
		
		endwhile;
		wp_reset_query();
		$html .= '</ul>';
		$html .= '</div>';
		$html .= '</div>';
		
				
		return $html;
	}
	add_shortcode('wr_vc_portfolio', 'wr_vc_portfolio_body_shortcode');
}

// Protfolio Slider Section (Visual)

if(! function_exists('wr_vc_portfolio_slider_shortcode')){
	function wr_vc_portfolio_slider_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
            'categoryname'=>'',
            'showpost'=>'',			

			), $atts) );
			
			$html='';
		
		
			$html .= '<section id="ndrecentworks3" class="'.$class.' home-img clear ndprotfolio3">';		
		    $html .= '<div class="row">';
		   						
		    $html .= '<div class="ndporfixcol">';						
		    $html .= '<div class="col-sm-3">';						
			$html .= '<div class="latestpost-three animation" data-animation="animation-fade-in-down">';			
			$html .= '<div class="heading">';			
		    $html .= '<h2>'.$title.'</h2>';
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';	
		    $html .= '</div>';		
		    	
		    	
			
			$html .='<div class="col-sm-9">';
			$html .='<div class="row-fulid">';
			$html .='<ul class="portfolioContainer3 isotope animation ndrecentwork3" data-animation="animation-fade-in-up" id="owl-ndrecentworks3">';
			
			global $post;
		    $paged=(get_query_var('paged'))?get_query_var('paged'):1;
		    $loop = new WP_Query( array( 'post_type' => 'portfolio','portfolio_category'=> $categoryname, 'posts_per_page'=> $showpost) );
 		    while ( $loop->have_posts() ) : $loop->the_post();
			
		    $html .= '<li class="col-sm-3">';
		    $html .= '<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon">';
		    if (has_post_thumbnail( $post->ID ) ):		
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
		    $html .= '<a href="';
		    $html .= $image[0];
		    $html .= '" title="';
		    $html .= get_the_title();
		    $html .= '"  class="zoom lb lb_warsaw1"><i class="icon_plusnd"></i>';
		    $html .= ' </a></span> </span> ';
		    endif;
		    if (has_post_thumbnail( $post->ID ) ):
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-image' );
		    $html .='<img src="';
		    $html .= $image[0];
		    $html .= '" alt="" class="img-responsive" />';
            endif;		
		    $html .= '</div>';
		    $html .= '</li>';
						
			endwhile;
			wp_reset_query();
			$html .='</ul>';
			$html .='</div>';
			$html .='</div>';
			
			$html .='</div>';
			$html .='</section>';
		
				
		return $html;
	}
	add_shortcode('wr_vc_portfolio_slider', 'wr_vc_portfolio_slider_shortcode');
}


// Team Member Shortcode

if(! function_exists('wr_team_shortcode')){
	function wr_team_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'showpost'=>'',	
			'categoryname'=>''			
			
			
			), $atts) );

		$html='';

		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'team','team_category'=> $categoryname,'posts_per_page'=> $showpost) );
 		while ( $loop->have_posts() ) : $loop->the_post();
		
		$html .='<div class="col-sm-3">';
		
		$html .='<div class="ndmembers">';
		$html .='<figure>';
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-img' );
		$html .= '<img src="';
		$html .= $image[0];
		$html .= '" alt="" />';
		endif;		
		$html .='</figure>';		
		$html .='<h4 class="ndname">';
		$html .=get_the_title();
		$html .='</h4>';				
		$html .='<p class="ndoccupation">';
		$team_category = wp_get_post_terms($post->ID,'team_category');
		foreach ($team_category as $item)
		$html .= $item->name;
		$html .='</p>';				
		$html .='</div>';
		
		$html .='<div class="ndsocial-share">';
		$html .='<ul>';		
		if (get_post_meta($post->ID,'rnr_facebook_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_facebook_link',true);
		$html .= '" ><i class="fa fa-facebook"></i></a></li>';
		endif;			
		if (get_post_meta($post->ID,'rnr_twitter_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_twitter_link',true);
		$html .= '" ><i class="fa fa-twitter"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_googleplus_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_googleplus_link',true);
		$html .= '" ><i class="fa fa-google-plus"></i></a></li>';
		endif;	
		if (get_post_meta($post->ID,'rnr_linkedin_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_linkedin_link',true);
		$html .= '" ><i class="fa fa-linkedin"></i></a></li>';
		endif;		
		if (get_post_meta($post->ID,'rnr_instagram_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_instagram_link',true);
		$html .= '" ><i class="fa fa-instagram"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_pinterest_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_pinterest_link',true);
		$html .= '" ><i class="fa fa-pinterest-p"></i></a></li>';
		endif;		
		if (get_post_meta($post->ID,'rnr_behance_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_behance_link',true);
		$html .= '" ><i class="fa fa-behance"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_soundcloud_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_soundcloud_link',true);
		$html .= '" ><i class="fa fa-soundcloud"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_skype_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_skype_link',true);
		$html .= '" ><i class="fa fa-skype"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_dribbble_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_dribbble_link',true);
		$html .= '" ><i class="fa fa-dribbble"></i></a></li>';
		endif;	
		if (get_post_meta($post->ID,'rnr_youtube_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_youtube_link',true);
		$html .= '" ><i class="fa fa-youtube"></i></a></li>';
		endif;	
		if (get_post_meta($post->ID,'rnr_git_square_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_git_square_link',true);
		$html .= '" ><i class="fa fa-git-square"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_email_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_email_link',true);
		$html .= '" ><i class="icon_mail_alt"></i></a></li>';
		endif;		
		$html .='</div>';
		$html .='</ul>';
		
		$html .='</div>';
		endwhile;
		wp_reset_query();

		
		
				
		return $html;
	}
	add_shortcode('wr_team', 'wr_team_shortcode');
}


// Team Member Shortcode (Visual)

if(! function_exists('wr_vc_team_shortcode')){
	function wr_vc_team_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'showpost'=>'',	
			'categoryname'=>''						
			
			), $atts) );

		$html='';
		
		$html .='<div class="row">';

		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'team','team_category'=> $categoryname,'posts_per_page'=> $showpost) );
 		while ( $loop->have_posts() ) : $loop->the_post();
		
		$html .='<div class="col-sm-3">';
		
		$html .='<div class="ndmembers">';
		$html .='<figure>';
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-img' );
		$html .= '<img src="';
		$html .= $image[0];
		$html .= '" alt="" />';
		endif;		
		$html .='</figure>';		
		$html .='<h4 class="ndname">';
		$html .=get_the_title();
		$html .='</h4>';				
		$html .='<p class="ndoccupation">';
		$team_category = wp_get_post_terms($post->ID,'team_category');
		foreach ($team_category as $item)
		$html .= $item->name;
		$html .='</p>';				
		$html .='</div>';
		
		$html .='<div class="ndsocial-share">';
		$html .='<ul>';		
		if (get_post_meta($post->ID,'rnr_facebook_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_facebook_link',true);
		$html .= '" ><i class="fa fa-facebook"></i></a></li>';
		endif;			
		if (get_post_meta($post->ID,'rnr_twitter_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_twitter_link',true);
		$html .= '" ><i class="fa fa-twitter"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_googleplus_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_googleplus_link',true);
		$html .= '" ><i class="fa fa-google-plus"></i></a></li>';
		endif;	
		if (get_post_meta($post->ID,'rnr_linkedin_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_linkedin_link',true);
		$html .= '" ><i class="fa fa-linkedin"></i></a></li>';
		endif;		
		if (get_post_meta($post->ID,'rnr_instagram_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_instagram_link',true);
		$html .= '" ><i class="fa fa-instagram"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_pinterest_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_pinterest_link',true);
		$html .= '" ><i class="fa fa-pinterest-p"></i></a></li>';
		endif;		
		if (get_post_meta($post->ID,'rnr_behance_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_behance_link',true);
		$html .= '" ><i class="fa fa-behance"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_soundcloud_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_soundcloud_link',true);
		$html .= '" ><i class="fa fa-soundcloud"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_skype_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_skype_link',true);
		$html .= '" ><i class="fa fa-skype"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_dribbble_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_dribbble_link',true);
		$html .= '" ><i class="fa fa-dribbble"></i></a></li>';
		endif;	
		if (get_post_meta($post->ID,'rnr_youtube_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_youtube_link',true);
		$html .= '" ><i class="fa fa-youtube"></i></a></li>';
		endif;	
		if (get_post_meta($post->ID,'rnr_git_square_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_git_square_link',true);
		$html .= '" ><i class="fa fa-git-square"></i></a></li>';
		endif;
		if (get_post_meta($post->ID,'rnr_email_link',true)!=''):;
		$html .= '<li><a href="';		
		$html .= get_post_meta($post->ID,'rnr_email_link',true);
		$html .= '" ><i class="icon_mail_alt"></i></a></li>';
		endif;		
		$html .='</div>';
		$html .='</ul>';
		
		$html .='</div>';
		endwhile;
		wp_reset_query();

		$html .='</div>';
				
		return $html;
	}
	add_shortcode('wr_vc_team', 'wr_vc_team_shortcode');
}

// Testimonial Section Shortcode

if(! function_exists('wr_testimonial_holder_shortcode')){
	function wr_testimonial_holder_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',			
			'title'=>'',
			'show_contorls'=>'',
			), $atts) );

				
		return '
		     <div id="'.$show_contorls.'" class="'.$class.' testimonialz clear animation">
			 <div class="heading">
				<h2>'.$title.'</h2>
			 </div>
	         <div id="owl-testimonials3">
	         '.do_shortcode($content).'
	         </div>
	         </div>
                
				';
	}
	add_shortcode('wr_testimonial_holder', 'wr_testimonial_holder_shortcode');
}


if(! function_exists('wr_testimonial_shortcode')){
	function wr_testimonial_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'company'=>'',		
			), $atts) );

				
		return '
		    
			<div class="'.$class.' item">
				<div class="ndfact item-let">
					<i class="quotesIconblack ndquoteIcon"></i>
				</div>
				<div class="item-right">
					<h3 class="test-text">'.$content.'</h3>
					<p>- '.$title.', <span class="company-name">'.$company.'</span></p>
				</div>				
	        </div>

                
				';
	}
	add_shortcode('wr_testimonial', 'wr_testimonial_shortcode');
}


// Partner Section Shortcode

if(! function_exists('wr_partner_holder_shortcode')){
	function wr_partner_holder_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',			
			), $atts) );

				
		return '

			 <div class="'.$class.' clear  animation" data-animation="animation-fade-in-up" id="ndOurClient">
	         <div id="owl-OurClient">
	         '.do_shortcode($content).'
	         </div>
	         </div>

                
				';
	}
	add_shortcode('wr_partner_holder', 'wr_partner_holder_shortcode');
}

if(! function_exists('wr_partner_shortcode')){
	function wr_partner_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'partner'=>'',		
			'img_url'=>'',		
			), $atts) );

				
		return '
		    
			<div class="'.$class.' item owl-clientimg">
				<a class="singleClient" href="'.$partner.'" title="'.$title.'">
					<img src="'.$img_url.'" alt="Image">
				</a>				
	        </div>

                
				';
	}
	add_shortcode('wr_partner', 'wr_partner_shortcode');
}


// Tabs Section Shortcode

if(! function_exists('wr_tabs_shortcode')){
	function wr_tabs_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>''
			
			), $atts) );
		
		return '
		
		<section id="servicestabs" class="ndsertab clear animation" data-animation="animation-fade-in-down">
		<div class="ndsertabtitle">
		<h3>'.$title.'</h3>
		'.do_shortcode($content).'
		</div>
		</section>
		
		';
	}
	add_shortcode('wr_tabs', 'wr_tabs_shortcode');
}

if(! function_exists('wr_tabs_ul_shortcode')){
	function wr_tabs_ul_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>''
			
			), $atts) );
		
		return '
		
		<div class="nd-default">
        <ul class="nav nav-tabs">
		'.do_shortcode($content).'
		</ul>
		</div>
		
		';
	}
	add_shortcode('wr_tabs_ul', 'wr_tabs_ul_shortcode');
}
 
if(! function_exists('wr_tabs_menu_shortcode')){
	function wr_tabs_menu_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'tab_title'=>'',
			'tab_active'=>'',
			
			), $atts) );
		
		return '
		<li class="'.$tab_active.'">
        <a href="#'.$tab_title.'" data-toggle="tab">
		'.$tab_title.'
        </a>
        </li>
		
		';
	}
	add_shortcode('wr_tabs_menu', 'wr_tabs_menu_shortcode');
}

if(! function_exists('wr_tabs_content_box_shortcode')){
	function wr_tabs_content_box_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>''
			
			), $atts) );
		
		return '
		
		<div class="ndtabbody">
		<div class="tab-content">
		'.do_shortcode($content).'
		</div>
		</div>
        
		';
	}
	add_shortcode('wr_tabs_content_box','wr_tabs_content_box_shortcode');
}

if(! function_exists('wr_tabs_content_shortcode')){
	function wr_tabs_content_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'tab_title'=>'',
			'tab_active'=>''
			
			
			), $atts) );
		
		return '
		    
			<div class="tab-pane fade in '.$tab_active.'" id="'.$tab_title.'">
			<div class="ndsertab-item clear">
			'.$content.'
			</div>
			</div>
        
		';
	}
	add_shortcode('wr_tabs_content', 'wr_tabs_content_shortcode');
}


// Accordion Section Shortcode

if(! function_exists('wr_accordion_holder_shortcode')){
	function wr_accordion_holder_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',			
			), $atts) );

				
		return '

			 <div class="'.$class.' aboutAccordian accordianShortCode" id="accordianShortCode">
	         '.do_shortcode($content).'
	         </div>

                
				';
	}
	add_shortcode('wr_accordion_holder', 'wr_accordion_holder_shortcode');
}

if(! function_exists('wr_accordion_shortcode')){
	function wr_accordion_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'active'=>'',			
			), $atts) );

				
		return '
		    
			<div class="accordionRow toggleRow triggerRow '.$class.'">
			    <a class="accordion-toggle3 WhoAreWetrigger '.$active.'" href="#">'.$title.'</a>
				<div class="accordion-content triggerMenu">
				    <p>'.$content.'</p>
	            </div>
			</div>

                
				';
	}
	add_shortcode('wr_accordion', 'wr_accordion_shortcode');
}


// Progress Bar Section Shortcode

if(! function_exists('wr_progressbar_shortcode')){
	function wr_progressbar_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'counter_num'=>'',			
			), $atts) );

				
		return '
		     <div class="naporgress-bar">
			 <h2 class="progr-title">'.$title.'<span class="pull-right pro-count">'.$counter_num.'%</span></h2>
			 <div class="progress">
			    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="'.$counter_num.'" class="progress-bar" role="progressbar" style="width: '.$counter_num.'%;"></div>
            </div>
            </div>
                
				';
	}
	add_shortcode('wr_progress_bar', 'wr_progressbar_shortcode');
}


// Progress Bar Section Shortcode (Visual)

if(! function_exists('wr_vc_progressbar_shortcode')){
	function wr_vc_progressbar_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'counter_num'=>'',			
			), $atts) );

				
		return '
		     <div class="naporgress-bar '.$class.'">
			 <h2 class="progr-title">'.$title.'<span class="pull-right pro-count">'.$counter_num.'%</span></h2>
			 <div class="progress">
			    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="'.$counter_num.'" class="progress-bar" role="progressbar" style="width: '.$counter_num.'%;"></div>
            </div>
            </div>
                
				';
	}
	add_shortcode('wr_vc_progress_bar', 'wr_vc_progressbar_shortcode');
}

// Pricing Section Shortcode

if(! function_exists('wr_pricing_holder_shortcode')){
	function wr_pricing_holder_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'price'=>'',
			'period'=>'',
			'button_text'=>'',
			'button_link'=>'',
			'active'=>'',
			
			), $atts) );

				
		return '
             
			 <div class="singprictab '.$class.'">
			 <div class="ndtbl-pricing ndtbl-pricingthree animation" data-animation="animation-fade-in-up">
			 <div class="item '.$active.'">
			 <div class="tbl-header">'.$title.'</div>
			 <div class="tbl-price">'.$price.' <span class="prmonth">/ '.$period.'</span></div>
			 <ul class="tbl-lists">
	         '.do_shortcode($content).'
			 </ul>
			 <div class="tbl-footer">
				<a href="'.$button_link.'" class="btn btn-default">'.$button_text.'</a>
			 </div>
	         </div>
	         </div>
	         </div>

                
				';
	}
	add_shortcode('wr_pricing_holder', 'wr_pricing_holder_shortcode');
}

if(! function_exists('wr_pricing_shortcode')){
	function wr_pricing_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
						
			), $atts) );

				
		return '
		    
			<li>'.$content.'</li>

                
				';
	}
	add_shortcode('wr_pricing', 'wr_pricing_shortcode');
}


// Social Icon

if(! function_exists('wr_social_shortcode')){
	function wr_social_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'style'=>'',
			'color'=>'',
			

			), $atts) );

		$html ='';
		$wr_options = get_option('nadea_wp');
		$html .= '<ul class="'.$class.' '.$style.'">';
		
		if(!empty($wr_options['facebook'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['facebook']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-facebook"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;

		if(!empty($wr_options['twitter'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['twitter']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-twitter"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;	
		
		if(!empty($wr_options['google'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['google']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-google-plus"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;			
		
		if(!empty($wr_options['linkedin'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['linkedin']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-linkedin"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;			
		
		if(!empty($wr_options['instagram'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['instagram']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-instagram"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;			
		
		if(!empty($wr_options['pinterest'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['pinterest']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-pinterest-p"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;			
		
		if(!empty($wr_options['behance'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['behance']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-behance"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;			
		
		if(!empty($wr_options['soundcloud'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['soundcloud']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-soundcloud"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;		
	
		
		if(!empty($wr_options['skype'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['skype']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-skype"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;		
	
		
		if(!empty($wr_options['dribbble'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['dribbble']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-dribbble"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;		
	
		
		if(!empty($wr_options['youtube'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['youtube']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-youtube"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;		
	
		
		if(!empty($wr_options['git-square'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['git-square']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-git-square"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;	
		
		
		if(!empty($wr_options['email'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['email']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-envelope"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;		
										
		$html .= '</ul>';
				
		return $html ;
	}
	add_shortcode('wr_social_icon', 'wr_social_shortcode');
}


// Social Icon (Visual)

if(! function_exists('wr_vc_social_shortcode')){
	function wr_vc_social_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'style'=>'',
			'color'=>'',
			

			), $atts) );

		$html ='';
		$wr_options = get_option('nadea_wp');
		$html .= '<ul class="'.$class.' '.$style.'">';
		
		if(!empty($wr_options['facebook'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['facebook']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-facebook"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;

		if(!empty($wr_options['twitter'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['twitter']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-twitter"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;	
		
		if(!empty($wr_options['google'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['google']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-google-plus"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;			
		
		if(!empty($wr_options['linkedin'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['linkedin']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-linkedin"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;			
		
		if(!empty($wr_options['instagram'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['instagram']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-instagram"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;			
		
		if(!empty($wr_options['pinterest'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['pinterest']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-pinterest-p"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;			
		
		if(!empty($wr_options['behance'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['behance']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-behance"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;			
		
		if(!empty($wr_options['soundcloud'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['soundcloud']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-soundcloud"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;		
	
		
		if(!empty($wr_options['skype'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['skype']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-skype"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;		
	
		
		if(!empty($wr_options['dribbble'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['dribbble']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-dribbble"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;		
	
		
		if(!empty($wr_options['youtube'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['youtube']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-youtube"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;		
	
		
		if(!empty($wr_options['git-square'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['git-square']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-git-square"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;	
		
		
		if(!empty($wr_options['email'])):;
		$html .= '<li style="border-color:'.$color.';">';
		$html .= '<a href="';
		$html .= ($wr_options['email']);
		$html .='" style="color:'.$color.';">';
		$html .= '<i class="fa fa-envelope"></i>';
		$html .= '</a>';
		$html .= '</li>';
		endif;		
										
		$html .= '</ul>';
				
		return $html ;
	}
	add_shortcode('wr_vc_social_icon', 'wr_vc_social_shortcode');
}


// Newsletter

if(! function_exists('wr_newsletter_shortcode')){
	function wr_newsletter_shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
			'style'=> '',
			'title'=> '',
			'margin'=> '',
			'padding'=> '',			
		
		),$atts));
		
		return'
			<div class="newsletter '.$class.' '.$style.'" style="padding:'.$padding.'; margin:'.$margin.';">
              '.do_shortcode($content).'
            </div>
			
		
		';
		
	}
	add_shortcode('wr_newsletter', 'wr_newsletter_shortcode');
	
}

// Newsletter (Visual)

if(! function_exists('wr_vc_newsletter_shortcode')){
	function wr_vc_newsletter_shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'style'=> '',
			'title'=> '',
			'margin'=> '',
			'padding'=> '',			
		
		),$atts));
		
		return'
			<div class="newsletter '.$class.' '.$style.'" style="padding:'.$padding.'; margin:'.$margin.';">
              '.do_shortcode($content).'
            </div>
			
		
		';
		
	}
	add_shortcode('wr_vc_newsletter', 'wr_vc_newsletter_shortcode');
	
}

// Contact Info
if(! function_exists('wr_contact_info_shortcode')){
	function wr_contact_info_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'con_phone'=>'',
			'con_mail'=>'',
	

			), $atts) );

				
		return '
		
		<div class="sidecontarinfo animation" data-animation="animation-fade-in-right">
			<ul class="address '.$class.'">
				<li>
					<div class="pull-left icon-pin-addcon">
						<i class="icon_pin_alt"></i>
					</div>
					<p>'.$content.'</p>
				</li>
				<li>
					<div class="pull-left icon-pin-addcon">
						<i class="icon_mobile"></i>
				    </div>
				    <p>'.$con_phone.'</p>
				</li>
				<li>
					<div class="pull-left icon-pin-addcon">
					    <i class="icon_mail_alt"></i>
					</div>
					<p><a class="mail-box" href="mailto:'.$con_mail.'">'.$con_mail.'</a></p>
				</li>
			</ul>			
        </div>
        
				';
	}
	add_shortcode('wr_contact_info', 'wr_contact_info_shortcode');
}

// Contact Info (Visual)
if(! function_exists('wr_vc_contact_info_shortcode')){
	function wr_vc_contact_info_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'con_phone'=>'',
			'con_mail'=>'',
	

			), $atts) );

				
		return '
		
		<div class="sidecontarinfo animation" data-animation="animation-fade-in-right">
			<ul class="address '.$class.'">
				<li>
					<div class="pull-left icon-pin-addcon">
						<i class="icon_pin_alt"></i>
					</div>
					<p>'.$content.'</p>
				</li>
				<li>
					<div class="pull-left icon-pin-addcon">
						<i class="icon_mobile"></i>
				    </div>
				    <p>'.$con_phone.'</p>
				</li>
				<li>
					<div class="pull-left icon-pin-addcon">
					    <i class="icon_mail_alt"></i>
					</div>
					<p><a class="mail-box" href="mailto:'.$con_mail.'">'.$con_mail.'</a></p>
				</li>
			</ul>			
        </div>
        
				';
	}
	add_shortcode('wr_vc_contact_info', 'wr_vc_contact_info_shortcode');
}


// Contact Form
if(! function_exists('wr_contact_shortcode')){
	function wr_contact_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'contactfromid'=>'',			
			
					

			), $atts) );

				
		return '

					<div class="contact-form">
						'.do_shortcode('[contact-form-7 id="'.$contactfromid.'" title="Contact form"]').'
					</div>
                
				';
	}
	add_shortcode('wr_contact_form', 'wr_contact_shortcode');
}

// Contact Form (Visual)
if(! function_exists('wr_vc_contact_shortcode')){
	function wr_vc_contact_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'contactfromid'=>'',			
			
					

			), $atts) );

				
		return '

					<div class="contact-form '.$class.'">
						'.do_shortcode('[contact-form-7 id="'.$contactfromid.'" title="Contact form"]').'
					</div>
                
				';
	}
	add_shortcode('wr_vc_contact_form', 'wr_vc_contact_shortcode');
}

// Google Map
if(! function_exists('wr_map_shortcode')){
	function wr_map_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'width'=>'',
			'height'=>'',
	

			), $atts) );

				
		return '
		
		    
			    <iframe src="'.$content.'" class="google-map" style="width:'.$width.'; height:'.$height.'"></iframe>
			
                
				';
	}
	add_shortcode('wr_map', 'wr_map_shortcode');
}

// Google Map (Visual)
if(! function_exists('wr_vc_map_shortcode')){
	function wr_vc_map_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'width'=>'',
			'height'=>'',
	

			), $atts) );

				
		return '
		
		    
			    <iframe src="'.$content.'" class="google-map '.$class.'" style="width:'.$width.'; height:'.$height.'"></iframe>
			
                
				';
	}
	add_shortcode('wr_vc_map', 'wr_vc_map_shortcode');
}