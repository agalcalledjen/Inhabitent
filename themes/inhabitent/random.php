<?php
  $args = array( 'post_type' => 'product', 'order' => 'ASC' );
  $products = new WP_Query( $args ); // instantiate our object
?>
<?php if ( $products->have_posts() ) : ?>
  <?php while ( $products->have_posts() ) : $products->the_post(); ?>
      <?php /* Content of the queried post results goes here */ ?>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>

------------

<?php
   $args = array( 'post_type' => 'product', 'order' => 'ASC' );
   $product_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); ?>

--------

<?php $products = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $products->have_posts() ) : ?>
   <?php while ( $products->have_posts() ) : $products->the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>






<!-- <?php 
    /** 
     * Get the blog Journal entries
     */ 
    $args = array( 'post_type' => 'product', 'order' => 'ASC','posts_per_page' => 16);
    // returns an array of posts
    $product_posts = get_posts( $args ); ?>-->

    <section class="archive-products">
      <!-- <h2>Inhabitent Journal</h2> -->
        <!-- <div class="products-wrapper">
        <!-- <?php foreach ( $product_posts as $product ) : setup_postdata( $product ); ?> -->
          <!-- <article class="product-entry"> -->

            <!-- the permalink -->
            <!-- <a href="<?php echo get_permalink(); ?>"><?php 
            // the post thumbnail
            if(has_post_thumbnail()){
              the_post_thumbnail('medium'); 
            }
            ?></a> -->

            
            <!-- <div class="product-entry-info">

              <!-- post title & price -->
              <h4><?php the_title(); ?></h4>
              <p class="price"><?php echo '$' . CFS()->get( 'price' ); ?></p>
              <p><?php the_content(); ?></p>
              
            </div>
          </article> -->
        <!-- <?php endforeach; wp_reset_postdata(); ?> -->
      <!-- </div>
    </section>  -->