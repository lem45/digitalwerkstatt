<?php

$args = array(
    	'class'=>'',		
		'title'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));

$html .= '<section id="servicestabs" class="ndsertab clear animation" data-animation="animation-fade-in-down '.$class.'">';
$html .= do_shortcode($content);
$html .= '</section>';
					
echo $html;					