<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  * @version 2.0
  */
  
	/**
	  * System Constants
	  */
	  
		define("APP_ROOT", (dirname( __FILE__ )).'/');
		$get_s = array_diff(scandir(APP_ROOT."/settings"), array('.', '..'));
		foreach($get_s as $setting){
			$name = str_replace(".txt", "", $setting);
			$content = file_get_contents(APP_ROOT."settings/".$setting);
			define($name, $content);
		}
		
	/** 
	  * System Configuration
	  * @warning Do not edit the lines below!
	  */
 	  
		define("endpoint", "https://api.linkgate.xyz/mvbt/");
		define("apiKey", "");
		define("template", "template/default");
		define("cache_ext", ".cache"); 
		define("cache_time", 36000); 
		define("cache_folder", "cache/");