(function ($) {

  $(document).ready(function () {


    const $searchField = $('.site-header .search-field');

    // toggle search form
    $('.icon-search').on('click', function (event) {
      event.preventDefault();

      $searchField.toggle(1000);
      $searchField.focus();
    });

    $searchField.on('blur', function () {
      if ($(this).val() === "") {
        $searchField.toggle(1000);
      }
    });
  });

  // TODO: add search form toggle script
  // focus and blur methods

  // window.onscroll = function() {myFunction()};

  // function myFunction() {
  //     if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
  //         document.getElementById("myP").className = "test";
  //     } else {
  //         document.getElementById("myP").className = "";
  //     }
  // }

})(jQuery);

// IIFE
// immediately invoke function expression
// keeps scoping withing function and able to use $ for jQuery