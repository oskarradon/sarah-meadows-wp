<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1 class="portfolio-title"><?php the_title(); ?></h1>

	<section class="portfolio-gallery">

		<?php 

		$images = get_field('images');

		if( $images ): ?>

			<?php foreach( $images as $image ): ?>

				<div class="portfolio-image">

					<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['caption']; ?>" />

					<p class="image-caption"><?php echo $image['caption']; ?></p>

				</div>

			<?php endforeach; ?>

		<?php endif; ?>

	</section>
	
<?php endwhile; endif; ?>


<?php get_footer(); ?>
