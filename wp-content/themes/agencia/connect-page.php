<?php
/**
 * Template Name: Connect Page Template
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
					<div class="item slide-front connect-overlay">
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
			  	

			  </div> <!-- slider -->
			  <!-- <div class="imageSliderButtons">
					<div class="button selected" style="cursor: pointer;"></div>
					<div class="button" style="cursor: pointer;"></div>
					<div class="button" style="cursor: pointer;"></div>
					<div class="button" style="cursor: pointer;"></div>
				</div> --> <!-- imageSliderButtons -->
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
			    		<span>GET CONNECTED</span>
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
				<div class="row">
					<div class="col-xs-12">
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7066.266694377501!2d85.3869825!3d27.682273200000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1421773397382" width="100%" height="450" frameborder="0" style="border:0"></iframe>
						</div>
						<div class="page-content">
							<div class="row">
								<div class="contact-form col-md-8">
									<p>Fill the form and submit to send us an email.</p>
									<?php echo do_shortcode('[contact-form-7 id="47" title="Contact form 1"]');?>
								</div>
								<div class="contact-info col-md-4">
									<b>Agencia</b><br>
									+44 (0) 2030394883<br>
									ruth@agencia.co.org<br>
									16 Belvedere road<br>
									Manchester<br>
									WUA 123
								</div>
							</div> <!-- row -->
						</div> <!-- page-content -->
					</div>
				</div>
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