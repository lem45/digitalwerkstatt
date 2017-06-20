<?php
/*** Removing shortcodes ***/
vc_remove_element("vc_widget_sidebar");
vc_remove_element("vc_gallery");
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_button2");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");

/*** Remove unused parameters ***/
if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_column_text', 'css_animation');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
}

/*** Remove frontend editor ***/
if(function_exists('vc_disable_frontend')){
	vc_disable_frontend();
}

/*** Row ***/

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Row Type",
	"param_name" => "row_type",
	"value" => array(
	    "Row" => "row",
		"Nadea Row" => "main-section",
		
	)
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Type",
	"param_name" => "type",
	"value" => array(
		"Full Width" => "full_width",
		"In Grid" => "grid"		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Anchor ID",
	"param_name" => "anchor",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

// Nadea Row Main Section Start //
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Section Layout",
	"param_name" => "wr_section_layout",
	"value" => array(
		"Full Width" => "section_full_width",
		"Grid" => "section_grid",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Section ID",
	"param_name" => "wr_section_id",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Section Class",
	"param_name" => "wr_section_class",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Height",
	"param_name" => "wr_section_height",
	"value" => "",
	"description" => __("Please insert height in format: 300px", 'nadea'),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Background Color",
	"param_name" => "wr_background_color",
	"value" => "#fff",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Background image",
	"value" => "",
	"param_name" => "wr_background_img",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Section Parallax",
	"param_name" => "wr_background_parallax",
	"value" => array(
		"Disable" => "inherit",
		"Enable" => "fixed",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Top",
	"param_name" => "wr_padding_top",
	"value" => "0px",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "0px",
	"heading" => "Padding Bottom",
	"param_name" => "wr_padding_bottom",
	"value" => "0px",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Margin Top",
	"param_name" => "wr_margin_top",
	"value" => "0px",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Margin Bottom",
	"param_name" => "wr_margin_bottom",
	"value" => "0px",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));

// Nadea Row Main Section End //


vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Row in content menu",
	"value" => array(
		"No" => "",
		"Yes" => "in_content_menu"
	),
	"param_name" => "in_content_menu",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Content menu title",
	"value" => "",
	"param_name" => "content_menu_title",
	"description" => "",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Content menu icon",
	"param_name" => "content_menu_icon",
	"value" => '',
	"description" => "",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Text Align",
	"param_name" => "text_align",
	"value" => array(
		"Left" => "left",
		"Center" => "center",
		"Right" => "right"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Video background",
	"value" => array(
		"No" => "",
		"Yes" => "show_video"
	),
	"param_name" => "video",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Video overlay",
	"value" => array(
		"No" => "",
		"Yes" => "show_video_overlay"
	),
	"param_name" => "video_overlay",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Video overlay image (pattern)",
	"value" => "",
	"param_name" => "video_overlay_image",
	"description" => "",
	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Video background (webm) file url",
	"value" => "",
	"param_name" => "video_webm",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Video background (mp4) file url",
	"value" => "",
	"param_name" => "video_mp4",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Video background (ogv) file url",
	"value" => "",
	"param_name" => "video_ogv",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Video preview image",
	"value" => "",
	"param_name" => "video_image",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Background image",
	"value" => "",
	"param_name" => "background_image",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Section height",
	"param_name" => "section_height",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));
vc_add_param("vc_row", array(
    "type" => "textfield",
    "class" => "",
    "heading" => "Parallax speed",
    "param_name" => "parallax_speed",
    "value" => "",
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Background color",
	"param_name" => "background_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable','content_menu'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Border bottom color",
	"param_name" => "border_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding",
	"value" => "",
	"param_name" => "side_padding",
	"description" => "Padding (left/right in % - full width only)",
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Top",
	"value" => "",
	"param_name" => "padding_top",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Bottom",
	"value" => "",
	"param_name" => "padding_bottom",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Label Color",
	"param_name" => "color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Label Hover Color",
	"param_name" => "hover_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "More Label",
	"param_name" => "more_button_label",
	"value" =>  "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Less Label",
	"param_name" => "less_button_label",
	"value" =>  "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Label Position",
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		"Left" => "left",
		"Right" => "right",
		"Center" => "center"
	),
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row",  array(
  "type" => "dropdown",
  "heading" => "CSS Animation",
  "param_name" => "css_animation",
  "admin_label" => true,
  "value" => '',
  "description" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));
