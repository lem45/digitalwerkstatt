<?php
class AfterSetupTheme{
	
	
	static function return_thme_option($string,$str=null){
		global $nadea_wp;
		if($str!=null)
		return isset($nadea_wp[''.$string.''][''.$str.'']) ? $nadea_wp[''.$string.''][''.$str.''] : null;
		else
		return isset($nadea_wp[''.$string.'']) ? $nadea_wp[''.$string.''] : null;
	}
	
	
}
?>