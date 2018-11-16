(function ($) {

  $(document).ready(function () {


    // toggle search form
    $('.search-submit').on('click', function () {
      // event.preventDefault();
      $('.search-field').toggle().blur();
    });
  });

  // TODO: add search form toggle script
  // focus and blur methods

})(jQuery);

// IIFE
// immediately invoke function expression
// keeps scoping withing function and able to use $ for jQuery