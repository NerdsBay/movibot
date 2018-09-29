<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
	require "system/autoloader.php";
	
	if(isset($_GET["type"])){
		if($_GET["type"] == "notfound"){
			$message = "The content doesn't exist on our site!";
			$title = "The content doesn't exist on our site!";
		} else if($_GET["type"] == "unavailable"){
			$message = "Sorry! Movie is unavailable for unknown reasons!";
			$title = "Sorry! Movie is unavailable for unknown reasons!";
		} else {
			die($sys->go(site_url));
		}
	} else {
		die($sys->go(site_url));
	}
	
	$data = array(
	"page" => "error",
	"title" => $title,
	"message" => $message
	);
	
	$print->header("error", $data);
	$print->body("error", $data);
	$print->footer("error", $data);
	