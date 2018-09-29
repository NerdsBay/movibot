<?php 
$year = $data["year"];
$movies = $data["movies"];
$page = $data["pagination"];
?>
<div class="general-agileits-w3l">
    <div class="w3l-medile-movies-grids">
        <div class="movie-browse-agile">
            <div class="browse-agile-w3ls general-w3ls">
                <div class="tittle-head">
                    <div class="container">
                        <h4 class="latest-text"><?php echo $year; ?> Movies</h4>
                        <div class="agileits-single-top">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url; ?>">Home</a></li>
                                <li class="active"><?php echo $year; ?> Movies</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="browse-inner">
					<?php 
						if(!empty($movies)){
							foreach($movies as $movie){	
								echo '<div class="col-md-2 w3l-movie-gride-agile">
									<a href="'.$sys->createLink($sys->parse_name($movie["link"])).'" class="hvr-shutter-out-horizontal list-movies">
										<img src="'.$sys->open($movie["img"]).'" title="'.$movie["title"].'" class="img-movie" alt="'.$movie["title"].'" />
										<div class="w3l-action-icon"><i class="fa fa-download" aria-hidden="true"></i></div>
									</a>
									<div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="'.$sys->createLink($sys->parse_name($movie["link"])).'">'.$movie["title"].'</a></h6>				
										</div>
										<div class="mid-2">
											<p><i class="fa fa-clock-o ico-gold"></i> '.$sys->extract_date($movie["title"]).'</p>
											<div class="block-stars">
													<i class="fa fa-download ico-gold"></i> '.number_format($sys->get_rating($sys->extract_title($movie["title"]), $sys->extract_date($movie["title"]))).'
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>';
								
							}
						} else {
							echo "<h1>No more movies found for this year!</h1>";
						}
					?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="blog-pagenat-wthree">
                <ul>
					<?php
						if(!empty($movies)){
							if(!empty($page)){
								if($page == 2 && $page !== 1){
									echo '<li><a class="last" href="'.site_url.'/year/'.$year.'">Prev</a></li>';
								} else {
									$ppage = $page - 1;
									echo '<li><a class="last" href="'.site_url.'/year/'.$year.'/'.$ppage.'">Prev</a></li>';
								}
							}
							if(empty($page)){
								$npage = 2;
								echo '<li><a class="last" href="'.site_url.'/year/'.$year.'/'.$npage.'">Next</a></li>';
							} else {
								if($page <= 1){
									$npage = 2;
								} else {
									$npage = $page + 1;
								}
								echo '<li><a class="last" href="'.site_url.'/year/'.$year.'/'.$npage.'">Next</a></li>';
							}
						}
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>