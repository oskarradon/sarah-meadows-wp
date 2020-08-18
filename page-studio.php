<?php
/*
  Template Name: Studio Page
*/
?>

<?php get_header(); ?>

<main>
<?php $loop = new WP_Query( array( 'post_type' => 'studio_post', 'posts_per_page' => -1, 'category' => 'current' ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<article class="studio-post">
  <h2 class="studio-title"><?php echo get_the_title(); ?></h2>
  <?php if ( has_post_thumbnail() ) {the_post_thumbnail( 'medium_large' );} ?>
  <div class="studio-content-wrapper"> <?php the_content(); ?></div>
  <h4 class="studio-time">&middot;   &middot;   &middot;</h4>
</article>

<?php endwhile; wp_reset_query(); ?>

</main>

<?php get_footer(); ?>
