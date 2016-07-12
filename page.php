<?php get_header(); ?>

<section class="main-content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="page-content"><?php the_content(); ?></section>

  	<?php endwhile; else : ?>

  	  <p><?php _e( 'Sorry, no page found.', 'sarah-meadows' ); ?></p>

  	<?php endif; ?>

</section>

<?php get_footer(); ?>
