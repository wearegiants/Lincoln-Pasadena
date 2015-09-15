// @codekit-prepend "site/shopify--cart.js"

$(document).ready(function(){

   $(".gallery--zoom").lightbox();
   $(".notification").on('click', function(){
      $(this).fadeOut();
   });

});