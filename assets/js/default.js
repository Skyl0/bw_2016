/**
 * Author: Marc Ernst
 * Company: SkyIT Webdesign
 * Date: 10/2016
 * Version 1.0.1
 */

$(document).ready(function () {

// Add lightbox links
  $('.galleria-info-text').append('<div class="gallery-link-bw"><a href="mylink">MyLink</a></div>');

  // Frontpage Panels

  var panels = '.widget-panel-0';
  var max = 0;

  // Get max height of all parent elements
  $(panels).each(function () {
    if ($(this).parent().height() > max) {
      max = $(this).parent().height();
    }
  });

  $(panels).each(function () {
    $(this).parent().height(max);

  });

  // Scroll Up Button

  $('a.scrollup-link').click(function (event) {
    event.preventDefault();
    $('body').animate({scrollTop: 0}, 'slow');
  });

  // Gallery Thumblinks


  $('img.preview-gal').each(function () {
    $(this).parent().append('<div class="preview-overlay">' + $(this).attr("alt") + '</div>');
  });

  // Floating Box Float IN
  var floatbox = 'div#float-box-1';


  $(floatbox).css({"margin-right": "-1000px", "opacity": "0"});

  $(floatbox).removeClass('float-hide');
  $(floatbox).delay(5000).animate({opacity: "1"}, {duration: 1750, queue: false});
  $(floatbox).delay(5000).animate({"margin-right": "15px"}, {duration: 1500, queue: false, easing: "swing"});

});