vc_add_param("vc_row",  array(
  "type" => "textfield",
  "heading" => "Transition delay (ms)",
  "param_name" => "transition_delay",
  "admin_label" => true,
  "value" => "",
  "description" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));


/*** Row Inner ***/

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Row Type",
	"param_name" => "row_type",
	"value" => array(
		"Row" => "row",
	)
	
));
vc_add_param("vc_row_inner", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => "Use as box",
	"value" => array("Use row as box" => "use_row_as_box" ),
	"param_name" => "use_as_box",
	"description" => '',
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Type",
	"param_name" => "type",
	"value" => array(
		"Full Width" => "full_width",
		"In Grid" => "grid"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Anchor ID",
	"param_name" => "anchor",
	"value" => ""
));
vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Text Align",
	"param_name" => "text_align",
	"value" => array(
		"Left" => "left",
		"Center" => "center",
		"Right" => "right"
	)
	
));
vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Background color",
	"param_name" => "background_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Background image",
	"value" => "",
	"param_name" => "background_image",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Border color",
	"param_name" => "border_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding",
	"value" => "",
	"param_name" => "padding",
	"description" => "Padding (left/right in % - full width only)",
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Top",
	"value" => "",
	"param_name" => "padding_top",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Bottom",
	"value" => "",
	"param_name" => "padding_bottom",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));



/////********** By Nadea **********/////

// Title Block
vc_map( array(
		"name" => "Nadea Title",
		"base" => "wr_vc_section_title",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),		
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Heading Title",
				"param_name" => "title",
				"value" => ""
			),	
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "Color",
				"param_name" => "color",
				"value" => "#7e8082"
			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Font Size",
				"param_name" => "font_size",
				"value" => "24px"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Font Weight",
				"param_name" => "font_weight",
				"value" => array(
					"Default" => "normal",
					"Lighter" => "lighter",
					"Thin 100" => "100",
					"Extra-Light 200" => "200",
					"Light 300" => "300",
					"Regular 400" => "400",
					"Medium 500" => "500",
					"Semi-Bold 600" => "600",
					"Bold 700" => "700",
					"Extra-Bold 800" => "800",
					"Ultra-Bold 900" => "900",
				)

			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Font Line Height",
				"param_name" => "line_height",
				"value" => "22px"
			),	
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Text Align",
				"param_name" => "text_align",
				"value" => array(
					"Left" => "left",
					"Right" => "right",
					"Center" => "center",
					"Justify" => "justify",
					
				),
				"description" => ""
			),
				array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Text Transform",
				"param_name" => "text_transform",
				"value" => array(
					"Uppercase" => "uppercase",
					"Lowercase" => "lowercase",
					"Capitalize" => "capitalize",
					"None" => "none",
					
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'nadea')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'nadea')
			),			
			
		)
) );

// Text Block
vc_map( array(
		"name" => "Nadea Text",
		"base" => "wr_vc_section_text",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),		
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Text Content",
				"param_name" => "content",
				"value" => "I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo."
			),	
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "Color",
				"param_name" => "color",
				"value" => "#7e8082"
			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Font Size",
				"param_name" => "font_size",
				"value" => "13px"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Font Weight",
				"param_name" => "font_weight",
				"value" => array(
					"Default" => "normal",
					"Lighter" => "lighter",
					"Thin 100" => "100",
					"Extra-Light 200" => "200",
					"Light 300" => "300",
					"Regular 400" => "400",
					"Medium 500" => "500",
					"Semi-Bold 600" => "600",
					"Bold 700" => "700",
					"Extra-Bold 800" => "800",
					"Ultra-Bold 900" => "900",
				)

			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Font Line Height",
				"param_name" => "line_height",
				"value" => "18px"
			),	
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Text Align",
				"param_name" => "text_align",
				"value" => array(
					"Left" => "left",
					"Right" => "right",
					"Center" => "center",
					"Justify" => "justify",
					
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Text Transform",
				"param_name" => "text_transform",
				"value" => array(
				    "None" => "none",
					"Uppercase" => "uppercase",
					"Lowercase" => "lowercase",
					"Capitalize" => "capitalize",
					
					
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'nadea')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'nadea')
			),			
			
		)
) );


