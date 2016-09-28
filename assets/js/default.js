$( document ).ready(function() {

  'use strict';

  var floatbox = 'div.floatingbox';

  $(floatbox).css({"right" : "-1000px", "opacity" : "0"});
  $(floatbox).animate({opacity : "1" },{duration: 1750, queue : false});
  $(floatbox).animate({right: "0px"},{duration: 1500, queue : false, easing: "swing"});

});