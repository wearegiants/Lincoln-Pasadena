// @codekit-prepend "site/_accordion.js"

$(document).ready(function(){

$(".carousel").carousel();
$('.accordion-wrapper').accordion();
$(".background").background();
$(".gallery--zoom").lightbox();
$(".notification").on('click', function(){
  $(this).fadeOut();
});

$(".equal-parent").imagesLoaded( function() {
  $(".equal-parent").equalize({
    target: ".equal-child"
  });
});

});