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
  return home_url();
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
      background-position: center;
    }";
  }

  // a method to add inline style and 'inhabitent-style' is a name that we have given to the styling which must match what's in functions.php when loading scripts
  wp_add_inline_style('inhabitent-style', $hero_css);
}
add_action('wp_enqueue_scripts', 'inhabitent_hero_banner');


/** 
 * Modify the Product post type archive loop */
function inhabitent_mod_post_type_archive( $query ){
  // want to check for ..
  if(
    ( is_post_type_archive( array( 'product' ) ) || $query->is_tax( 'product_type' ) )
    // don't want to affect the admin loop
    && !is_admin()
    // only want to get the main query loop
    && $query->is_main_query()
  ){
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
    $query->set( 'posts_per_page', 16 );
  }
}
add_action('pre_get_posts','inhabitent_mod_post_type_archive');


 /** 
 * Filter the Product archive title 
 * */ 
function inhabitent_archive_product_title ( $title ){
  // we don't want this to be applied to every archive on our page so we will use an else if stmt
  if( is_post_type_archive('product') ){
    $title = 'Shop Stuff';
  } else if( is_tax('product_type') ){
    // 
    // %1$1 = token
    $title = sprintf( '%1$1', single_term_title( '', false));
  }
  return $title;
}
add_filter('get_the_archive_title', 'inhabitent_archive_product_title'); 

 /** 
 * Replace the excerpt "Read More" 
 * */ 
// function inhabitent_excerpt_more( $more ){
//   global $post;
//   return '<a class="read-more" href="' . get_permalink( $post->ID ) . '">Read More</a>' ;
// }
// add_filter('excerpt_more','inhabitent_except_more');

function inhabitent_archive_adventure_title ( $title ){
  // we don't want this to be applied to every archive on our page so we will use an else if stmt
  if( is_post_type_archive('adventure') ){
    $title = 'Latest Adventures';
  } else if( is_tax('adventure_type') ){
    // 
    // %1$1 = token
    $title = sprintf( '%1$1', single_term_title( '', false));
  }
  return $title;
}
add_filter('get_the_archive_title', 'inhabitent_archive_adventure_title'); 
