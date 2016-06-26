<?php get_header(); ?>

<section class="main-content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>

  	<?php endwhile; else : ?>

  	  <p><?php _e( 'Sorry, no page found.', 'sarah-meadows' ); ?></p>

  	<?php endif; ?>

</section>

<?php get_footer(); ?>
