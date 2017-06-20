<?php

$args = array(
    	'class'=>'',
    	'title'=>'',
    	'price'=>'',
    	'period'=>'',
    	'button_text'=>'',
    	'button_link'=>'',
    	'link_target'=>'',
    	'active'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));

$html .= '<div class="singprictab '.$class.'">';
$html .= '<div class="ndtbl-pricing ndtbl-pricingthree animation" data-animation="animation-fade-in-up">';
$html .= '<div class="item '.$active.'">';
$html .= '<div class="tbl-header">'.$title.'</div>';
$html .= '<div class="tbl-price">'.$price.' <span class="prmonth">/ '.$period.'</span></div>';
$html .= '<ul class="tbl-lists">';
$html .= do_shortcode($content);
$html .= '</ul>';
$html .= '<div class="tbl-footer">';
$html .= '<a href="'.$button_link.'" class="btn btn-default" target="'.$link_target.'">'.$button_text.'</a>';
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';

echo $html;