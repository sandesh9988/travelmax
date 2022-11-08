$(function () {

    

    $('.video-slide__slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true,
        nextArrow: 'none',
         prevArrow: 'none'
      });

      $('.image-slider__sliders').slick({
        centerMode: true,
        
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 300,
        nextArrow: '.image-slider__rightarrow ',
        prevArrow: '.image-slider__leftarrow ',
        responsive: [
          {
            breakpoint: 1100,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '25px',
              slidesToShow: 2
            }
          },
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '25px',
              slidesToShow: 1
            }
          }
        ]
      });

});

