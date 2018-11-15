<?php
/**
 * The template for displaying all single products.
 *
 * @package RED_Starter_Theme
 * Template Name: Single Product Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
      
    

      <!-- this is retrieving the content-single.php and displaying it -->
      <!-- ?php get_template_part( 'template-parts/content', 'single' ); ?> -->

      <!-- copy and paste from content-single.php -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
          <?php endif; ?>

          

          <!-- <div class="entry-meta">
            <?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
          </div>.entry-meta -->
        </header><!-- .entry-header -->
        <div class="entry-content">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
          <!-- this looks to see if there is a price field and then shows it -->
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
