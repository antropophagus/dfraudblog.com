$(document).ready(function(){
  if ($(window).scrollTop() > 88) {$('#nav').addClass('fixed'); $('#wrapper').addClass('margin_without_nav');}
  $(window).scroll(function() {
  if ($(window).scrollTop() > 88) {$('#nav').addClass('fixed'); $('#wrapper').addClass('margin_without_nav');}
        else {$('#nav').removeClass('fixed'); $('#wrapper').removeClass('margin_without_nav');}
  });

  $("#main_menu li:first").hover(function(){
    $(".sub_menu").fadeIn().css({"display":"inline"});
  }, function(){
    $(".sub_menu").fadeOut().css({"display":"none"});
  });

  $(".content_item:last").css({"border":"none"});
});
