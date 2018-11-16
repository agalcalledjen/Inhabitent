<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><hr><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'search' ); ?>
        
        <a href="<?php echo get_permalink(); ?>" class="button">Read More &rarr;</a>

			<?php endwhile; ?>

			<?php inhabitent_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>
      
		<?php endif; ?>
    
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
