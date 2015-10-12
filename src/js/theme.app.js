// @codekit-prepend "site/shopify--cart.js"
// @codekit-prepend "site/_accordion.js"

$(document).ready(function(){

$(".carousel").carousel();
$('.accordion-wrapper').accordion();
$(".background").background();
$(".gallery--zoom").lightbox();
$(".notification").on('click', function(){
  $(this).fadeOut();
});
$(".equal-parent").equalize({
  target: ".equal-child"
});

});