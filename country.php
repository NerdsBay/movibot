<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
	require "system/autoloader.php";
	
	$page = null;
	
	if(isset($_GET["country"]) && !empty($_GET["country"])){
		$country = urldecode($sys->clean($_GET["country"]));		
	} else {
		die(go(site_url."/warning/notfound"));		
	}
	if(isset($_GET["page"])){
		$page = $sys->clean($_GET["page"]);
		if(!$sys->isNumber($page)){
			die(go(site_url."/warning/notfound"));			
		}
		if(empty($page) OR $page == 0){
			$movies = $sys->get_data("country.php?country=".$country); 		
		} else {
			$movies = $sys->get_data("country.php?country=".$country."&page=".$page); 				
		}			
	} else {
		$movies = $sys->get_data("country.php?country=".$country); 			
	}	
	
	$data = array(
	"page" => "country",
	"title" => "Movies from ".$country,
	"country" => $country,
	"movies" => $movies,
	"pagination" => $page
	);
	
	$print->header("country", $data);
	$print->body("country", $data);
	$print->footer("country", $data);