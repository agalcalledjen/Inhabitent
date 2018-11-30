<?php
/**
 * The template for displaying archive pages.
 *
 * @package based on RED_Starter_Theme
 *  Template Name: Archive Adventure Template
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <header class="page-header">
      <?php
        the_archive_title( '<h2 class="page-title">', '</h2>' );
      ?>
    </header><!-- .page-header -->

    <div class="archive-adventure-wrapper">
    <?php 
      /** 
       * Get the Adventure entries
       */ 
        $args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'posts_per_page' => 4);
        
        $adventure_posts = get_posts( $args ); ?>
            
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
                  <a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
                </div><!-- .adventure-entry-info -->
              </article><!-- .adventure-entry -->
            <?php endforeach; wp_reset_postdata(); ?>
    </div><!-- .frontpage-adventure-wrapper -->
  
    
  </main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->
  
<?php get_footer(); ?>