'use strict';

var menu = function (name) {
  var headerMain = $('.header-main'),
    $win = $(window);

  if (headerMain.length) {
    $win.scroll( function() {
      if ($win.scrollTop() > 50) {
        headerMain.addClass('scrolled');
      } else {
        headerMain.removeClass('scrolled');
      }
    })
  }
};

module.exports = menu;
