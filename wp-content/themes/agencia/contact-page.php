<?php
/*
Template Name: Contact Page Template
*/
?>
<?php get_header();?>
<?php get_template_part('navbar-inner');?>
<?php get_template_part('inner-banner');?>
	<div id="main" class="main">
		<div class="black-bg">
			<div class="container-fluid">
			  <div class="row">
			    <div class="col-lg-12">
			    	<h3>
			    		<span>TO HARDNESS <a href="">CREATIVITY</a> TO MAKE SOCIAL CHANGE.</span>
			    		<span class="separator"><img src="<?php echo get_template_directory_uri();?>/images/separator.png"></span>
			    		<span class="play"><a href=""><img src="<?php echo get_template_directory_uri();?>/images/play-small.png"></a></span>
			    	</h3>
			    </div>
			  </div>
			</div>
		</div> <!-- black-bg -->

		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-content">
							<?php while ( have_posts() ) : the_post(); ?>
	              <?php the_content();?>
	            <?php endwhile; // end of the loop. ?>
						</div>
						<div class="video">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7066.267134343104!2d85.38701809999999!3d27.682266400000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1421338923666" width="100%" height="450" frameborder="0" style="border:0"></iframe>
						</div>
						<style type="text/css">
							.video {
								position: relative;
								/*padding-bottom: 56.25%;*/ /* 16:9 */
								padding-bottom: 43%;
								/*padding-top: 25px;*/
								height: 0;
							}
							.video iframe {
								position: absolute;
								top: 0;
								left: 0;
								width: 100%;
								height: 100%;
							}
						</style>
					</div>
				</div>
			</div> <!-- container-fluid -->
		</div> <!-- wrapper -->
	</div> <!-- main -->
<?php get_footer();?>