/* global $, Typed */

$(document).foundation();

$(".wrapper").height($(window).height());

new Typed('.message', {
  strings: ["building cool websites.^1200", "solving web problems.^1200","learning new things.^1200","collaborating with teams.^1200"],
  typeSpeed: 40,
  backSpeed: 0,
  cursorChar: '|',
  loop: true
});


$(".scrollTo").on("click",function(e){
	e.preventDefault();
	var target = $(this).attr('data-target');
	var pos = $('#'+target).offset().top;
  
  $('html, body').animate({ scrollTop: pos }, 200);
  	return false;
});

$(".my-log,.passion").fadeOut(); 

$(window).scroll(function() {

  if($(window).scrollTop() >= $("#about-me").offset().top){

    $(".my-logo,.passion").fadeIn(); 

  } else {

    $(".my-log,.passion").fadeOut(); 

  }

});

$(window).resize(function() {
  $(".wrapper").height($(window).height());
});
