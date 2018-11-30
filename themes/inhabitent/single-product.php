<?php
/**
 * The template for displaying all single products.
 *
 * @package based on RED_Starter_Theme
 * Template Name: Single Product Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
          <?php endif; ?>
        </header><!-- .entry-header -->
        
        <div class="entry-content">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
          <p class="price"><?php echo '$' . CFS()->get( 'price' ); ?></p>
          <p><?php the_content(); ?></p>
          
          <?php
            wp_link_pages( array(
              'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
              'after'  => '</div>',
            ) );
          ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
          <?php inhabitent_entry_footer(); ?>
          <ul class="social-links">
            <li>
              <a href="https://facebook.com" target="_blank" class="button">
                <i class="fab fa-facebook-f fa-sm"></i>
                <span> Like</span>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com" target="_blank" class="button">
                <i class="fab fa-twitter fa-sm"></i>
                <span> Tweet</span>
              </a>
            </li>
            <li>
              <a href="https://www.pinterest.ca" target="_blank" class="button">
                <i class="fab fa-pinterest fa-sm"></i>
                <span> Pin</span>
              </a>
            </li>
          </ul><!-- end of .social-links -->
        </footer><!-- .entry-footer -->
      </article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
