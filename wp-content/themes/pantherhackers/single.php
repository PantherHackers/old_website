<?php get_header(); ?>

 <div class="single-blog-post main-content">
	 <?php if ( ! have_posts() ) : ?>
	        <h1>Not Found</h1>
	            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>
	<?php endif; ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if(has_post_thumbnail()): ?>
			<div class="post-image-area overlay-group">
				<div class="overlay-top"></div>
				<?php the_post_thumbnail(); ?>
					
				<div class="post-info overlay-bottom">
					<h2 class="title"><?php the_title(); ?></h2>
					<p class="text-muted"><?php time_since(the_date()) ?></p>
				</div>
			</div>
		<?php endif; ?>
		<div class="wrapper <?php if(has_post_thumbnail()){ echo 'post-content'; } ?>">
			<?php if(!has_post_thumbnail()): ?>
				<h2 class="heading top-heading"><?php the_title(); ?></h2>
				<p class="text-muted"><?php the_date(); ?></p>
			<?php endif; ?>
			<?php the_content(); ?>
		</div>
		
	<?php endwhile; ?>	
</div> 
<?php get_footer(); ?>