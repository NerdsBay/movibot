<?php 
$movie = $data["movie"];
$quality = $data["quality"];
$watch = $data["watch"];
$trailer = $data["trailer"];
$dlinks = $data["dlinks"];
$start = 0;
?>
<div class="single-page-agile-main">
    <div class="container">
        <div class="agileits-single-top">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active"><?php echo $movie[0]["Title"]; ?> (<?php echo $movie[0]["Year"]; ?>)</li>
            </ol>
        </div>
        <div class="ad banner-bottom text-center">
        <div class="container">
        <?php echo banner1; ?>
        </div>
        </div>        
        <div class="single-page-agile-info">
            <div class="show-top-grids-w3lagile">
                <div class="col-sm-8 single-left">
                    <div class="song">
                        <div class="song-info">
                            <h3><?php echo $movie[0]["Title"]; ?> (<?php echo $movie[0]["Year"]; ?>)</h3>
                        </div>
                        <div class="movie-poster pull-left" style="margin-right:1em;">
							<?php if($movie[0]["Poster"] == "N/A"){ ?>
								<img src="<?php echo site_url.'/'.template; ?>/assets/images/no-image.jpg" title="<?php echo $movie[0]["Title"]; ?>" alt="<?php echo $movie[0]["Title"]; ?>" class="img-responsive" />
							<?php } else { ?>
								<img src="<?php echo $movie[0]["Poster"]; ?>" title="<?php echo $movie[0]["Title"]; ?>" alt="<?php echo $movie[0]["Title"]; ?>" class="img-responsive" />
							<?php } ?>
							<a href="#" class="dbtn<?php if(empty($dlinks)) echo ' disabledlink'; ?>" data-toggle="modal" data-target="#download">
								<span class="dbtn-symbol"><i class="fa fa-download fa-2x"></i></span>
								<span class="dbtn-text"><?php if(empty($dlinks)){ echo "UNAVAILABLE"; } else { echo "DOWNLOAD"; } ?></span> 
								<span class="dbtn-slide-text">FAST DOWNLOADING</span>
							</a>
							<?php if(!empty($dlinks)){ ?>
                                <div id="download" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Download Movie</h3>
                                      </div>
                                      <div class="modal-body">
                                        <?php foreach($dlinks as $dlink){ $start++; ?>
                                        <a href="<?php echo $dlink; ?>" class="dbtn" target="_blank">
                                        <span class="dbtn-symbol"><i class="fa fa-download fa-2x"></i></span>
                                        <span class="dbtn-text">SERVER <?php echo $start; ?></span> 
                                        <span class="dbtn-slide-text"><?php if(!empty($quality)){ echo $quality; } else { echo "UNKNOWN"; } ?></span>
                                        </a>
                                        <?php } ?>
                                        <div class="clearfix"></div>
                                        <!-- <div class="mirrors"></div>
                                        <div class="text-center" style="margin-top: 10px">
                                            <button class="btn btn-lg btn-warning btn-mirror"><i class="fa fa-cloud-download"></i> Show Mirrors</button>
                                        </div> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>							
							<?php } ?>							
    						<?php if(!empty($watch)){ ?>
    						    <a href="#" class="dbtn" data-toggle="modal" data-target="#watch">
    								<span class="dbtn-symbol"><i class="fa fa-video-camera fa-2x"></i></span>
    								<span class="dbtn-text">WATCH</span> 
    								<span class="dbtn-slide-text">FAST STREAMING</span>
    							</a>
                                <div id="watch" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Watch Movie</h3>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?php echo $watch; ?>" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="640" height="360" style="width:100%;" allowfullscreen></iframe>
                                      </div>
                                    </div>
                                  </div>
                                </div>				
                            <?php } ?>	
						</div>
						<div class="movie-details">
							<?php
    							foreach($movie[0] as $type => $detail){
    								echo "<strong>".$type."</strong>: ".$detail."<br />";
    								if($type == "Awards") break;
    							}
							?>
							<div class="hidden-sm">
							<strong>Trailer</strong>:
							<?php
    							if(!empty($trailer)){
                                    echo $trailer;
                                }
                            ?>
                            </div>
						</div>
                    </div>
					<div class="clearfix"></div>
                    <div class="song-grid-right">
                        <div class="share">
                            <h5>Share This!</h5>
                            <div class="single-agile-shar-buttons">
                                <ul>
                                    <li>
										<div class="fb-like" data-href="<?php echo $sys->createLink($data["link"]); ?>" data-layout="button_count" data-action="recommend" data-size="small" data-show-faces="true" data-share="true"></div>
									</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="all-comments">
                        <div class="all-comments-info">
                            <div class="agile-info-wthree-box">
                                <div class="fb-comments" data-href="<?php echo $sys->createLink($data["link"]); ?>" data-width="100%" data-numposts="5"></div>
                            </div>
                        </div>
                        <div class="ad text-center">
                            <?php echo banner2; ?>
                        </div>                       
                    </div>
                </div>

                <div class="col-md-4 hidden-sm single-right">
                    <div class="ad single-grid-right">
                        <?php echo scraper; ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
				  <?php
				   $list = $sys->get_data("movies.php");
				   foreach($list as $movie){
					echo '<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="'.$sys->createLink($sys->parse_name($movie["link"])).'" class="hvr-shutter-out-horizontal latest-movies"><img src="'.$sys->open($movie["img"]).'" title="album-name" class="img-movie" alt="" />
								<div class="w3l-action-icon"><i class="fa fa-download" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="'.$sys->createLink($sys->parse_name($movie["link"])).'">'.$movie["title"].'</a></h6>							
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
					</div>';
				   }
				  ?>
				</div>
			</div>		
        </div>
    </div>
</div>