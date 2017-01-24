<?php /* Template Name: Events */ ?>
<?php get_header(); ?>
 
<div class="wrapper single-page">
	<h2 class="heading top-heading">Events</h2>
	<?php 
		$events = new WP_Query(array('post_type' => 'Event'));
	?>
	 
	<?php 
		if($events->have_posts()) : 
	?>
	
	<div class="events-container clearfix">
		<ul class="event-list media-list">
					
		<?php
			while($events->have_posts()): 
			$events->the_post(); 
		?>
				<li class="event media">
					<div class="media-left event-time box">
						<p><?php echo get_post_meta(get_the_ID(), 'month', true);?> </p>
						<p class="text-emphasized text-bigger"><?php echo get_post_meta(get_the_ID(), 'date', true);?></p>
						<hr>
						<p class="text-small"><?php echo get_post_meta(get_the_ID(), 'start_time', true);?> to <?php echo get_post_meta(get_the_ID(), 'end_time', true);?></p>	
					</div>
					<div class="media-body event-info">
						<h2 class="heading"><?php the_title(); ?></h2>
						<p><?php the_content()?></p>
						<p><i class="fa fa-map-marker"></i> <?php echo get_post_meta(get_the_ID(), 'location', true);?></p>
					</div>
				</li>
	<?php endwhile; ?>
		</ul>
	</div>
	<?php else: ?>
		<h3>There are no events posted at the moment. Keep posted by signing up for <a href="http://pantherhackers.com/news/">our newsletter</a>!</h3>
	<?php endif; ?>
</div>

<?php get_footer(); ?>