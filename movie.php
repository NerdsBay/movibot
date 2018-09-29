<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
	require "system/autoloader.php";
	
	$movie = $sys->get_data("movie.php?url=".$sys->parse_name($_GET["slug"], true));
	
	if(empty($movie[3])){
		$links = null;
	} else {
		$links = $movie[3];
	}
	
	if(empty($movie[2])){
		$watch = null;
	} else {
		$watch = $movie[2];
	}
	
	if(empty($movie[4])){
		$trailer = null;
	} else {
		$trailer = $movie[4];
	}
	
	if(empty($movie[0])){
		die($sys->go(site_url."/warning/unavailable"));		
	}
	
	$data = array(
	"page" => "movie",
	"movie" => $movie,
	"title" => "Download ".$movie[0]["Title"]." (".$movie[0]["Year"].")",
	"quality" => $movie[1],
	"link" => $_GET["slug"],
	"watch" => $watch,
	"trailer" => $trailer,
	"dlinks" => $links,
	"mtitle" => urlencode($movie[0]["Title"])
	);
	
	$print->header("movie", $data);
	$print->body("movie", $data);
	$print->footer("movie", $data);