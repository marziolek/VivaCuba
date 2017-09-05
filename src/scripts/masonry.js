'use strict';

// var $ = require('jquery');
var jQueryBridget = require('jquery-bridget');
var Isotope = require('isotope-layout');
jQueryBridget( 'isotope', Isotope, $ );

var masonry = function (name) {
  var masonry = $('.isotope'),
    isotope;

  if (masonry.length) {
    isotope = masonry.isotope({})
  }

  var filters = $('.isotope-filter');
  filters.click( function() {
    var self = $(this);
    var filterValue = self.attr('data-filter');

    filters.removeClass('active');
    self.addClass('active');
    isotope.isotope({ filter: filterValue });
  });
};

module.exports = masonry;
