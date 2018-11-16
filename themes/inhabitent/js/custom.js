(function ($) {

  $(document).ready(function () {

    // toggle search form
    $('.icon-search').on('click', function (event) {
      event.preventDefault();

      $('.search-field').toggle(3000);
      $('.search-field').focus();
      // $('.search-field').blur();
      // to make the input field clear
      // $('.search-field').focus(function () {
      //   this.value = "";
      // }); 
    });
  });

  // TODO: add search form toggle script
  // focus and blur methods

})(jQuery);

// IIFE
// immediately invoke function expression
// keeps scoping withing function and able to use $ for jQuery