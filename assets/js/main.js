

$(document).ready(function() {
	// Mobile Menu
	$('.menu-item').on('click', function(){
		$('.collapse').removeClass('show');
	});
	// Animations
	$('.custom-logo').addClass('animated tada');

	// Video
	$('.video-player').on('click', function(){
		$('.video').fadeIn();
		$('.opacity-layer').fadeIn();
		$('video').get(0).play();
	});

	$('.opacity-layer').on('click', function(){
		hideVideo();
	});

	$('.close-video').on('click', function(){
		hideVideo();
	});

	function hideVideo(){
		$('.video').fadeOut();
		$('.opacity-layer').hide();
		$('video').get(0).pause();
	}

	// Cards
	let windowWidth= $(window).width();
	if(windowWidth < 768){
		$('.icon-wrap').on('click', function() {
			$(this).find('.arrow-expanding').toggleClass('expanded');
			if($(this).find('.arrow-expanding').hasClass('expanded')) {
				$(this).next().slideUp();
			} else {
				$(this).next().slideDown();s
			}
		});
		// $('.expanded').on('click', function(){
		// 	$(this).parent().next().slideUp();
		// 	$(this).removeClass('expanded');
		// });
	}
	$(".icon-wrap").hover(
		function(){$(this).next().fadeIn('fast');},
		function(){$(this).next().hide();}
	);

	$(".card").hover(
		function(){$(this).show();},
		function(){$(this).hide();}
	);


	// Tooltip
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

});

