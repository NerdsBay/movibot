<div class="banner-bottom">
	<div class="container">
		<div class="w3_agile_banner_bottom_grid">
			<div id="owl-demo" class="owl-carousel owl-theme">
			  <?php
			   foreach($data["latest"] as $movie){
			   	echo '<div class="item">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="'.$sys->createLink($sys->parse_name($movie["link"])).'" class="hvr-shutter-out-horizontal latest-movies"><img src="'.$sys->open($movie["img"]).'" title="'.$movie["title"].'" class="img-movie" alt="'.$movie["title"].'" />
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

<div class="ad banner-bottom text-center">
	<div class="container">
		<?php echo banner1; ?>
	</div>
</div>

<div class="general">
	<div class="container">
    	<h4 class="latest-text w3_latest_text"><i class="fa fa-star"></i> Box Office</h4>
		<div class="w3_agile_featured_movies">
			<?php
			 foreach($data["featured"] as $movie){
				echo '<div class="col-md-2 w3l-movie-gride-agile">
					<a href="'.$sys->createLink($sys->parse_name($movie["link"])).'" class="hvr-shutter-out-horizontal movie-cov"><img src="'.$sys->open($movie["img"]).'" title="'.$movie["title"].'" class="img-movie" alt="'.$movie["title"].'" />
						<div class="w3l-action-icon"><i class="fa fa-download" aria-hidden="true"></i></div>
					</a>
					<div class="mid-1 agileits_w3layouts_mid_1_home">
						<div class="w3l-movie-text">
							<h6><a href="'.$sys->createLink($sys->parse_name($movie["link"])).'">'.$movie["title"].'</a></h6>							
						</div>
						<div class="mid-2 agile_mid_2_home">
						<p><i class="fa fa-clock-o ico-gold"></i> '.$sys->extract_date($movie["title"]).'</p>
						<div class="block-stars">
								<i class="fa fa-download ico-gold"></i> '.number_format($sys->get_rating($sys->extract_title($movie["title"]), $sys->extract_date($movie["title"]))).'
						</div>
						<div class="clearfix"></div>
						</div>
					</div>
					<div class="ribben">
						<p>HOT</p>
					</div>
				</div>';
				} 
				?>
		</div>
	</div>
</div>

<div class="ad banner-bottom text-center">
	<div class="container">
		<?php echo banner2; ?>
	</div>
</div>

<div class="general">
	<div class="container">
    	<h4 class="latest-text w3_latest_text"><i class="fa fa-globe"></i> Asian Movies</h4>
		<div class="w3_agile_featured_movies">
			<?php
			 foreach($data["home1"] as $movie){
				echo '<div class="col-md-2 w3l-movie-gride-agile">
					<a href="'.$sys->createLink($sys->parse_name($movie["link"])).'" class="hvr-shutter-out-horizontal movie-cov"><img src="'.$sys->open($movie["img"]).'" title="'.$movie["title"].'" class="img-movie" alt="'.$movie["title"].'" />
						<div class="w3l-action-icon"><i class="fa fa-download" aria-hidden="true"></i></div>
					</a>
					<div class="mid-1 agileits_w3layouts_mid_1_home">
						<div class="w3l-movie-text">
							<h6><a href="'.$sys->createLink($sys->parse_name($movie["link"])).'">'.$movie["title"].'</a></h6>							
						</div>
						<div class="mid-2 agile_mid_2_home">
						<p><i class="fa fa-clock-o ico-gold"></i> '.$sys->extract_date($movie["title"]).'</p>
						<div class="block-stars">
								<i class="fa fa-download ico-gold"></i> '.number_format($sys->get_rating($sys->extract_title($movie["title"]), $sys->extract_date($movie["title"]))).'
						</div>
						<div class="clearfix"></div>
						</div>
					</div>
					<div class="ribben">
						<p>HOT</p>
					</div>
				</div>';
				} 
				?>
		</div>
	</div>
</div>