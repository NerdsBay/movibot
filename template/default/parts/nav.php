<div class="movies_nav">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav>
					<ul class="nav navbar-nav">
						<li<?php if($data["page"] == "home") echo ' class="active"'; ?>><a href="<?php echo site_url; ?>"><i class="fa fa-home"></i> Home</a></li>
						<li class="dropdown<?php if($data['page'] == 'genre') echo ' active'; ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cubes"></i> Genres <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<li>
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
									<?php
										$get = $sys->get_data("genres.php");
										$lg = 0;
										foreach($get as $genre){
											echo '<li><a href="'.site_url."/genre/".$genre["link"].'">'.$genre["name"].'</a></li>';
											$lg++;
											if($lg == 9) break;
										}
									?>
									</ul>
								</div>
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
									<?php
										$gi = 0;
										$lg = 0;
										foreach($get as $genre){
											$gi++;
											if($gi > 9){
												echo '<li><a href="'.site_url."/genre/".$genre["link"].'">'.$genre["name"].'</a></li>';
											}
											$lg++;
											if($lg == 18) break;
										}
									?>
									</ul>
								</div>
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
									<?php
										$gi = 0;
										$lg = 0;
										foreach($get as $genre){
											$gi++;
											if($gi > 18){
												echo '<li><a href="'.site_url."/genre/".$genre["link"].'">'.$genre["name"].'</a></li>';
											}
											$lg++;
											if($lg == 27) break;
										}
									?>
									</ul>
								</div>
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
									<?php
										$gi = 0;
										$lg = 0;
										foreach($get as $genre){
											$gi++;
											if($gi > 27){
												echo '<li><a href="'.site_url."/genre/".$genre["link"].'">'.$genre["name"].'</a></li>';
											}
											$lg++;
											if($lg == 35) break;
										}
									?>
									</ul>
								</div>
								<div class="clearfix"></div>
								</li>
							</ul>
						</li>
						<li class="dropdown<?php if($data['page'] == 'country') echo ' active'; ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-flag"></i> Country <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
										<?php
											$get_c = $sys->get_data("countries.php");
											shuffle($get_c);
											$lc = 0;
											foreach($get_c as $country){
												echo '<li><a href="'.site_url."/country/".$country["link"].'">'.$country["name"].'</a></li>';
												$lc++;
												if($lc == 4) break;
											}
										?>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
										<?php
											$ci = 0;
											$lc = 0;
											foreach($get_c as $country){
												$ci++;
												if($ci > 4){
													echo '<li><a href="'.site_url."/country/".$country["link"].'">'.$country["name"].'</a></li>';
												}
												$lc++;
												if($lc == 8) break;
											}
										?>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
										<?php
											$ci = 0;
											$lc = 0;
											foreach($get_c as $country){
												$ci++;
												if($ci > 8){
													echo '<li><a href="'.site_url."/country/".$country["link"].'">'.$country["name"].'</a></li>';
												}
												$lc++;
												if($lc == 11) break;
											}
										?>
										<li><a href="<?php echo site_url; ?>/tags/countries">View All</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</li>
							</ul>
						</li>
						<li<?php if($data["page"] == "asia") echo ' class="active"'; ?>><a href="<?php echo site_url; ?>/asia"><i class="fa fa-globe"></i> Asian Movies</a></li>
						<li><a href="<?php echo site_url; ?>/tags/years"><i class="fa fa-clock-o"></i> Years</a></li>
						<li<?php if($data["page"] == "movies") echo ' class="active"'; ?>><a href="<?php echo site_url; ?>/movies"><i class="fa fa-list"></i> All Movies</a></li>
					</ul>
				</nav>
			</div>
		</nav>	
	</div>
</div>