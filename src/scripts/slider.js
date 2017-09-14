'use strict';

var slider = function (name) {
  var carousel = $('.owl-carousel');

  if (carousel.length) {
    carousel.owlCarousel({
      items: 1,
      autoplay: true,
      loop: true,
      nav: true,
      navText : ['<span class="icon-chevron-left"></span>','<span class="icon-chevron-right"></span>']
    })
  }
};

module.exports = slider;
