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

    // alt header
    const $altLogo = $('.page-template-about .header-logo, .home .header-logo, .single-adventure .header-logo');
    const $logo = $('.blog .header-logo, .single .header-logo, .page-template-find-us .header-logo, .archive .header-logo, .search-results .header-logo, .error404 .header-logo');
    const $siteHeader = $('.page-template-about .site-header, .home .site-header, .single-adventure .site-header');
    const $mainNavA = $('.page-template-about .main-navigation a, .home .main-navigation a, .single-adventure .main-navigation a');
    const $mainNavAhov = $('.page-template-about .main-navigation a:hover, .home .main-navigation a:hover, .single-adventure .main-navigation a:hover');
    const $mainNavIcon = $('.page-template-about .main-navigation .icon-search, .home .main-navigation .icon-search, .single-adventure .main-navigation .icon-search');
    const $mainNavIconHov = $('.page-template-about .main-navigation a:hover, .home .main-navigation a:hover, .single-adventure .main-navigation a:hover');
    const $altSearch = $('.page-template-about .site-header .search-form .search-field, .home .site-header .search-form .search-field, .single-adventure .site-header .search-form .search-field');

    // scroll navigation
    $(window).scroll(function () {
      if ($(document).scrollTop() > 600) {
        $logo.removeClass('alt-header-logo');
        $altLogo.removeClass('alt-header-logo');
        $siteHeader.css({
          'background': 'rgba(255, 255, 255, 0.8)',
          'border-bottom': '1px solid #e1e1e1'
        });
        $mainNavA.css({
          'color': '#248A83',
          'text-shadow': 'none'
        });
        $mainNavAhov.css('color', '#404040');
        $mainNavIcon.css({
          'color': '#248A83',
          'text-shadow': 'none'
        });
        $mainNavIconHov.css('color', '#404040');
        $altSearch.css('color', '#666');
      } else {
        $logo.removeClass('alt-header-logo');
        $altLogo.addClass('alt-header-logo');
        $siteHeader.css({
          'background': 'transparent',
          'border': '0'
        });
        $mainNavA.css({
          'color': 'white',
          'text-shadow': '2px 2px 4px #2f1339'
        });
        $mainNavAhov.css('color', '#f0e4d1');
        $mainNavIcon.css({
          'color': 'white',
          'text-shadow': '2px 2px 4px #2f1339'
        });
        $mainNavAhov.css('color', '#f0e4d1');
        $altSearch.css('color', '#f0e4d1');
      }
    });


  });

  // TODO: add search form toggle script
  // focus and blur methods

})(jQuery);

// IIFE
// immediately invoke function expression
// keeps scoping withing function and able to use $ for jQuery