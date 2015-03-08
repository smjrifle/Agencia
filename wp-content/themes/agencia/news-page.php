<?php
/**
 * Template Name: News Page Template
 *
 **/
?>
<?php get_header('news');?>
<?php //get_template_part('navbar-inner');?>
<?php //get_template_part('inner-banner');?>
<div class="slider-wrap">
	<div class="bk-video">
	  <video class="vid" id="video0" loop muted="muted" autoplay poster="<?php echo get_template_directory_uri();?>/video/cover.jpg">
      <source src="<?php echo get_template_directory_uri();?>/video/vid.webm" 
              type='video/webm;codecs="vp8, vorbis"'/>
      <source src="<?php echo get_template_directory_uri();?>/video/vid.mp4"
              type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'/>
    </video>
  </div> <!-- bk-video -->

	<div class="sliding-banner">

		<div class = 'sliderContainer'>
			<div class = 'imageSlider'>
				<div class = 'slider'>
					<div class="item slide-front news-overlay">
	      		<div class="container">
	      			<div class="row">
	      				<div class="col-xs-10 col-xs-offset-1">
	      					<div class="slide-text">
	      						<div class="slide-text-content">
					      			
	      						</div>
	      					</div>
	      				</div>
		      		</div>
	      		</div> <!-- container -->
			  	</div> <!-- item -->
	      	<div class="item slide1">
	      		<div class="container">
	      			<div class="row">
	      				<div class="col-xs-10 col-xs-offset-1">
	      					<div class="slide-text">
	      						<div class="slide-text-content">
					      			<div class="date">
					      				<span>News</span> | 12.06.15
					      			</div>
						      		<h3>
						      			MANCHESTER TO<br>LONDON IN DAYS FOR<br>CREATIVE INPUT
						      		</h3>
						      		<h5>The time where the creative groups meet</h5>
	      						</div>
	      					</div>
	      				</div>
		      		</div>
	      		</div> <!-- container -->
			  	</div> <!-- item -->
			  	<div class="item slide2">
	      		<div class="container">
		      		<div class="row">
			      		<div class="col-xs-10 col-xs-offset-1">
	      					<div class="slide-text">
				      			<div class="slide-text-content">
					      			<div class="date">
					      				<span>News</span> | 12.06.15
					      			</div>
						      		<h3>
						      			TO HARNESS<br>CREATIVITY TO MAKE<br>SOCIAL CHANGE
						      		</h3>
						      		<h5>The time where the creative groups meet</h5>
	      						</div>
	      					</div>
	      				</div>
		      		</div> <!-- row -->
	      		</div> <!-- container -->
			  	</div> <!-- item -->

			  </div> <!-- slider -->
			  <div class="imageSliderButtons">
					<div class="button selected" style="cursor: pointer;"></div>
					<div class="button" style="cursor: pointer;"></div>
					<div class="button" style="cursor: pointer;"></div>
				</div> <!-- imageSliderButtons -->
      </div> <!-- imageSlider -->		  
    </div> <!-- sliderContainer -->

	</div>

