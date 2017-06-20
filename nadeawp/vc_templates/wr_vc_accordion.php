<?php

$args = array(
		'class'=>'',
		'title'=>'',
		'active'=>'',
);

extract(shortcode_atts($args, $atts));

$html = '';

    $html .= '<div class="accordionRow toggleRow triggerRow '.$class.'">';
		$html .= '<a class="accordion-toggle3 WhoAreWetrigger '.$active.'" href="#">'.$title.'</a>';
		$html .= '<div class="accordion-content triggerMenu">';
		$html .= '<p>'.$content.'</p>';		
		$html .= '</div>';	
	$html .= '</div>';


echo $html;