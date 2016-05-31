<?php

  $num_posts = ( is_front_page() ) ? 10 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

?>


<section class="main-content">

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div class="portfolio-item">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
  </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>
