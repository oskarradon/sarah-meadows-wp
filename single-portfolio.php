<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<p class="portfolio-title"><?php the_title(); ?></p>

		<?php

		$images = get_field('images');

		if( $images ): ?>

			<section class="portfolio-gallery <?php if(count($images) == 1): ?> one-up<?php elseif(count($images) == 2): ?> two-up<?php endif; ?>">

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
