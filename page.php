<?php get_header(); ?>

<main>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1 class="page-title"><?php the_title(); ?></h1>

      <section class="page-content"><?php the_content(); ?></section>

  	<?php endwhile; else : ?>

  	  <p><?php _e( 'Sorry, no page found.', 'sarah-meadows' ); ?></p>

  	<?php endif; ?>

</main>

<?php get_footer(); ?>
