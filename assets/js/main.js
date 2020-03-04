// Menu changing color on scroll (Desktop)
window.onscroll = function() {
	menuColors();
  };

function menuColors() {
	// const primaryMenus = document.getElementsByClassName("menu-color-primary");
	// for (let i = 0; i < primaryMenus.length; i++) {
	// 	const bounding = primaryMenus[i].getBoundingClientRect();
	// 	if (bounding.top < 50 && bounding.bottom > 0) {
	// 		$('nav').addClass("menu-primary");
	// 		console.log();
	// 	} else {
	// 		$('nav').removeClass("menu-primary");
	// 	}
	// };
	const intro = document.getElementById("intro");
	const introBounding = intro.getBoundingClientRect();
	if (introBounding.top < 50 && introBounding.bottom > 0) {
		$('nav').addClass("menu-primary");
		console.log();
	} else {
		$('nav').removeClass("menu-primary");
	}
	
	// const history = document.getElementById("history");
	// const historyBounding = history.getBoundingClientRect();
	// if (historyBounding.top < 50 && historyBounding.bottom > 0) {
	// 	$('nav').addClass("menu-primary");
	// 	console.log();
	// } else {
	// 	$('nav').removeClass("menu-primary");
	// }

	const concert = document.getElementById("concert");
	const concertBounding = concert.getBoundingClientRect();
	if (concertBounding.top < 50 && concertBounding.bottom > 0) {
		$('nav').addClass("menu-secondary");
		console.log();
	} else {
		$('nav').removeClass("menu-secondary");
	}
}
  

$(document).ready(function() {
	let windowWidth= $(window).width();

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
	if(windowWidth < 768){
		$('.icon-wrap').on('click', function() {
			if($(this).find('.arrow-expanding').hasClass('expanded')) {
				$(this).next().slideUp();
			} else {
				$(this).next().slideDown();
			}
			$(this).find('.arrow-expanding').toggleClass('expanded');
		});
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
	});

});

