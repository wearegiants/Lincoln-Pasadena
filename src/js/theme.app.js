// @codekit-prepend "site/_accordion.js"

$(document).ready(function(){

  //$(".carousel").carousel();
  $('.accordion-wrapper').accordion();
  $(".background").background();
  $(".gallery--zoom").lightbox();

  $('.equalize').imagesLoaded( function() {
    $(".equalize").equalize({
      target: ".equalize-child",
      minWidth: '740px'
    });
  });

  $(".notification--close").on('click', function(){
    $('.notification').fadeOut();
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
    //arrowsNavAutoHide: false,
    numImagesToPreload: 1,
    keyboardNavEnabled: true,
    usePreloader: false,
    transitionSpeed: 800,
    transitionType: 'fade',
    slidesSpacing: 0
  });

  if ( $('#home--intro .carousel').length ) {

    var slider = $('#home--intro .carousel').data('royalSlider');
  
    $(".gallery--menu_prev").on('click', function(e){
      e.preventDefault();
      slider.next();  
    });
  
    $(".gallery--menu_next").on('click', function(e){
      e.preventDefault();
      slider.prev();  
    });

  }

  $(".gallery-wrapped .gallery--menu_next").on('click', function(event){
    event.preventDefault;
    $(this).parent().parent().parent().find('.rsArrowRight').click();
  });

  $(".gallery-wrapped .gallery--menu_prev").on('click', function(event){
    event.preventDefault;
    $(this).parent().parent().parent().find('.rsArrowLeft').click();
  });

 //$(".equal-parent").equalize({
 //  target: ".equal-child"
 //});

});