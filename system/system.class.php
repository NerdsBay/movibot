<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
  class System {
  	private $data;
  	private $param;
  	
  	public function get_data($param){
  		$cache = cache_folder.sha1($param).cache_ext;
  		if(file_exists($cache) && time() - cache_time < filemtime($cache)){
  			$data = file_get_contents($cache);
  		} else {
  			if(!empty(apiKey)){
  			    $key = "&key=".apiKey;
  			} else {
  			    $key = null;
  			}
  			$ch = curl_init();
  			curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
  			curl_setopt($ch, CURLOPT_ENCODING, '');
  			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  			curl_setopt($ch, CURLOPT_URL, endpoint.$param.$key);
  			$data = curl_exec($ch);
  			curl_close($ch);
  			file_put_contents($cache, $data);
  		}
		return json_decode($data, true);
  	} 	
	public function go($data){
		return header("location: ".$data);
	}
	public function open($data){
		return base64_decode($data);
	}
	public function createLink($data){
	    return site_url."/movie/".$data.".html";
	}
	public function extract_title($data){
		$exp = explode(" (", $data);
		return $exp[0];
	}
	public function parse_name($data, $type = false){
		if($type == false){
			$str = urlencode(str_replace("Movibot", site_name, base64_decode($data)));
		} else {
			$str = str_replace(site_name, "Movibot", urldecode($data));
		}
		return $str;
	}
	public function extract_date($data){
		$exp = explode("(", $data);
		if(array_key_exists(1, $exp)){
			$exp = explode(")", $exp[1]);
			return $exp[0];
		} else {
			return "N/A";
		}
		
	}
	public function get_rating($title, $date){
		$downloads = substr(base_convert(md5($title.$date), 16, 10) , -5);
		return $downloads;
	}	
	public function strip($data) {
        $data = str_replace(array('&amp;', '&lt;', '&gt;'), array('&amp;amp;', '&amp;lt;', '&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');
        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);
        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);
        do {
            $old_data = $data;
            $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        } while ($old_data !== $data);
        return $data;
    }
	public function clean($data){
		return filter_var($this->strip($data), FILTER_SANITIZE_STRING);
	}
	public function isNumber($data) {
        if (filter_var($data, FILTER_VALIDATE_INT) === 0 || !filter_var($data, FILTER_VALIDATE_INT) === false) {
            return true;
        } else {
            return false;
        }
    }
	public function clean_title($data){
		return str_replace("-", " ", $data);
	}
  }