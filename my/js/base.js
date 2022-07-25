window.onload=function(){
    
}

$(document).ready(function(){
          AOS.init();  //AOS를 실행하라. 객체에 직접 값을 넣은 것이기 때문에 실행만 주면 됨//
        /*포트폴리오 스와이퍼*/

    const swiper = new Swiper('#portfolio .swiper', {
        // Optional parameters
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          loop: true,
      
        // If we need pagination
        pagination: {
          el: '#portfolio .swiper-pagination',
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '#portfolio .swiper-button-next',
          prevEl: '#portfolio .swiper-button-prev',
        },
      
        // And if we need scrollbar
        scrollbar: {
          el: '#portfolio .swiper-scrollbar',
        },
      });
      

    $('.allMenu').click(function(){
        $(this).toggleClass('open');
    })
    // toggleClass -> class를 줬다가 뺏었다가~ //

    $('#gnb a').click(function(e){
        e.preventDefault();

        var clicka = $(this);   /*click 한 a가 => $ this다. 라고 저장했기 때문에 사라지지 않음 */

        $('body,html').animate({
            scrollTop : $(clicka.attr('href')).offset().top
        },400,function(){
            $('#gnb a').removeClass('act')
            clicka.addClass('act');
        })
    })
})