// Image Block
vc_map( array(
		"name" => "Nadea Image",
		"base" => "wr_vc_section_image",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),		
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Upload Image",
				"param_name" => "img_url",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Width",
				"param_name" => "width",
				"value" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Height",
				"param_name" => "height",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"None" => "none",
					"Left" => "left",
					"Right" => "right",
				)

			),	
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Position",
				"param_name" => "position",
				"value" => array(
					"Default" => "inherit",
					"Absolute" => "absolute",
					"Relative" => "relative",
					"Static" => "static",
					
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Top",
				"param_name" => "top",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Bottom",
				"param_name" => "Bottom",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Left",
				"param_name" => "left",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Right",
				"param_name" => "right",
				"value" => ""
			),						
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'nadea')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'nadea')
			),			
			
		)
) );

// Icon Block
vc_map( array(
		"name" => "Nadea Icon",
		"base" => "wr_vc_icon",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Icon Style",
				"param_name" => "icon_style",
				"value" => array(
					"Pixeden" => "",
					"Font Awesome" => "fa",
				)

			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Icon Name",
				"param_name" => "icon_name",
				"value" => "",
				"description" => "Please insert Pixeden/Font Awesome icon class name."
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Size",
				"param_name" => "icon_size",
				"value" => array(
					"Smaller" => "fa-1x",
					"Small" => "fa-2x",
					"Medium" => "fa-3x",
					"Large" => "fa-4x",
					"Larger" => "fa-5x",
					"Extra Large" => "fa-6x",
					
				),
				"description" => ""
			),			
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "Color",
				"param_name" => "icon_color",
				"value" => "#7e8082"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Float",
				"param_name" => "icon_float",
				"value" => array(
					"None" => "icon-float-none",
					"Left" => "icon-float-left",
					"Right" => "icon-float-right",
					
				),
				"description" => ""
			),			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Circle Border",
				"param_name" => "icon_border",
				"value" => array(
					"None" => "none",
					"Style 1" => "icon-style1",
					"Style 2" => "icon-style2",
				)

			),		
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Icon Bar",
				"param_name" => "icon_bar",
				"value" => array(
					"None" => "none",
					"Right" => "ndabplan",
				)

			),						
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "icon_margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'nadea')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "icon_padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'nadea')
			),			
			
		)
) );

// Button Block
vc_map( array(
		"name" => "Nadea Button",
		"base" => "wr_vc_section_button",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Name",
				"param_name" => "title",
				"value" => "",
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => ""
			),			
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "Background Color",
				"param_name" => "background",
				"value" => ""
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "Font Color",
				"param_name" => "color",
				"value" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Font Size",
				"param_name" => "font_size",
				"value" => "13px"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Font Weight",
				"param_name" => "font_weight",
				"value" => array(
					"Default" => "normal",
					"Lighter" => "lighter",
					"Thin 100" => "100",
					"Extra-Light 200" => "200",
					"Light 300" => "300",
					"Regular 400" => "400",
					"Medium 500" => "500",
					"Semi-Bold 600" => "600",
					"Bold 700" => "700",
					"Extra-Bold 800" => "800",
					"Ultra-Bold 900" => "900",
				)

			),				
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Text Transform",
				"param_name" => "text_transform",
				"value" => array(
				    "None" => "none",
					"Uppercase" => "uppercase",
					"Lowercase" => "lowercase",
					"Capitalize" => "capitalize",
					
					
				),
				"description" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Border",
				"param_name" => "border",
				"value" => "",
				"description" => __("Please insert border in format: 2px solid #7b7c80", 'nadea')
			),	
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Border Radius",
				"param_name" => "border_radius",
				"value" => "",
				"description" => __("Please insert border radius in format: 0px 0px 0px 0px", 'nadea')
			),			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"None" => "none",
					"Left" => "left",
					"Right" => "right",
					
				),
				"description" => ""
			),			
						
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'nadea')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "10px 25px",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'nadea')
			),			
			
		)
) );

