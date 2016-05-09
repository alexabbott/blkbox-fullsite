$(document).ready(function(){
	// toggle nav
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('.menu').toggleClass('show');
		$('body').toggleClass('overflow');
		$('main-container').toggleClass('overflow');
		$('body').toggleClass('fixed');
		$('main-container').toggleClass('fixed');
		if (window.innerWidth < 767 && screen.width < 767) {
			$('#aboutLanding h1').toggleClass('none');
		}
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
				$('.get-animation').css({'opacity':'0'});
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

	$('body').on('click', '.fa-volume-up', function(){
		document.getElementsByTagName('video')[0].muted = true;
		$(this).attr('class','fa fa-volume-off');
	});
	$('body').on('click', '.fa-volume-off', function(){
		document.getElementsByTagName('video')[0].muted = false;
		$(this).attr('class','fa fa-volume-up');
	});

});
