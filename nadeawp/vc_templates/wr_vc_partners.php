<?php

$args = array(
		'class'=>'',
);

extract(shortcode_atts($args, $atts));

$html = '';

    $html .= '<div class="'.$class.' clear  animation" data-animation="animation-fade-in-up" id="ndOurClient">';
		$html .= '<div id="owl-OurClient">';
		$html .= do_shortcode($content);
		$html .= '</div>';		
	$html .= '</div>';


echo $html;