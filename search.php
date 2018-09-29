<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
	require "system/autoloader.php";
	
	$page = null;
	
	if(isset($_GET["s"]) && !empty($_GET["s"])){
		$search = $_GET["s"];
	} else {
		die(go(site_url."/warning/notfound"));
	}
	if(isset($_GET["page"])){
		$page = $sys->clean($_GET["page"]);
		if(!$sys->isNumber($page)){
			die(go(site_url."/warning/notfound"));
		}
		if(empty($page) OR $page == 0){
			$movies = $sys->get_data("search.php?search=".urlencode($search)); 	
		} else {
			$movies = $sys->get_data("search.php?search=".urlencode($search)."&page=".$page); 	
		}	
	} else {
		$movies = $sys->get_data("search.php?search=".urlencode($search)); 	
	}

	$data = array(
	"page" => "search",
	"title" => 'Searching for "'.$search.'"',
	"search" => $search,
	"movies" => $movies,
	"pagination" => $page
	);
	
	$print->header("search", $data);
	$print->body("search", $data);
	$print->footer("search", $data);