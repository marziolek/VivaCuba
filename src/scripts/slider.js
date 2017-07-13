'use strict';

var slider = function (name) {
  var carousel = $('.owl-carousel');

  if (carousel.length) {
    carousel.owlCarousel({
      items: 1
    })
  }
};

module.exports = slider;
