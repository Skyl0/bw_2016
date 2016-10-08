$( document ).ready(function() {

  'use strict';

  // Floating Box Float IN
  var floatbox = 'div#float-box-1';


  $(floatbox).css({"right" : "-1000px", "opacity" : "0"});

  $(floatbox).removeClass('float-hide');
  $(floatbox).delay(5000).animate({opacity : "1" },{duration: 1750, queue : false});
  $(floatbox).delay(5000).animate({right: "0px"},{duration: 1500, queue : false, easing: "swing"});

  // Scroll Up Button

  $('a.scrollup-link').click(function( event ) {
    event.preventDefault();
    $('body').animate({scrollTop : 0 },'slow');
  });

});