</div> <!-- slider-wrap -->

	<div id="main" class="main">
		
		<div class="black-bg yellow-bg">
			<div class="container-fluid">
			  <div class="row">
			    <div class="col-lg-12">
			    	<h3>
			    		<span>LATEST NEWS</span>
			    		<div class="down-arrow">
			    			<img src="<?php echo get_template_directory_uri();?>/images/down-arrow.png">
			    		</div>
			    	</h3>
			    </div>
			  </div>
			</div>
		</div> <!-- black-bg -->

		<div class="wrapper">
			<div class="container-fluid">

				<div class="row news-row-1">
					<div class="col-sm-6 col-md-4 no-padding promo-container">
						<div class="row">
							<a href="<?php echo site_url();?>/news-post/lorem-verear-delicata-ad-sea-an-simul-mollis">
							<div class="promo news-promo news-promo-text promo-title-container">
								<div class="promo-title">
									<div class="date"><span>News</span> / 12.06.15</div>
									<h2>To London In Days For The Concert</h2>
									<p>Cras vitae dui nunc. Sed ullamcorper nisl vitae facilisis hendrerit. Fusce id elit quis augue</p>
								</div>			
							</div>								
							</a>
						</div>
						<div class="row">
							<a href="<?php echo site_url();?>/news-post/lorem-verear-delicata-ad-sea-an-simul-mollis">
							<div class="promo news-promo news-promo-text news-promo-black promo-title-container">
								<div class="promo-title">
									<div class="date"><span>News</span> / 12.06.15</div>
									<h2>In The Creative Hub</h2>
									<p>Cras vitae dui nunc. Sed ullamcorper nisl vitae facilisis hendrerit. Fusce id elit quis augue</p>
								</div>			
							</div>								
							</a>
						</div>

					</div>
					<div class="col-sm6 col-md-4 no-padding promo-container">
						<div class="promo news-promo news-promo-img" id="news-1">

							<div class="zoom-bg bg-cover">								
							</div>
							<div class="promo-overlay">
								<a href="<?php echo site_url();?>/news-post/lorem-verear-delicata-ad-sea-an-simul-mollis">
									<div class="promo-title-container">
										<div class="promo-title">											
											<div class="date"><span>News</span> / 12.06.15</div>
											<h2>So It Begins With A Creativity</h2>
											<p>Cras vitae dui nunc. Sed ullamcorper. Fusce id elit quis augue placerat vulputate.</p>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>
					<div class="col-sm6 col-md-4 no-padding promo-container">
						<div class="promo news-promo news-promo-img" id="news-2">

							<div class="zoom-bg bg-cover">								
							</div>
							<div class="promo-overlay">
								<a href="<?php echo site_url();?>/news-post/lorem-verear-delicata-ad-sea-an-simul-mollis">
									<div class="promo-title-container">
										<div class="promo-title">											
											<div class="date"><span>News</span> / 12.06.15</div>
											<h2>So It Begins With A Creativity</h2>
											<p>Sed ullamcorper nisl vitae. Fusce id elit quis augue placerat vulputate.</p>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>
				</div> <!-- row -->
				
				<div class="row news-row-2">
					<div class="col-sm6 col-md-4 no-padding promo-container">
						<div class="promo news-promo news-promo-img" id="news-3">

							<div class="zoom-bg bg-cover">								
							</div>
							<div class="promo-overlay">
								<a href="<?php echo site_url();?>/news-post/lorem-verear-delicata-ad-sea-an-simul-mollis">
									<div class="promo-title-container">
										<div class="promo-title">											
											<div class="date"><span>News</span> / 12.06.15</div>
											<h2>So It Begins With A Creativity</h2>
											<p>Cras vitae dui nunc. Sed ullamcorper nisl vitae facilisis hendrerit.</p>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>
					<div class="col-sm-6 col-md-8 no-padding promo-container">
						<div class="promo news-promo news-promo-img news-promo-large" id="news-4">

							<div class="zoom-bg bg-cover">								
							</div>
							<div class="promo-overlay">
								<a href="<?php echo site_url();?>/news-post/lorem-verear-delicata-ad-sea-an-simul-mollis">
									<div class="promo-title-container promo-title-container-large">
										<div class="promo-title">											
											<div class="date"><span>News</span> / 12.06.15</div>
											<h2>Manchester to London in days</h2>
											<p>Cras vitae dui nunc. Sed ullamcorper nisl vitae facilisis hendrerit. Fusce id elit quis augue placerat vulputate.</p>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>
				</div> <!-- row -->

				<div class="row news-row-3">
					<div class="col-sm-6 col-md-8 no-padding promo-container">

						<div class="row">
							<div class="col-lg-12 no-padding promo-container">
								<div class="promo news-promo news-promo-img news-promo-long" id="news-5">

									<div class="zoom-bg bg-cover">								
									</div>
									<div class="promo-overlay">
										<a href="<?php echo site_url();?>/news-post/lorem-verear-delicata-ad-sea-an-simul-mollis">
											<div class="promo-title-container">
												<div class="promo-title">											
													<div class="date"><span>News</span> / 12.06.15</div>
													<h2>So It Begins With A Creativity</h2>
													<p>Cras vitae dui nunc. Sed nisl vitae usce id elit quis augue placerat vulputate.</p>
												</div>
											</div>
										</a>
									</div> <!-- promo-overlay -->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 no-padding promo-container">
								<a href="<?php echo site_url();?>/news-post/lorem-verear-delicata-ad-sea-an-simul-mollis">
								<div class="promo news-promo news-promo-text promo-title-container">
									<div class="promo-title">
										<div class="date"><span>News</span> / 12.06.15</div>
										<h2>So It Begins With A Creativity</h2>
										<p>Cras vitae dui nunc. Sed ullamcorper nisl Fusce id elit quis augue</p>
									</div>			
								</div>								
								</a>
							</div>
							<div class="col-lg-6 no-padding promo-container">
								
								<div class="promo news-promo news-promo-img" id="news-6">
									<div class="zoom-bg bg-cover">								
									</div>
									<div class="promo-overlay">
										<a href="<?php echo site_url();?>/news-post/lorem-verear-delicata-ad-sea-an-simul-mollis">
											<div class="promo-title-container">
												<div class="promo-title">											
													<div class="date"><span>News</span> / 12.06.15</div>
													<h2>In The Creative Hub</h2>
													<p>Cras vitae dui nunc. Sed ullamcorper nisl Fusce id elit quis augue placerat vulputate.</p>
												</div>
											</div>
										</a>
									</div> <!-- promo-overlay -->
								</div>

							</div>
						</div>

					</div>
					<div class="col-sm-6 col-md-4 no-padding promo-container">
						<a href="<?php echo site_url();?>/news-post/lorem-verear-delicata-ad-sea-an-simul-mollis">
						<div class="promo news-promo news-promo-large promo-title-container">
							<div class="promo-title">
								<div class="date"><span>News</span> / 12.06.15</div>
								<h2>In The Creative Hub</h2>
								<p>Cras vitae dui nunc. Sed ullamcorper nisl vitae hendrerit. Fusce id elit quis augue</p>
							</div>			
						</div>								
						</a>
					</div>
				</div> <!-- row -->

			</div> <!-- container-fluid -->
		</div> <!-- wrapper -->
	</div> <!-- main -->
