$(document).foundation();

var typed = new Typed('.message', {
  strings: ["building cool websites.^1200", "solving web problems.^1200","learning new things.^1200","collaborating with teams.^1200"],
  typeSpeed: 40,
  backSpeed: 0,
  cursorChar: '|',
  loop: true,
});


$(window).on("scroll",function() {
  
  if($("#intro").offset().top == 0){
    $(".learnMain").show();
  } else {
    $(".learnMain").hide();
  }

});

$(".scrollTo").on("click",function(e){
	e.preventDefault();
	var target = $(this).attr('data-target');
	var pos = $('#'+target).offset().top;
  	$('html, body').animate({ scrollTop: pos }, 200);

  	return false;
});


