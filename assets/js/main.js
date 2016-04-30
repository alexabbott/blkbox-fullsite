$(document).ready(function(){
	// toggle nav
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('.menu').toggleClass('show');
	});

	// expand square
	var divMouseDown;
	$('.square').mousedown(function() {
		$(this).css({'transform':'translate(-50%, -76%) scale(5)'});
		divMouseDown = setTimeout(function() {
			$('.square').css({'transform':'translate(-50%, -76%) scale(20)'});
		}, 100);
	});
	$('.square').mouseup(function() {
		if (divMouseDown) {
			clearTimeout(divMouseDown);
		}
		if ($('.square').css('transform') !== "matrix(20, 0, 0, 20, -50, -76)") {
			$('.square').css({'transform':'translate(-50%, -76%) scale(1)'});
		} else {
			$('.square').css({'transform':'translate(-50%, -76%) scale(20)'});
			window.location.pathname += 'work';
		}

		if ($('.square').css('transform') == "matrix(20, 0, 0, 20, -50, -76)") {
			window.location.pathname += 'about';
		}
	});

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
