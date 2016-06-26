<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1 class="portfolio-title"><?php the_title(); ?></h1>

	<?php the_field('images'); ?>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
