<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
	require "system/autoloader.php";
	
	if(isset($_GET["type"])){
		$type = $sys->clean($_GET["type"]);
		if($type == "countries"){
			$tags = $sys->get_data("countries.php");
		} else if($type == "years"){
			$tags = $sys->get_data("years.php");
		} else {
			die(go(site_url."/warning/notfound"));
		}
	} else {
		die(go(site_url));
	}
	
	$data = array(
	"page" => "tags",
	"title" => ucfirst($type),
	"type" => $type,
	"tags" => $tags
	);
	
	$print->header("tags", $data);
	$print->body("tags", $data);
	$print->footer("tags", $data);