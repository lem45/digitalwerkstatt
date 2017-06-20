<?php

$args = array(
    	'class'=>'',		
		'tab_menu1'=>'',
		'tab_menu2'=>'',
		'tab_menu3'=>'',
		'tab_menu4'=>'',
		'tab_menu5'=>'',
		'tab_menu6'=>'',
		'tab_content1'=>'',
		'tab_content2'=>'',
		'tab_content3'=>'',
		'tab_content4'=>'',
		'tab_content5'=>'',
		'tab_content6'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));

$html .= '<div class="nd-default '.$class.'">';						
    $html .= '<ul class="nav nav-tabs">';
        if($tab_menu1 != "") {	
        $html .= '<li class="active"><a href="#tab1" data-toggle="tab">'.$tab_menu1.'</a></li>';
        }if($tab_menu2 != "") {			
        $html .= '<li><a href="#tab2" data-toggle="tab">'.$tab_menu2.'</a></li>';
        }if($tab_menu3 != "") {			
        $html .= '<li><a href="#tab3" data-toggle="tab">'.$tab_menu3.'</a></li>';	
        }if($tab_menu4 != "") {			
        $html .= '<li><a href="#tab4" data-toggle="tab">'.$tab_menu4.'</a></li>';
        }if($tab_menu5 != "") {			
        $html .= '<li><a href="#tab5" data-toggle="tab">'.$tab_menu5.'</a></li>';
        }if($tab_menu6 != "") {			
        $html .= '<li><a href="#tab6" data-toggle="tab">'.$tab_menu6.'</a></li>';		
        }			
    $html .= '</ul>';						
$html .= '</div>';						
							
$html .= '<div class="ndtabbody">';
    $html .= '<div class="tab-content">';
        if($tab_content1 != "") {	       
	    $html .= '<div class="tab-pane fade in active" id="tab1">';
	        $html .= '<div class="ndsertab-item clear">';
	        $html .= '<p>';
	        $html .= ''.$tab_content1.'';
	        $html .= '</p>';
	        $html .= '</div>';
	    $html .= '</div>';
        }if($tab_content2 != "") {		        
	    $html .= '<div class="tab-pane fade" id="tab2">';
	        $html .= '<div class="ndsertab-item clear">';
	        $html .= '<p>';
	        $html .= ''.$tab_content2.'';
	        $html .= '</p>';
	        $html .= '</div>';
	    $html .= '</div>';							
        }if($tab_content3 != "") {									
	    $html .= '<div class="tab-pane fade" id="tab3">';
	        $html .= '<div class="ndsertab-item clear">';
	        $html .= '<p>';
	        $html .= ''.$tab_content3.'';
	        $html .= '</p>';
	        $html .= '</div>';
	    $html .= '</div>';								
        }if($tab_content4 != "") {									
	    $html .= '<div class="tab-pane fade" id="tab4">';
	        $html .= '<div class="ndsertab-item clear">';
	        $html .= '<p>';
	        $html .= ''.$tab_content4.'';
	        $html .= '</p>';
	        $html .= '</div>';
	    $html .= '</div>';		
        }if($tab_content5 != "") {									
	    $html .= '<div class="tab-pane fade" id="tab5">';
	        $html .= '<div class="ndsertab-item clear">';
	        $html .= '<p>';
	        $html .= ''.$tab_content5.'';
	        $html .= '</p>';
	        $html .= '</div>';
	    $html .= '</div>';	
        }if($tab_content6 != "") {									
	    $html .= '<div class="tab-pane fade" id="tab6">';
	        $html .= '<div class="ndsertab-item clear">';
	        $html .= '<p>';
	        $html .= ''.$tab_content6.'';
	        $html .= '</p>';
	        $html .= '</div>';
	    $html .= '</div>';			
        }
    $html .= '</div>';			
$html .= '</div>';			

echo $html;