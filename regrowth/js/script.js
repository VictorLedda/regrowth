gsap.registerPlugin(ScrollTrigger);

gsap.from('#titre_principal', {
    x: -400,
    duration: 1.5,
});

gsap.from('#slogan', {
    x: -400,
    duration: 1.5,
});

gsap.from('#lotus', {
    x: 400,
    duration: 1.5,
});

$(window).scroll(function(){
    var scrolledFromTop = $(window).scrollTop() + $(window).height();
    $(".appear").each(function(){
      var distanceFromTop = $(this).offset().top;
      if(scrolledFromTop >= distanceFromTop+100){
        var delaiAnim = $(this).data("delai");
        $(this).delay(delaiAnim).animate({
          top:0,
          opacity:1
        });
      }
    });
  });