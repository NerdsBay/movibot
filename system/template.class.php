<?php
/**
  * Movibot - Automatic Movie Download Site Maker
  * @author Nogats07
  */
  
  class Template {
  	private $data;
  	private $page;
  	
  	public function header($page, $data){
  		global $sys, $print;
  		if(!empty($page) && !empty($data)){
  			require "template/default/header.php";
  		} else {
  			die();
  		}
  	}
  	
  	public function body($page, $data){
  		global $sys, $print;
  		if(empty($data)){
  			die();
  		}
  		if($page == "home"){
  			require "template/default/parts/home.php";
  		}
		if($page == "movie"){
  			require "template/default/parts/movie.php";
  		}
		if($page == "search"){
  			require "template/default/parts/search.php";
  		}
		if($page == "genre"){
  			require "template/default/parts/genre.php";
  		}
		if($page == "country"){
  			require "template/default/parts/country.php";
  		}
		if($page == "movies"){
  			require "template/default/parts/movies.php";
  		}
		if($page == "asia"){
  			require "template/default/parts/asia.php";
  		}
		if($page == "year"){
  			require "template/default/parts/year.php";
  		}
		if($page == "tags"){
  			require "template/default/parts/tags.php";
  		}
		if($page == "error"){
  			require "template/default/parts/error.php";
  		}  		
  	}
  	
  	public function footer($page, $data){
  		global $sys, $print;
  		if(!empty($page) && !empty($data)){
  			require "template/default/footer.php";
  		} else {
  			die();
  		}
  	}
  }