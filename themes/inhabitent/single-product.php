<?php
/**
 * The template for displaying all single products.
 *
 * @package RED_Starter_Theme
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

          <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

          <!-- <div class="entry-meta">
            <?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
          </div>.entry-meta -->
        </header><!-- .entry-header -->
        <div class="entry-content">
          <!-- this looks to see if there is a price field and then shows it -->
          <?php echo CFS()->get( 'price' ); ?>

          <?php the_content(); ?>
          
          <?php
            wp_link_pages( array(
              'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
              'after'  => '</div>',
            ) );
          ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
          <?php inhabitent_entry_footer(); ?>
        </footer><!-- .entry-footer -->
      </article><!-- #post-## -->

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
