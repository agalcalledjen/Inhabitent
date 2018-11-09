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
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

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