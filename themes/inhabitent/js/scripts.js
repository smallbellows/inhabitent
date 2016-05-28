//

jQuery(document).ready(function($) {

  // show the header search on click

  $('.toggle-search').on('click', function() {

    $input = $('input.header');
    $input.toggle('slow');

  });

});
