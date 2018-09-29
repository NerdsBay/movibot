<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
	require "system/autoloader.php";
	
	$page = null;
	
	if(isset($_GET["genre"]) && !empty($_GET["genre"])){
		$genre = $sys->clean($_GET["genre"]);		
	} else {
		die(go(site_url."/warning/notfound"));				
	}
	if(isset($_GET["page"])){
		$page = $sys->clean($_GET["page"]);
		if(!$sys->isNumber($page)){
			die(go(site_url."/warning/notfound"));			
		}
		if(empty($page) OR $page == 0){
			$movies = $sys->get_data("genre.php?genre=".$genre);			
		} else {
			$movies = $sys->get_data("genre.php?genre=".$genre."&page=".$page); 			
		}			
	} else {
		$movies = $sys->get_data("genre.php?genre=".$genre); 		
	}	

	$data = array(
	"page" => "genre",
	"title" => ucfirst($genre)." Movies",
	"genre" => $genre,
	"movies" => $movies,
	"pagination" => $page
	);
	
	$print->header("genre", $data);
	$print->body("genre", $data);
	$print->footer("genre", $data);