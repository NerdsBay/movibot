<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
	require "system/autoloader.php";
	
	$latest = $sys->get_data("movies.php");	
	$featured = $sys->get_data("featured.php");	
	$home1 = $sys->get_data("genre.php?genre=asian-movies");	
	
	$data = array(
	"page" => "home",
	"title" => tagline,
	"latest" => $latest,
	"featured" => $featured,
	"home1" => $home1
	);
	
	$print->header("home", $data);
	$print->body("home", $data);
	$print->footer("home", $data);
	