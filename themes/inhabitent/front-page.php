<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <div class="header-banner">
              <!-- <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
              <?php endif; ?> -->
            </div> 

            <!-- <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?> -->

            <!-- <img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo Full" class="home-logo"/> -->

            <?php if ( 'post' === get_post_type() ) : ?>
            <!-- <div class="entry-meta">
              <?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
            </div>.entry-meta -->
            <?php endif; ?>
          </header><!-- .entry-header -->
       

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?> 
    <!-- end of default loop -->
  <div class="entry-content">
    <section class="frontpage-shop">
      <h2>Shop Stuff</h2>
      <div class="frontpage-shop-wrapper">
      <?php
        // Get the terms for our products and do some clever stuff with images.
        $terms = get_terms(array(
          'taxonomy' => 'product_type',
          'hide_empty' => 0, // false, hide
        ));

        foreach($terms as $term): ?>
          <div class="frontpage-term">
            <!-- can use d bc of kint debug, similar to var_dump, saying to dump -->
            <!-- <?php d($term); ?> -->
            <img src="<?php echo get_template_directory_uri() . '/public/assets/images/' . $term->slug . '.svg'; ?>" alt="<?php echo $term->name; ?>"/>
            <p><?php echo $term->description; ?></p>
            <a href="<?php echo get_term_link($term); ?>"><button><?php echo $term->name; ?> Stuff</button></a>
            
          </div><!-- .frontpage-term -->
        <?php endforeach; ?>
      </div><!-- .frontpage-shop-wrapper -->
    </section><!-- .frontpage-shop -->

    <!-- TOGO get_posts of Journal posts e.g. the default post type -->
    <?php 
    /** 
     * Get the blog Journal entries
     */ 
      $args = array( 'post_type' => 'post', 'order' => 'date', 'posts_per_page' => 3);
      
      $journal_posts = get_posts( $args ); ?>
      <section class="frontpage-journal">
        <h2>Inhabitent Journal</h2>
          <div class="frontpage-journal-wrapper">
          <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
            <article class="journal-entry">
              <?php 
              // the post thumbnail
              if(has_post_thumbnail()){
                the_post_thumbnail('large'); 
              }
              ?>
              <div class="journal-entry-info">
                <span class="entry-meta">
                <?php
                // the post meta
                inhabitent_posted_on();
                echo ' / ';
                comments_number('0 Comments', '1 Comment', '% Comments'); 
                ?>
                </span>
                <!-- post title -->
                <a href="<?php echo get_permalink(); ?>">
                  <h4><?php the_title(); ?></h4>
                </a>
                
                <!-- the permalink -->
                <a href="<?php echo get_permalink(); ?>" class="button">Read Entry</a>
              </div><!-- .journal-entry-info -->
            </article><!-- .journal-entry -->
          <?php endforeach; wp_reset_postdata(); ?>
        </div><!-- .frontpage-journal-wrapper -->
      </section><!-- .frontpage-journal -->

      <?php 
    /** 
     * Get the Adventure entries
     */ 
      $args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'posts_per_page' => 4);
      
      $adventure_posts = get_posts( $args ); ?>
      <section class="frontpage-adventure">
        <h2>Latest Adventures</h2>
          <div class="frontpage-adventure-wrapper">
          <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
            <article class="adventure-entry">
              <?php 
              // the post thumbnail
              if(has_post_thumbnail()){
                the_post_thumbnail('large'); 
              }
              ?>
              <div class="adventure-entry-info">
                
                <!-- post title -->
                <a href="<?php echo get_permalink(); ?>">
                  <h4><?php the_title(); ?></h4>
                </a>
                
                <!-- the permalink -->
                <a href="<?php echo get_permalink(); ?>" class="button">Read Entry</a>
              </div><!-- .adventure-entry-info -->
            </article><!-- .adventure-entry -->
          <?php endforeach; wp_reset_postdata(); ?>
          <a href="<?php echo get_page_link('adventure'); ?>"><button>More Adventures</button></a>
        </div><!-- .frontpage-adventure-wrapper -->
      </section><!-- .frontpage-adventure -->



    </div><!-- .entry-content -->

      </article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
