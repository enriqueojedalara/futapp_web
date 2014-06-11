$(document).ready(function() {
	$('.tooltips').tooltip({
		selector: "[data-toggle=tooltip]",
		container: "body"
	})
	$('ul.scroll-nav a').smoothScroll({
		easing: 'swing',
		speed: 500
	});
	$('#back-top a').smoothScroll({
		easing: 'swing',
		speed: 500
	});
	$("#back-top").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});
	});
});
