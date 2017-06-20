<?php

$args = array(
		'class'=>'',
		'title'=>'',
		'company'=>'',
);

extract(shortcode_atts($args, $atts));

$html = '';

    $html .= '<div class="'.$class.' item">';
		$html .= '<div class="ndfact item-let">';
		$html .= '<i class="quotesIconblack ndquoteIcon"></i>';
		$html .= '</div>';		
		$html .= '<div class="item-right">';
			$html .= '<h3 class="test-text">'.$content.'</h3>';
			$html .= '<p>- '.$title.', <span class="company-name">'.$company.'</span></p>';
		$html .= '</div>';
	$html .= '</div>';


echo $html;