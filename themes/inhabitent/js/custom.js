(function ($) {

  $(document).ready(function () {
    // toggle search form
    $('#fa-search').on('click', function () {
      $('.search-field').toggle('display: inline-block');
    });
  });

  // TODO: add search form toggle script
  // focus and blur methods

})(jQuery);

// IIFE
// immediately invoke function expression
// keeps scoping withing function and able to use $ for jQuery