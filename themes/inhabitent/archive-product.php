<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 *  Template Name: Archive Product Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
        <h2>Shop Stuff</h2>
        <div class="archive-product-shop-wrapper">
        <?php
          // Get the terms for our products.
          $terms = get_terms(array(
            'taxonomy' => 'product_type',
            'hide_empty' => 0, // false, hide
          ));

          foreach($terms as $term): ?>
            <div class="archive-shop-term">
              <a href="<?php echo get_term_link($term); ?>">
                <h4><?php echo $term->name; ?></h4>
              </a>
            </div><!-- .archive-shop-term -->
        <?php endforeach; ?>
      </div><!-- .archive-product-shop-wrapper -->
    </header><!-- .page-header -->
      
    <div class="archive-product-wrapper">
    <?php 
    /**
     * Get the product entries 
     */ 
    while ( have_posts() ) : the_post(); ?>
      <div class="product-entry">
        <!-- product thumbnail -->
        <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'medium' ); ?>
        <?php endif; ?>
        </a>
        <div class="archive-product-info">
          <p class="entry-title">
            <?php the_title(); ?>
          </p>
          <p class="price">
            <?php echo '$' . CFS()->get( 'price' ); ?>
          </p>
        </div><!-- .archive-product-info -->
    </div><!-- .archive-products-wrapper -->
    <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
    </main><!-- #main -->
  </div><!-- #primary -->
  
<?php get_footer(); ?>