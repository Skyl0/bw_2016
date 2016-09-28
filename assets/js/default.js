$( document ).ready(function() {

  'use strict';

  // Floating Box Float IN
  var floatbox = 'div.floatingbox';

  $(floatbox).css({"right" : "-1000px", "opacity" : "0"});
  $(floatbox).animate({opacity : "1" },{duration: 1750, queue : false});
  $(floatbox).animate({right: "0px"},{duration: 1500, queue : false, easing: "swing"});

  // Scroll Up Button

  $('a.scrollup-link').click(function( event ) {
    event.preventDefault();
    $('body').animate({scrollTop : 0 },'slow');
  });

});