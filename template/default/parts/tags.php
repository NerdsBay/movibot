<?php 
$title = $data["title"];
$type = $data["type"];
$tags = $data["tags"];
?>
<div class="general-agileits-w3l">
    <div class="w3l-medile-movies-grids">
        <div class="movie-browse-agile">
            <div class="browse-agile-w3ls general-w3ls">
                <div class="tittle-head">
                    <div class="container">
                        <h4 class="latest-text"><?php echo $title; ?></h4>
                        <div class="agileits-single-top">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url; ?>">Home</a></li>
                                <li class="active"><?php echo $title; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="browse-inner">
						<?php
						foreach($tags as $tag){
							if($type == "years"){
								echo '<a href="'.site_url.'/year/'.$tag["link"].'" target="_blank">'.$tag["name"].'</a>, ';
							}
							if($type == "countries"){
								echo '<a href="'.site_url.'/country/'.$tag["link"].'" target="_blank">'.$tag["name"].'</a>, ';
							}
						}
						?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>