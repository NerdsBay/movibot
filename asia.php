<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
	require "system/autoloader.php";
	
	$page = null;	
	
	if(isset($_GET["page"])){
		$page = $sys->clean($_GET["page"]);
		if(!$sys->isNumber($page)){
			die(go(site_url."/warning/notfound"));		
		}
		if(empty($page) OR $page == 0){
			$movies = $sys->get_data("genre.php?genre=asian-movies"); 				
		} else {
			$movies = $sys->get_data("genre.php?genre=asian-movies&page=".$page); 				
		}			
	} else {
		$movies = $sys->get_data("genre.php?genre=asian-movies"); 			
	}
	
	$data = array(
	"page" => "asia",
	"title" => "Asian Movies",
	"movies" => $movies,
	"pagination" => $page
	);
	
	$print->header("asia", $data);
	$print->body("asia", $data);
	$print->footer("asia", $data);
	