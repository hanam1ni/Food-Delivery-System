var controller = new ScrollMagic.Controller();

var headParallaxScene = new ScrollMagic.Scene({
        triggerElement: "#trigger",
        triggerHook: 0,
        duration: 600
    })
    .setTween(TweenMax.to(".top", 5, {backgroundPosition: '10% 0%'}))
    .addTo(controller);

$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});