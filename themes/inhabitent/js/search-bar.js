// This function shows and hides a search field in the header of all pages

jQuery(document).ready(function($) {


  $('.toggle-search').on('click', function() {


    $input = $('.header-search input');
    $input.toggle('slow');
    $input.focus();

  });


});
