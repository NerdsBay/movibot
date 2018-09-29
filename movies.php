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
			$movies = $sys->get_data("movies.php"); 	
		} else {
			$movies = $sys->get_data("movies.php?page=".$page); 	
		}	
	} else {
		$movies = $sys->get_data("movies.php"); 	
	}
	
	$data = array(
	"page" => "movies",
	"title" => "Latest Movies",
	"movies" => $movies,
	"pagination" => $page
	);
	
	$print->header("movies", $data);
	$print->body("movies", $data);
	$print->footer("movies", $data);