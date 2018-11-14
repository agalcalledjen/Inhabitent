<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
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
