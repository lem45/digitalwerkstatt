<?php

$args = array(
			'class'=>'',
			'title'=>'',
			'link_url'=>'',		
			'link_target'=>'',		
			'img_url'=>'',
);

extract(shortcode_atts($args, $atts));

$html = '';
$image_src = '';
$image_alt = '';

if (is_numeric($img_url)) {
    $image_src = wp_get_attachment_url($img_url);
    $image_alt = get_post_meta($img_url, '_wp_attachment_image_alt', true);
}

if($image_src != "") {
    $html .= '<div class="'.$class.' item owl-clientimg">';
		$html .= '<a class="singleClient" href="'.$link_url.'" title="'.$title.'" target="'.$link_target.'">';
		$html .= '<img src="'.$image_src.'" alt="'.$image_alt.'" />';
		$html .= '</a>';		
	$html .= '</div>';
}

echo $html;