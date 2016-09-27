$( document ).ready(function() {

  'use strict';

  var floatbox = 'div.floatingbox';

  $(floatbox).css({"right" : "-500px", "opacity" : "0"});
  $(floatbox).animate({opacity : "1" },{duration: 1150, queue : false});
  $(floatbox).animate({right: "0px"},{duration: 1000, queue : false, easing: "swing"});

});