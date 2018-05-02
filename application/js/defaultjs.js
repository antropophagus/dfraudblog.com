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

  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#button-up').fadeIn();
    } else {
        $('#button-up').fadeOut();
    }
});

/** При нажатии на кнопку мы перемещаемся к началу страницы */
$('#button-up').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 1000);
    return false;
});
});
