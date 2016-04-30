$(document).ready(function(){
	// toggle nav
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('.menu').toggleClass('show');
	});


	// expand square
	var divMouseDown;
	$('.square').mousedown(function() {
		// $(this).css({'width':'50vw','height':'50vh'});
		$(this).css({'transform':'translate(-50%, -76%) scale(5)'});
		divMouseDown = setTimeout(function() {
			$('.square').css({'transform':'translate(-50%, -76%) scale(20)'});
			// $('.square').css({'width':'100vw','height':'100vh'});
		}, 100);
	});
	$('.square').mouseup(function() {
		if (divMouseDown) {
			clearTimeout(divMouseDown);
		}
		// if ($('.square').css('width') !== ($(document).width().toString() + 'px') ) {
		if ($('.square').css('transform') !== "matrix(20, 0, 0, 20, -50, -76)") {
			// $('.square').css({'width':'100px','height':'100px'});
			$('.square').css({'transform':'translate(-50%, -76%) scale(1)'});
		} else {
			// $('.square').css({'width':'100vw','height':'100vh'});
			$('.square').css({'transform':'translate(-50%, -76%) scale(20)'});
			window.location.pathname += 'work';
		}

		if ($('.square').css('transform') == "matrix(20, 0, 0, 20, -50, -76)") {
			window.location.pathname += 'about';
		}
	});

	// set body classes
	if (window.location.pathname.split('/')[window.location.pathname.split('/').length-1] === 'work') {
		$('body').addClass('work');
	} else if (window.location.pathname.indexOf('about') > -1) {
		$('body').addClass('about');
	} else if (window.location.pathname.indexOf('contact') > -1) {
		$('body').addClass('contact');
	} else if (window.location.pathname.indexOf('capabilities') > -1) {
		$('body').addClass('capabilities');
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
		$('.client-list').css('transform','translate3d(0,25px,0)');
	});
	$('.clients-close').on('click', function() {
		$('.client-list').css('transform','translate3d(0,350px,0)');
	});

});
