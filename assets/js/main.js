

$(document).ready(function() {
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

	$(".icon-wrap").hover(
		function(){$(this).next().fadeIn('fast');},
		function(){$(this).next().hide();}
	);

	$(".card").hover(
		function(){$(this).show();},
		function(){$(this).hide();}
	);

	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

});

