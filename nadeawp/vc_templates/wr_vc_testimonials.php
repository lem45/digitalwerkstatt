<?php

$args = array(
    	'class'=>'',
		'id'=>'',			
		'title'=>'',
		'controls'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));

$html .= '<div id="'.$controls.'" class="'.$class.' testimonialz clear animation">';
if($title != "") {
$html .= '<div class="heading">';
$html .= '<h2>' . $title . '</h2>';
$html .= '</div>';
}

$html .= '<div id="owl-testimonials3">';
$html .= do_shortcode($content);
$html .= '</div>';

$html .= '</div>';

echo $html;