<?php get_footer('news');?>
<script src="<?php echo get_template_directory_uri();?>/js/image-slider-min.js"></script>
<script type="text/javascript">
		$(document).ready(function() {			
			$('.imageSlider').iosSlider({
				snapToChildren: true,
				desktopClickDrag: true,
				infiniteSlider: true,
				autoSlide: true,
				autoSlideTransTimer: 1000,
				autoSlideHoverPause: false,
				keyboardControls: true,
				navSlideSelector: $('.imageSliderButtons .button'),
				onSlideChange: slideContentChange,
				onSliderUpdate: updateHeight
			});
			updateHeight();


			$('.slider-wrap, .slide-text').css({
				height: $(window).height()
			});
		});  //document ready

		function updateHeight() {
		  var setHeight = $('.imageSlider .slide:eq(0)').outerHeight(true);
		  $('.imageSlider').css({
		      height: setHeight
		  });
		  $('.slider-wrap, .slide-text').css({
			height: $(window).height()
		});


		 //  var navHeight = $('.navbar-inner').height();
			// $('.sliding-banner, .slide-text').css({
			// 	'height': $(window).height() - navHeight
			// })
			// $('.main').css({
			// 	'margin-top': $(window).height() - navHeight
			// });

		}
		function slideContentChange(args) {	
			$('.imageSliderButtons .button').removeClass('selected');
			$('.imageSliderButtons .button:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');	
		}
		//for nav scroll bar
		$(window).load(function() {
			updateHeight();

			var navHeight = $('.navbar-inner').height();
			$('.imageSlider, .slide-text').css({
				height: $(window).height()
			});
		});
		</script>