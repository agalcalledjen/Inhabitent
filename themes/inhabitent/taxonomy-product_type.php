<?php
/**
 * The template for displaying all single products.
 *
 * @package based on RED_Starter_Theme
 * Template Name: Product Type Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
        <h2 class="page-title">
          <?php single_term_title(); ?>
        </h2>
        <div class="taxonomy-description">
          <?php the_archive_description(); ?>
        <div>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
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
            <div class="ellipsis"></div>
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