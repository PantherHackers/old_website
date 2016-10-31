<?php get_header() ?>

<div class="main-content wrapper" id="main-content">
	<?php if ( have_posts() ) : ?>
	
		<h2 class="heading top-heading"><?php single_cat_title( '', true ); ?></h2>
		
		<div class="blog-posts clearfix">
			<?php while(have_posts()): the_post(); ?>
				<figure class="blog-post">
					<img src="http://lorempixel.com/350/200" alt="">
					<a href="<?php echo $post->guid;?>">
						<figcaption>
							<p class="category"><?php the_category(' | '); ?></p>
							<p class="title"><?php the_title(); ?></p>
							<p class="excerpt"><?php the_excerpt(); ?></p>
							<p class="text-muted text-small"> <?php the_date(); ?></p>
							<p><a href="<?php the_guid(); ?>" class="btn"> Read More </a></p>
						</figcaption>
					</a>
				</figure>
			<?php endwhile; ?>
		</div>
	
	<?php else: ?>
	
	<h1>Nothing found. Sorry about that.</h1>
	
	<?php endif; ?>
</div>

<?php get_footer(); ?>