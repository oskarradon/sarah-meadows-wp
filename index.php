<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="post">
    <a href="<?php the_permalink(); ?>">
      <img src="" alt="" />
      <p><?php the_title(); ?></p>
    </a>
  </div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
