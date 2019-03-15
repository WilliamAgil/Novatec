"use strict";

// Carrusel de imagenes
$(document).ready(function () {
  $('.owl-cards').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: false,
    autoplayTimeout: 4000,
    //autoplayHoverPause:true,
    responsive: {
      0: {
        items: 4
      }
    }
  });
});