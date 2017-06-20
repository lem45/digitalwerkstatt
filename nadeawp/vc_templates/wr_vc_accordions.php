<?php

$args = array(
    	'class'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));

$html .= '<div id="accordianShortCode" class="'.$class.' aboutAccordian accordianShortCode">';
$html .= do_shortcode($content);
$html .= '</div>';

echo $html;