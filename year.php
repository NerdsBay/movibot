<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
	require "system/autoloader.php";
	
	$page = null;
	
	if(isset($_GET["year"]) && !empty($_GET["year"])){
		$year = urldecode($sys->clean($_GET["year"]));
		if(!$sys->isNumber($year)){
			die(go(site_url."/warning/notfound"));
		}
	} else {
		die(go(site_url."/warning/notfound"));
	}
	if(isset($_GET["page"])){
		$page = $sys->clean($_GET["page"]);
		if(!$sys->isNumber($page)){
			die(go(site_url."/warning/notfound"));
		}
		if(empty($page) OR $page == 0){
			$movies = $sys->get_data("year.php?year=".$year); 	
		} else {
			$movies = $sys->get_data("year.php?year=".$year."&page=".$page); 	
		}	
	} else {
		$movies = $sys->get_data("year.php?year=".$year); 	
	}
	
	$data = array(
	"page" => "year",
	"title" => $year." Movies",
	"year" => $year,
	"movies" => $movies,
	"pagination" => $page
	);
	
	$print->header("year", $data);
	$print->body("year", $data);
	$print->footer("year", $data);