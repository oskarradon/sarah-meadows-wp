<?php

  $num_posts = ( is_front_page() ) ? 20 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );
  $unique_id = 1;
?>


<main>

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
  
  <div id="post<?php echo $unique_id;?>" class="portfolio-item">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-size'); ?></a>
    <p class="post-title"><?php the_title(); ?></p>
  </div>

  <?php $unique_id++; ?>
  
  <?php endwhile; endif; wp_reset_postdata(); ?>

</main>
