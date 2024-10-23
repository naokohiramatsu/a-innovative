var hamburger = $('.hamburger__menu');


$('.hamburger__btn').on('click', function() {

  hamburger.toggleClass('hamburger__menu-active');

});

$(window).on('resize', function() {

    hamburger.removeClass('hamburger__menu-active');
  });
  
  
  $(function(){
      $(window).scroll(function (){
          $('.js-fade').each(function(){
              var pos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
              if (scroll > pos - windowHeight + 100){
                  $(this).addClass('scroll');
              }
          });
      });
  });
  