$(document).ready(function() {
	$('.wysija-input').focus(function() {
		$('.widget_wysija').stop(true, true).addClass('focused');
	});
	$('.wysija-input').focusout(function() {
		//var delay = setTimeout(function() {
			$('.widget_wysija').stop(true, true).removeClass('focused');
		//}, 500);
	});

	$('#s').focus(function() {
		$('.search-form').stop(true, true).addClass('focused');
	});
	$('#s').focusout(function() {
		$('.search-form').stop(true, true).removeClass('focused');
	});

	$('#toggle').click(function() {
			$('.nav-container').addClass('active');
		//}
	});

	//for home page buttom country
	$('.country a').on('click', function() {
		$('li.country').removeClass('active');
		$(this).parent().addClass('active');
		var id = $(this).parent().attr('id');
		$('.large-image').attr('id', 'image-'+id);
	});

	//for social share icons
	$('.share').click(function() {
		$('.share-icons').slideDown();
	})
	$('.toggle-search').click(function() {
		$('.search-form').toggle('slide');
	});
});

$('.carousel1').carousel();