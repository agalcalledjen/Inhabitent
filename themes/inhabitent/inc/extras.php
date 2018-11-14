<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

/**
 * Change the logo on the WP login screen.
 */
// function inhabitent_login_head( $add_google_analytics, $int ) { 
//   // make action magic happen here... 
// }; 
// add_action( 'login_head', 'inhabitent_login_head', 10, 2 ); 
function inhabitent_login_logo() { ?>
  <style type="text/css">
      #login h1 a, .login h1 a {
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/public/assets/images/logos/inhabitent-logo-text-dark.svg);
  height:65px;
  width:320px;
  background-size: 320px 65px;
  background-repeat: no-repeat;
        padding-bottom: 30px;
      }
  </style>
<?php }
// add_action('login_head','my_login_logo');
// same as below
add_action( 'login_enqueue_scripts', 'inhabitent_login_logo' );

/**
 * Change the logo's url on the WP login screen.
 */
// changing the login_headurl to the returned get_bloginfo('url') aka url of blog
function inhabitent_the_url( $url ) {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'inhabitent_the_url' );

// Change all post titles to uppercase
// function all_character_uppercase($title){
//   return ucfirst(strtoupper($title)); 
// }
// add_filter('the_title', 'all_character_uppercase');

/**
 * Filter the except length to 50 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// TODO move login header PHP top this folder

/**
 * Custom Hero Image for the About Page 
 */
function inhabitent_hero_banner(){
  if(!is_page_template('about.php')){
    return;
  }

  // gets the url of the banner image
  $image = CFS()->get('about_header_image');
  // var_dump($image);

  if(!$image){
    $hero_css = ".page-template-about .entry-header {
      background: grey;
      color: white;
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center; 
    }";
  } else {
    $hero_css = ".page-template-about .entry-header {
      background: grey;
      background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
      url({$image});
      color: white;
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center; 
      background-size: cover;
    }";
  }

  // a method to add inline style and 'inhabitent-style' is a name that we have given to the styling which must match what's in functions.php when loading scripts
  wp_add_inline_style('inhabitent-style', $hero_css);
}
add_action('wp_enqueue_scripts', 'inhabitent_hero_banner');