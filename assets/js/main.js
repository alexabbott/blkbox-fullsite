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

	// show project images on mouseover
	$('.teaser li h3 a').on('mouseover', function () {
		$('.project-image-holder').css('display','none');
		$(this).parent().parent().find('.project-image-holder').css('display','block');
		$('.teaser li h3 a').css('border-bottom','none');
		$(this).css('border-bottom','5px solid #ff0000');
	});

	// show hide client list
	$('.client-title').on('click', function() {
		$('.client-list').css('transform','translate3d(0,0,0)');
	});
	$('.clients-close').on('click', function() {
		$('.client-list').css('transform','translate3d(0,321px,0)');
	});

});
