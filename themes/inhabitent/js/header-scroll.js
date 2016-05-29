

// On pages that have a full-screen sized header image, this function causes a transparent fixed header once the user has scrolled past that header


jQuery(document).ready(function($) {

  $(window).on('scroll', function() {


      $body = $('body');

      if ($body.hasClass('home') || $body.hasClass('.page-template-about') || $body.hasClass('.single-adventure')) {

          if( $(window).scrollTop() >=  $(window).height() ) {
            $('.site-header').addClass('transparent-header');
          } else {
            $('.site-header').removeClass('transparent-header');
          }

      }
  });
});
