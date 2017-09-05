/*
  Project: Viva Cuba Dance Studio
  Author: Marcin Ziółek
 */

window.jQuery = window.$ = require('jquery');
window.Tether = require('tether');

require('owl.carousel');
require('bootstrap');

var slider = require('./slider.js');
var masonry = require('./masonry.js');
var menu = require('./menu.js');

$(document).ready( function() {
  slider();
  masonry();
  menu();
})

