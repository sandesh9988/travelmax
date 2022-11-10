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


function openTab(evt, tabName) {
  var i, tab__banner, tab__links;
  tab__banner = document.getElementsByClassName("tab__banner");
  for (i = 0; i < tab__banner.length; i++) {
    tab__banner[i].style.display = "none";
  }
  tab__links = document.getElementsByClassName("tab__links");
  for (i = 0; i < tab__links.length; i++) {
    tab__links[i].className = tab__links[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
};