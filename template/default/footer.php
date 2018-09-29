        <div class="text-center ad ad-pad">
            <?php echo foot_banner; ?>
        </div>
        <div class="footer">
        	<div class="container">
        		<div class="w3ls_footer_grid">
        			<div class="col-md-6 w3ls_footer_grid_left">
        			<p class="disclaimer"><strong>Important Disclaimer:</strong> <?php echo disclaimer; ?></p>
        			</div>
        			<div class="col-md-6 w3ls_footer_grid_right">
        				<a href="<?php echo site_url; ?>"><h2><?php echo site_name; ?><span><i class="fa fa-film"></i>Movies</span></h2></a>
        			</div>
        			<div class="clearfix"> </div>
        		</div>
        		<div class="col-md-4 w3ls_footer_grid1_left">
        			<p>&copy; <?php echo date("Y")." ".site_name; ?>. All Rights Reserved.</p>
        		</div>
        		<div class="col-md-8 w3ls_footer_grid1_right">
        			<ul>
        				<li>
        					<a href="<?php echo site_url; ?>"><i class="fa fa-cube"></i> Home</a>
        				</li>
        				<li>
        					<a href="<?php echo site_url; ?>/genre/action"><i class="fa fa-cube"></i> Action</a>
        				</li>
        				<li>
        					<a href="<?php echo site_url; ?>/genre/adventure"><i class="fa fa-cube"></i> Adventure</a>
        				</li>
        				<li>
        					<a href="<?php echo site_url; ?>/genre/comedy"><i class="fa fa-cube"></i> Comedy</a>
        				</li>
        				<li>
        					<a href="<?php echo site_url; ?>/genre/horror"><i class="fa fa-cube"></i> Horror</a>
        				</li>
        				<li>
        					<a href="<?php echo site_url; ?>/genre/drama"><i class="fa fa-cube"></i> Drama</a>
        				</li>
        				<li>
        					<a href="<?php echo site_url; ?>/genre/family"><i class="fa fa-cube"></i> Family</a>
        				</li>
        			</ul>
        		</div>
        		<div class="clearfix"> </div>
        	</div>
        </div>
        
        <script src="<?php echo site_url.'/'.template; ?>/assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo site_url.'/'.template; ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo site_url.'/'.template; ?>/assets/js/sweetalert.min.js"></script>
        <script src="<?php echo site_url.'/'.template; ?>/assets/js/owl.carousel.min.js"></script> 
        <script src="<?php echo site_url.'/'.template; ?>/assets/js/move-top.min.js"></script>
        <script src="<?php echo site_url.'/'.template; ?>/assets/js/easing.min.js"></script>
        <script src="<?php echo site_url.'/'.template; ?>/assets/js/custom.js"></script>
        <?php echo foot_scripts; ?>
    </body>
</html>