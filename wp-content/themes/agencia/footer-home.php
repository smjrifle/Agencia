			<div class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6 col-sm-3 col-md-2">
							<div class="address">
								<?php echo of_get_option('footer-address');?>
							</div>
						</div>
						<div class="col-xs-6 col-sm-2 col-md-1 no-padding">
							<div class="social">
								<h6>Follow us</h6>
								<ul>
									<li><a href="">Facebook</a></li>
									<li><a href="">Twitter</a></li>
									<li><a href="">Instagram</a></li>
									<li><a href="">Youtube</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xs-6 col-sm-2 col-md-1 no-padding">
							<div class="involve">
								<h6>Be Involved</h6>
								<ul>
									<li><a href="">Programs</a></li>
									<li><a href="">Gigs</a></li>
									<li><a href="">Projects</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xs-6 col-sm-2 col-md-1 no-padding">
							<div class="links">
								<h6>Links</h6>
								<ul>
									<li><a href="">Networks</a></li>
									<li><a href="">Aids</a></li>
									<li><a href="">Concerts</a></li>
								</ul>
							</div>
						</div>
						<div class="signup-form">
							<?php echo do_shortcode('[wysija_form id="1"]');?>
						</div>
						<!-- <div class="search-form">
							<?php //get_search_form(); ?>
						</div> -->
					</div> <!-- row -->
				</div>
			</div> <!-- footer -->
		</div> <!-- wrap -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo get_template_directory_uri();?>/js/jquery.js"></script>
		
		<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="<?php echo get_template_directory_uri();?>/js/ie10-viewport-bug-workaround.js"></script>

		<!--<script src="<?php echo get_template_directory_uri();?>/js/image-slider-min.js"></script>-->
		<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
		
		<script src="<?php echo get_template_directory_uri();?>/js/lib.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/core.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/views.js" type="text/javascript"></script>
	  <script>$(HUGE.Home.init)</script>

		

		<?php wp_footer();?>
  </body>
</html>