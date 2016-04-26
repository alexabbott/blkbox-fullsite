$(document).ready(function(){
	// toggle nav
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('nav').toggleClass('show');
	});


	// expand square
	var divMouseDown;
	$('.square').mousedown(function() {
		$(this).css({'width':'50vw','height':'50vh'});
		divMouseDown = setTimeout(function() {
			$('.square').css({'width':'100vw','height':'100vh'});
		}, 100);
	});
	$('.square').mouseup(function() {
		if (divMouseDown) {
			clearTimeout(divMouseDown);
		}
		if ($('.square').css('width') !== ($(document).width().toString() + 'px') ) {
			$('.square').css({'width':'100px','height':'100px'});
		} else {
			$('.square').css({'width':'100vw','height':'100vh'});
			window.location.pathname += 'work';
		}
	});

	// set body classes
	if (window.location.pathname.indexOf('work') > -1) {
		$('body').addClass('work');
	} else if (window.location.pathname.indexOf('about') > -1) {
		$('body').addClass('about');
	} else if (window.location.pathname.indexOf('contact') > -1) {
		$('body').addClass('contact');
	} else {
		$('body').addClass('home');
	}

});
