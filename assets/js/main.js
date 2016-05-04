$(document).ready(function(){
	// toggle nav
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('.menu').toggleClass('show');
		$('body').toggleClass('overflow');
		$('main-container').toggleClass('overflow');
		$('body').toggleClass('fixed');
		$('main-container').toggleClass('fixed');
	});

	if (window.innerWidth > 767 && screen.width > 767) {
		$('.video-overlay').mousedown(function() {
			var giffy = $('.get-animation').attr('data-src');
			$('.get-animation').css({'display':'block'});
			setTimeout(function(){
				$('.get-animation').css({'opacity':'1'});
			}, 200);
			$('.get-animation').attr('src', giffy + "?a=" + Math.random());
			$(this).mouseup(function() {
				window.location.pathname += 'about';
			});
		});
	}

	// expand square
	var divMouseDown;
	$('.square').on('mousedown touchstart', function() {
		$(this).css({'transform':'translate(-50%, -76%) scale(5)'});
		divMouseDown = setTimeout(function() {
			$('.square').css({'transform':'translate(-50%, -76%) scale(20)'});
		}, 100);
	});
	$('.square').on('mouseup touchend', function() {
		if (divMouseDown) {
			clearTimeout(divMouseDown);
		}
		if ($('.square').css('transform') !== "matrix(20, 0, 0, 20, -50, -76)") {
			$('.square').css({'transform':'translate(-50%, -76%) scale(1)'});
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
		$('.client-list').css('display','block');
		setTimeout(function() {
			$('.client-list').css('transform','translate3d(0,25px,0)');
		}, 100);
	});
	$('.clients-close').on('click', function() {
		$('.client-list').css('transform','translate3d(0,350px,0)');
		setTimeout(function() {
			$('.client-list').css('display','none');
		}, 1000);
	});

});