// Divider Block
vc_map( array(
		"name" => "Nadea Divider",
		"base" => "wr_vc_bar",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Width",
				"param_name" => "width",
				"value" => "",
				"description" => __("Please insert width in format: 970px or 100%", 'nadea')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Height",
				"param_name" => "height",
				"value" => "",
				"description" => __("Please insert height in format: 300px", 'nadea')
			),						
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "Color",
				"param_name" => "color",
				"value" => ""
			),				
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"None" => "none",
					"Left" => "left",
					"Right" => "right",
					
				),
				"description" => ""
			),				
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Position",
				"param_name" => "position",
				"value" => array(
					"Default" => "inherit",
					"Absolute" => "absolute",
					"Relative" => "relative",
					"Static" => "static",
					
				),
				"description" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Border",
				"param_name" => "border",
				"value" => "",
				"description" => __("Please insert border in format: 1px solid #7b7c80", 'nadea')
			),	
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Border Radius",
				"param_name" => "border_radius",
				"value" => "",
				"description" => __("Please insert border radius in format: 0px 0px 0px 0px", 'nadea')
			),									
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'nadea')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'nadea')
			),		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => ""
			),				
			
		)
) );

// Blog Section Block
vc_map( array(
		"name" => "Nadea Blog Style Default",
		"base" => "wr_vc_blog",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => ""
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => __("(Optional) Insert category name in format: Web Development", 'nadea')
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Show Post Number",
				"param_name" => "showpost",
				"value" => "-1",
				"description" => __("Please insert number of post show in format: 10", 'nadea')
			),
            
		)
) );

vc_map( array(
		"name" => "Nadea Blog Style Alternative",
		"base" => "wr_vc_blog_slider",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => ""
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => __("(Optional) Insert category name in format: Graphic", 'nadea')
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Show Post Number",
				"param_name" => "showpost",
				"value" => "-1",
				"description" => __("Please insert number of post show in format: 10", 'nadea')
			),
            
		)
) );

// Portfolio Filter Block
vc_map( array(
		"name" => "Nadea Portfolio Filter",
		"base" => "wr_vc_portfolio_header",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Filter Style",
				"param_name" => "filter_style",
				"value" => array(
					"Style 1" => "",
					"Style 2" => "ndportfoliofilter4",
					"Style 3" => "ndfitlet-border",
					
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Name",
				"param_name" => "link_name",
				"value" => "",
				"description" => __("(Optional) Insert portfolio link name in format: View All", 'nadea')
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "#",
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Arrow Show",
				"param_name" => "link_icon_show",
				"value" => array(
					"Disable" => "arrow_right-off",
					"Enable" => "arrow_right",
					
				),
				"description" => ""
			),
            
		)
) );

// Portfolio Slider Block
vc_map( array(
		"name" => "Nadea Portfolio Slider",
		"base" => "wr_vc_portfolio_slider",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => ""
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => __("(Optional) Insert category name in format: Web Design", 'nadea')
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Show Post Number",
				"param_name" => "showpost",
				"value" => "-1",
				"description" => __("Please insert number of post show in format: 10", 'nadea')
			),
            
		)
) );

// Team Member Block
vc_map( array(
		"name" => "Nadea Team Member",
		"base" => "wr_vc_team",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => __("(Optional) Insert category name in format: Directer", 'nadea')
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Show Member Number",
				"param_name" => "showpost",
				"value" => "4",
				"description" => __("Please insert number of member show in format: 4", 'nadea')
			),
            
		)
) );

