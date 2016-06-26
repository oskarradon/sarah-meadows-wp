<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1 class="portfolio-title"><?php the_title(); ?></h1>

	<?php 

	$images = get_field('images');

	if( $images ): ?>

		<?php foreach( $images as $image ): ?>

			<img class="portfolio-image" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['caption']; ?>" />

			<p class="image-caption"><?php echo $image['caption']; ?></p>

		<?php endforeach; ?>

	<?php endif; ?>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
