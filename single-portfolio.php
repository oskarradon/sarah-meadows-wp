<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1 class="portfolio-title"><?php the_title(); ?></h1>

	<main>

		<?php 

		$images = get_field('images');

		if( $images ): ?>

			<?php foreach( $images as $image ): ?>
				<div class="post-image">
					<img class="portfolio-image" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['caption']; ?>" />

					<p class="image-caption"><?php echo $image['caption']; ?></p>
				</div>
			<?php endforeach; ?>

		<?php endif; ?>

	</main>
	
<?php endwhile; endif; ?>


<?php get_footer(); ?>