// Testimonials Block
class WPBakeryShortCode_WR_VC_Testimonials  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nadea Testimonials", "nadea",
        "base" => "wr_vc_testimonials",
        "as_parent" => array('only' => 'wr_vc_testimonial'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'by Nadea',
		"icon" => "icon-wpb-qode_clients",
        "show_settings_on_create" => true,
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Controls",
				"param_name" => "controls",
				"value" => array(
					"Disable" => "ndtestimonials",
					"Enable" => "testimonials3",
					
				),
				"description" => ""
			),			
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Testimonial extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Nadea Testimonial", "nadea",
        "base" => "wr_vc_testimonial",
        "content_element" => true,
		"icon" => "icon-wpb-qode_client",
        "as_child" => array('only' => 'wr_vc_testimonials'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Client Name",
				"param_name" => "title",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Company Name",
				"param_name" => "company",
				"value" => ""
			),			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => ""
			),            
            
        )
) );

// Partners Block
class WPBakeryShortCode_WR_VC_Partners  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nadea Partners", "nadea",
        "base" => "wr_vc_partners",
        "as_parent" => array('only' => 'wr_vc_partner'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'by Nadea',
		"icon" => "icon-wpb-qode_clients",
        "show_settings_on_create" => true,
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),						
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Partner extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Nadea Partner", "nadea",
        "base" => "wr_vc_partner",
        "content_element" => true,
		"icon" => "icon-wpb-qode_client",
        "as_child" => array('only' => 'wr_vc_partners'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Partner Name",
				"param_name" => "title",
				"value" => ""
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Upload Image",
				"param_name" => "img_url",
				"value" => "",
			),     
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),				
            
        )
) );

// Accordions Block
class WPBakeryShortCode_WR_VC_Accordions  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nadea Accordions", "nadea",
        "base" => "wr_vc_accordions",
        "as_parent" => array('only' => 'wr_vc_accordion'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'by Nadea',
		"icon" => "icon-wpb-qode_clients",
        "show_settings_on_create" => true,
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),						
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Accordion extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Nadea Accordion", "nadea",
        "base" => "wr_vc_accordion",
        "content_element" => true,
		"icon" => "icon-wpb-qode_client",
        "as_child" => array('only' => 'wr_vc_accordions'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Accordion Title",
				"param_name" => "title",
				"value" => ""
			),   
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Accordion Content",
				"param_name" => "content",
				"value" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Accordion Active",
				"param_name" => "active",
				"value" => array(
					"Disable" => "deactive",
					"Enable" => "active",
				),
				"description" => "",
			),				
            
        )
) );

// Tabs Block
class WPBakeryShortCode_WR_VC_Tabs  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nadea Tabs", "nadea",
        "base" => "wr_vc_tabs",
        "as_parent" => array('only' => 'wr_vc_tab'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'by Nadea',
		"icon" => "icon-wpb-qode_clients",
        "show_settings_on_create" => true,
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),		
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Tab extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Nadea Tab", "nadea",
        "base" => "wr_vc_tab",
        "content_element" => true,
		"icon" => "icon-wpb-qode_client",
        "as_child" => array('only' => 'wr_vc_tabs'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "1st Tab Menu",
				"param_name" => "tab_menu1",
				"value" => ""
			),   
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "1st Tab Content",
				"param_name" => "tab_content1",
				"value" => "",
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "2nd Tab Menu",
				"param_name" => "tab_menu2",
				"value" => ""
			),   
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "2nd Tab Content",
				"param_name" => "tab_content2",
				"value" => "",
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "3rd Tab Menu",
				"param_name" => "tab_menu3",
				"value" => ""
			),   
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "3rd Tab Content",
				"param_name" => "tab_content3",
				"value" => "",
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "4th Tab Menu",
				"param_name" => "tab_menu4",
				"value" => ""
			),   
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "4th Tab Content",
				"param_name" => "tab_content4",
				"value" => "",
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "5th Tab Menu",
				"param_name" => "tab_menu5",
				"value" => ""
			),   
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "5th Tab Content",
				"param_name" => "tab_content5",
				"value" => "",
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "6th Tab Menu",
				"param_name" => "tab_menu6",
				"value" => ""
			),   
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "6th Tab Content",
				"param_name" => "tab_content6",
				"value" => "",
			),				
            
        )
) );

