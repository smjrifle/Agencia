<?php get_header();?>
<div class="banner" style="margin-top:-180px;">
	<img src="<?php echo get_template_directory_uri();?>/images/events2.png">
</div>

<div id="main" class="main">
	<div class="black-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="news-page-title">			    	
						<h3>
							<span><?php the_title();?></span>
				    		<!-- <span class="separator"><img src="<?php echo get_template_directory_uri();?>/images/separator.png"></span>
				    		<span class="play"><a href=""><img src="<?php echo get_template_directory_uri();?>/images/play-small.png"></a></span> -->
				    	</h3>
				    	<h6><span>Events</span> | 12.6.15</h6>
				    </div>
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
							<div class="col-md-10 eventcontent">
								<?php the_content();?>
							</div>
							<div class="col-md-2 eventtimestamp">
								<div class="row">
									<h3>When</h3>
									<p><?php echo types_render_field('date',false); ?>
									</div>
									<div class="row">
										<h3>Where</h3>
										<p><?php echo types_render_field('venue',false); ?>
										</div>
									</div>
									<div class="social-share">
										<div class="share">
											Share
										</div>
										<ul class="share-icons">
											<li>
												<a class="facebook" href="http://www.facebook.com/share.php?u=<?php echo site_url();?>/news-post/<?php echo $post->post_name;?>&title=<?php the_title();?>" target="_blank">
													Facebook
												</a>
											</li>
											<li>
												<a class="twitter" href="http://twitter.com/intent/tweet?status=<?php the_title();?>+<?php echo site_url();?>/news-post/<?php echo $post->post_name;?>" target="_blank">
													Twitter
												</a>
											</li>
											<li>
												<a class="instagram" href="http://twitter.com/intent/tweet?status=<?php the_title();?>+<?php echo site_url();?>/news-post/<?php echo $post->post_name;?>" target="_blank">
													Instagram
												</a>
											</li>
										</ul>
									</div>
								<?php endwhile;?>
								<div class="clearfix"></div>
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
					<div class="row map">
						<?php echo types_render_field('location',false); ?>
					</div>
				</div> <!-- container-fluid -->
			</div> <!-- wrapper -->
		</div> <!-- main -->
		<?php get_footer();?>