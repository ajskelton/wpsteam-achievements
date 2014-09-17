jQuery(document).ready(function($){

	$('.achievement').hover(function() {
		$(this).find('.wpsteam-achievement-info').stop(true, true).fadeIn(200);
	}, function() {
		$(this).find('.wpsteam-achievement-info').stop(true, true).fadeOut(200);
	});

});