// Progress Bar Block
vc_map( array(
		"name" => "Nadea Progress Bar",
		"base" => "wr_vc_progress_bar",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => ""
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Counter Number",
				"param_name" => "counter_num",
				"value" => "",
				"description" => __("Please insert counter number in format: 75", 'nadea')
			),
			
            
		)
) );

// Pricing Block
class WPBakeryShortCode_WR_VC_Pricing  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nadea Pricing", "nadea",
        "base" => "wr_vc_pricing",
        "as_parent" => array('only' => 'wr_vc_pricing_list'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'by Nadea',
		"icon" => "icon-wpb-qode_clients",
        "show_settings_on_create" => true,
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => ""
			),   
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Amount",
				"param_name" => "price",
				"value" => "",
			),		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Time Period",
				"param_name" => "period",
				"value" => "",
			),		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Link URL",
				"param_name" => "button_link",
				"value" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),				
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Recommended",
				"param_name" => "active",
				"value" => array(
					"Disable" => "deactive",
					"Enable" => "tbl-recommend",
				),
				"description" => "",
			),						
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Pricing_List extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Nadea Pricing Table List", "nadea",
        "base" => "wr_vc_pricing_list",
        "content_element" => true,
		"icon" => "icon-wpb-qode_client",
        "as_child" => array('only' => 'wr_vc_pricing'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Pricing Table List",
				"param_name" => "content",
				"value" => ""
			),						
            
        )
) );

// Social Icon Block
vc_map( array(
		"name" => "Nadea Social Icon",
		"base" => "wr_vc_social_icon",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => "Social Icon Color",
				"param_name" => "color",
				"value" => "#7e8082"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Recommended",
				"param_name" => "style",
				"value" => array(
					"Style 1" => "social_sharenadea",
					"Style 2" => "ndsocial-share",
				),
				"description" => "",
			),
			
            
		)
) );

// Newsletter Block
vc_map( array(
		"name" => "Nadea Newsletter",
		"base" => "wr_vc_newsletter",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Color Skin",
				"param_name" => "style",
				"value" => array(
					"Blue" => " ",
					"Dark" => "drak-singup",
					"Light" => "Sine-Up-white",
				),
				"description" => "",
			),			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Newsletter ShortCode",
				"param_name" => "content",
				"value" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'nadea')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'nadea')
			),	
			
            
		)
) );

// Contact Info Block
vc_map( array(
		"name" => "Nadea Contact Info",
		"base" => "wr_vc_contact_info",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Contact Address",
				"param_name" => "content",
				"value" => "",
			),				
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Contact Phone",
				"param_name" => "con_phone",
				"value" => "",				
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Contact Mail",
				"param_name" => "con_mail",
				"value" => "",
			),	
			
            
		)
) );

// Contact Form Block
vc_map( array(
		"name" => "Nadea Contact Form",
		"base" => "wr_vc_contact_form",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Contact Form ID",
				"param_name" => "contactfromid",
				"value" => "",
				"description" => __("Please insert contact form id number in format: 27", 'nadea')
			),				
  
		)
) );

// Google Map Block
vc_map( array(
		"name" => "Nadea Google Map",
		"base" => "wr_vc_map",
		"category" => 'by Nadea',
		"icon" => "icon-wpb-blockquote",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Map URL Link",
				"param_name" => "content",
				"value" => "",
				"description" => __("Please insert google map url link in format: http://maps.google.com", 'nadea')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Width",
				"param_name" => "width",
				"value" => "",
				"description" => __("Please insert width in format: 600px or 100%", 'nadea')
			),				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Height",
				"param_name" => "height",
				"value" => "",
				"description" => __("Please insert width in format: 400px", 'nadea')
			),			
  
		)
) );

?>