<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<p class="portfolio-title"><?php the_title(); ?></p>

	<section class="portfolio-gallery">

		<?php

		$images = get_field('images');

		if( $images ): ?>

			<?php foreach( $images as $image ): ?>

				<div class="portfolio-image">

					<img src="<?php echo $image['sizes']['large']; ?>" alt="" />

					<p class="image-description"><?php echo $image['description']; ?></p>

				</div>

			<?php endforeach; ?>

		<?php endif; ?>

	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
