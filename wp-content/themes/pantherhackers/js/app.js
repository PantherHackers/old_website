if (window.innerWidth <= 840) {
	$('.team-image').addClass("mobile-stack");	
}

if (window.innerWidth <= 679){
	$('.about-section .side').addClass("mobile-stack");
}

if (window.innerWidth <= 700){
	$('.event div').addClass("mobile-stack");
	$('.event').addClass("box");
	$('.event .event-time').removeClass("box");
	
	$('.blog-post').addClass("mobile-stack");
}

if (window.innerWidth <= 870) {
	$('.post-excerpt').addClass("mobile-stack");
}

$('.mobile-hamburger-area').click(function () {
	$('.mobile-top-nav-area').css('display', 'block');
});

$('.mobile-top-nav-area .close-button').click(function () {
	$('.mobile-top-nav-area').css('display', 'none');
});

$('.single-page, .non-home-container').css('min-height', (window.innerHeight - $('.top-page-header ').height() - $('footer').height()) + "px");
$('.home-content-container').css('min-height','0');
