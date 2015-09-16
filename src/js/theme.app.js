// @codekit-prepend "site/shopify--cart.js"

$(document).ready(function(){

   $(".background").background();
   $(".gallery--zoom").lightbox();
   $(".notification").on('click', function(){
      $(this).fadeOut();
   });

});