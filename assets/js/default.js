$( document ).ready(function() {

  // my js version 0.9.3

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

  // Gallery Thumblinks

 /* var pic1 = '.preview_1';
  var alt1 = $(pic1).attr("alt");

  var pic2 = '.preview_2';
  var alt2 = $(pic2).attr("alt");

  var pic3 = '.preview_3';
  var alt3 = $(pic3).attr("alt");

  var pic4 = '.preview_4';
  var alt4 = $(pic4).attr("alt");

  var pic5 = '.preview_5';
  var alt5 = $(pic5).attr("alt");

  var pic6 = '.preview_6';
  var alt6 = $(pic6).attr("alt");

  var pic7 = '.preview_7';
  var alt7 = $(pic7).attr("alt");

  var pic8 = '.preview_8';
  var alt8 = $(pic8).attr("alt");

  $(pic1).parent().append('<div class="preview-overlay">' + alt1 + '</div>');
  $(pic2).parent().append('<div class="preview-overlay">' + alt2 + '</div>');
  $(pic3).parent().append('<div class="preview-overlay">' + alt3 + '</div>');
  $(pic4).parent().append('<div class="preview-overlay">' + alt4 + '</div>');
  $(pic5).parent().append('<div class="preview-overlay">' + alt5 + '</div>');
  $(pic6).parent().append('<div class="preview-overlay">' + alt6 + '</div>');
  $(pic7).parent().append('<div class="preview-overlay">' + alt7 + '</div>');
  $(pic8).parent().append('<div class="preview-overlay">' + alt8 + '</div>'); */

 $('img.preview-gal').each(function () {
   $(this).parent().append('<div class="preview-overlay">' + $(this).attr("alt") + '</div>');
 });

});