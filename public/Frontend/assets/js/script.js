
// Video Slides
$('.video-slides').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    autoplayHoverPause: true,
    autoplay: true,
    margin: 30,
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 2,
        },
        768: {
            items: 3,
        },
        1200: {
            items: 3,
        }
    }
});

// Popup Video
$('.popup-youtube').magnificPopup({
    disableOn: 320,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
});

$('.image-popup').magnificPopup({
    type: 'image',
    mainClass: 'mfp-with-zoom',
    zoom: {
        enabled: true, 

        duration: 300, 
        easing: 'ease-in-out', 

        opener: function(openerElement) {
   
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
    }

});
  // Initi AOS
  function aos_init() {
    AOS.init({
        duration: 3000,
        once: true
    });
}
$(window).on('load', function () {
    AOS.init();
});



