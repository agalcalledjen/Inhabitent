(function ($) {

  $(document).ready(function () {

    // toggle search form
    $('.icon-search').on('click', function (event) {
      event.preventDefault();

      // $('.search-field').addClass('visible');
      $('.site-header .search-field').toggle(1000);
      $('.site header .search-field').focus();


      // $('.search-field').blur();
      // to make the input field clear
      // $('.search-field').focus(function () {
      //   this.value = "";
      // }); 
    });

    $('.icon-search').on('click', function (event) {
      event.preventDefault();


      $('.site-header .search-field').blur();
      // $('.site-header .search-field').toggle(1000);
    });


    // $('.search-field').on('blur', function (event) {
    //   $('search-field').removeClass('visible');
    // });

    // $('icon-search').click(function () {
    //   $('.search-field').removeClass('visible');
    // });

    // $(document).click(function (event) {
    //   //if you click on anything except the modal itself or the "open modal" link, close the modal
    //   if (!$(event.target).closest('.search-field,.icon-search').length) {
    //     $('body').find('.search-field').removeClass('visible');
    //   }
    // });
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