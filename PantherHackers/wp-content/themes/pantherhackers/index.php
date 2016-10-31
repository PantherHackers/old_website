<?php get_header(); ?>
	<div class="main-content" id="main-content">		
		<?php if(is_home()): ?>
			<!-- <div class="wrapper section-padding">
				<h2 class="heading">Welcome to PantherHackers</h2>
				<p><?php bloginfo('description'); ?></p>
			</div> -->
		<?php endif; ?>
		
		<div class="wrapper <?php if(!is_home()){ echo 'non-home-container';}else{echo "home-content-container";}?>">
			<?php if(is_home()): ?>
				<?php $numberOfPosts = 3; ?>
			<?php else: ?>
				<h2 class="heading top-heading">Blog</h2>
				<?php $numberOfPosts = 6; ?>
			<?php endif; ?>
				<div class="blog-posts clearfix">
				<?php if(!is_home()): ?>
					<?php 	
							$recent_posts = get_posts(array('numberposts' => $numberOfPosts));
						    	if(count($recent_posts) == 0 && !is_home()){
								echo "<h2>No posts yet. Check back later!</h2>";
							}
							for($i=0; count($recent_posts) > $i; $i++):
							$post = $recent_posts[$i];
					?>
								<figure class="blog-post" style="background-color:rgb(250,250,250); overflow:hidden; padding-bottom:25px; border-radius:10px;">
									<a href="<?php echo $post->guid;?>" style="display:block; border-radius: 0; width:100%; height:200px; overflow:hidden; background-image:url(<?php if(has_post_thumbnail($post->ID)) {
										$thumb_img = get_the_post_thumbnail($post->ID, 'full');
										$link_start = strpos($thumb_img, "src=\"")+5;
										$link_length = strpos($thumb_img, "\"", $link_start) - $link_start;
										$link = substr($thumb_img, $link_start, $link_length);
										echo "'" . $link . "'";
									}
									else echo "'http://pantherhackers.com/wp-content/uploads/2016/10/PH_new_logo_thumbnail_350x200.png'"; ?>); background-size:cover; background-position:center;">
									</a>
									<a href="<?php echo $post->guid;?>">
										<figcaption style="background-color:transparent;">
											<p class="category"><?php echo get_the_category($post->ID)[0]->name; ?></p>
											<p class="title"><?php echo $post->post_title ?></p>
											<p class="excerpt"><?php echo $post->post_excerpt ?></p>
											<p class="text-muted text-small"> <?php echo time_since($post->post_date); ?></p>
											<p><a href="<?php echo $post->guid ?>" class="btn"> Read More </a></p>
										</figcaption>
									</a>
								</figure>
					<?php endfor; ?>
				<?php endif; ?>
				</div>
				</div>
		</div>
<?php get_footer(); ?>