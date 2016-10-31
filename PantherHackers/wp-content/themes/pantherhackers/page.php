<?php get_header(); ?>
 
<div class="wrapper single-page">
	<?php if ( ! have_posts() ) : ?>
	        <h1>Not Found</h1>
	            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>
	<?php endif; ?>
	 
	<?php while ( have_posts() ) : the_post(); ?>
		
		<h2 class="heading top-heading"><?php the_title(); ?></h2>
		<div class="page-content">
			<?php the_content('Read More'); ?>
		</div>
	<?php endwhile; ?>
		
</div>

<?php get_footer(); ?>