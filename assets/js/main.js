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
		if (document.getElementsByTagName('video')[0]) {
			document.getElementsByTagName('video')[0].pause();
			document.querySelector('.scroll-down').style.display = 'none';
			document.querySelector('.music-tag').style.display = 'none';
			document.querySelector('.fa').style.display = 'none';
			setTimeout(function(){
				document.getElementsByTagName('video')[0].play();
				document.querySelector('.loader-holder').style.display = 'none';
				document.querySelector('.scroll-down').style.display = 'block';
				document.querySelector('.music-tag').style.display = 'block';
				document.querySelector('.fa').style.display = 'block';
			}, 3000);
		}

		$('.video-overlay').mousedown(function() {
			document.getElementsByTagName('video')[0].pause();
			var giffy = $('.get-animation').attr('data-src');
			$('.get-animation').css({'display':'block'});
			setTimeout(function(){
				$('.get-animation').css({'opacity':'1'});
			}, 200);
			$('.get-animation').attr('src', giffy + "?a=" + Math.random());
			$(this).mouseup(function() {
				$('.get-animation').css({'opacity':'0'});
				document.getElementsByTagName('video')[0].play();
			});
		});
	}

	$('body').on('click', '.fa-volume-up', function(){
		document.getElementsByTagName('video')[0].muted = true;
		$(this).attr('class','fa fa-volume-off');
	});
	$('body').on('click', '.fa-volume-off', function(){
		document.getElementsByTagName('video')[0].muted = false;
		$(this).attr('class','fa fa-volume-up');
	});

	if (window.innerWidth < 767 || screen.width < 767) {
		var teasers = document.querySelectorAll('.teaser-link');
		var links = [];
		for (var n = 0; n < teasers.length; n++) {
			links.push(teasers[n].getAttribute('href'));
		}
		$('.teaser li').unwrap();
		$('.teaser li').each(function(index){
			$(this).on('touchstart', function(){
				$('.work-teaser-text').removeClass('opacity');
				$('.main-image').removeClass('half-opacity');
				$(this).find('.work-teaser-text').addClass('opacity');
				$(this).find('.main-image').addClass('half-opacity');
				$('.teaser a li').unwrap();
				$(this).wrap('<a href="' + links[index] + '"></a>');
			});
		});
	}

	if (window.innerWidth < 767 || screen.width < 767) {
		$('.top-gif').on('touchstart', function() {
			$('.top-gif').css('opacity','0');
			var giffy = $('.bottom-gif').attr('data-src');
			$('.bottom-gif').attr('src', giffy + "?a=" + Math.random());
			$('.scroll-down').css({'opacity':'0','display':'none'});
		});
		$('.top-gif').on('touchend', function() {
			$(this).css('opacity','1');
			$('.scroll-down').css({'opacity':'1','display':'none'});
		});

		if (document.querySelectorAll('.mobile-gif')[0]) {
			document.querySelectorAll('.mobile-gif')[0].style.display = 'none';
			document.querySelectorAll('.mobile-gif')[1].style.display = 'none';
			document.querySelector('.scroll-down').style.display = 'none';
			setTimeout(function(){
				document.querySelector('.loader-holder').style.display = 'none';
				document.querySelector('.scroll-down').style.display = 'block';
				document.querySelectorAll('.mobile-gif')[0].style.display = 'block';
				document.querySelectorAll('.mobile-gif')[1].style.display = 'block';
			}, 3000);
		}
	}

});
