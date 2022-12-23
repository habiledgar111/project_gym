$('.multiple-items').ready(function(){
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 2500,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 4
  });
});