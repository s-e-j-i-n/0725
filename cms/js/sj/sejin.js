$(document).ready(function(){
    $('.gnb_1da').click(function(e){
        e.preventDefault();
        var _this = $(this)
        $('body, html').animate({
            scrollTop : $($(this).attr('href')).offset().top
        }, 400, function(){
          $('.gnb_1da').removeClass('act');
          _this.addClass('act');
        })

    })

    const mainSwiper = new Swiper('#main .swiper', {
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
        loop: true,
      
        navigation: {
          nextEl: '#main .swiper-button-next',
          prevEl: '#main .swiper-button-prev',
        },
      
        
      });

      

})