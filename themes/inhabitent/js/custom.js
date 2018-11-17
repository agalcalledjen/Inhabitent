(function ($) {

  $(document).ready(function () {

    // toggle search form
    $('.icon-search').on('click', function (event) {
      event.preventDefault();

      $('.search-field').toggle(2000);
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