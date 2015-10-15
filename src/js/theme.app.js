// @codekit-prepend "site/_accordion.js"

$(document).ready(function(){

  //$(".carousel").carousel();
  $('.accordion-wrapper').accordion();
  $(".background").background();
  $(".gallery--zoom").lightbox();
  $(".notification").on('click', function(){
    $(this).fadeOut();
  });

  $('#home--intro .carousel').royalSlider({
    autoScaleSlider: true,
    arrowsNav: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'bullets',
    imageScaleMode: 'fill',
    autoScaleSliderWidth: 1280,
    autoScaleSliderHeight: 720,
    loopRewind: true,
    numImagesToPreload: 1,
    keyboardNavEnabled: true,
    usePreloader: false,
    slidesOrientation: 'vertical',
    transitionSpeed: 800,
    slidesSpacing: 0,
    autoPlay: {
        // autoplay options go gere
        enabled: true,
        delay: 4000,
        pauseOnHover: true
      }
  });

  $('.carousel').royalSlider({
    autoScaleSlider: true,
    arrowsNav: true,
    controlNavigationSpacing: 0,
    controlNavigation: 'bullets',
    imageScaleMode: 'fill',
    autoScaleSliderWidth: 1280,
    autoScaleSliderHeight: 720,
    loopRewind: true,
    numImagesToPreload: 1,
    keyboardNavEnabled: true,
    usePreloader: false,
    transitionSpeed: 800,
    transitionType: 'fade',
    slidesSpacing: 0
  });

  if ( $( ".carousel.main" ).length ) {

    var slider = $(".carousel.main").data('royalSlider');
  
    $(".gallery--menu_prev").on('click', function(e){
      e.preventDefault();
      slider.next();  
    });
  
    $(".gallery--menu_next").on('click', function(e){
      e.preventDefault();
      slider.prev();  
    });

  }

 //$(".equal-parent").equalize({
 //  target: ".equal-child"
 //});

});