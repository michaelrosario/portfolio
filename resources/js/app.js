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

$(".my-logo").fadeOut(); 

$(window).scroll(function() {

  if($(window).scrollTop() >= $("#about-me").offset().top){

    $(".my-logo").fadeIn(); 

  } else {

    $(".my-logo").fadeOut(); 

  }

});

$(window).resize(function() {
  $(".wrapper").height($(window).height());
});



randomizeIcons();

$(window).scroll(function(){
        var number = $("#tools").position().top-$(document).scrollTop();
        if(number <= 100){
            $("#tools").addClass("reset");
        } else if(number <= 1000) {

            randomizeIcons();
            $("#tools").removeClass("reset");
            
        }

});

function randomizeIcons(){
    var num = -1;
    $(".toolbelt a").each(function(){

        num = num * -1;
        var content = $(this).html();

        if($("#tools").hasClass("reset")){

          return false;

         } else {

            if($(this).find(".visible").length){

                $(this)
                    .find(".visible")  
                    .css({
                        "opacity":0,
                        "position":"absolute",
                        "top" : num*Math.random()*1000+"px",
                        "left" : num*Math.random()*1000+"px"
                    });

            } else {

                $(this)
                    .css("position","relative")
                    .find("ins").css("opacity",0)
                    .addClass("visible");
                    
                $(this).append(content)
                    .find(":not(.visible)")
                    .css("opacity",0);
                $(this)
                    .find(".visible")  
                    .css({
                        "opacity":0,
                        "position":"absolute",
                        "top" : num*Math.random()*1000+"px",
                        "left" : num*Math.random()*1000+"px"
                    });
            }
        }

    });
}
