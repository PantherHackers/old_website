<?php get_header(); ?>
  <style type="text/css">
    .blog-posts.clearfix {
      display:flex;
      flex-flow:row wrap;
    }
    .blog-post>p {
      position:absolute;
      bottom:0;
      width:100%;
      margin:0;
    }
    .blog-post figcaption {
      margin-bottom: 50px;
    }
    .blog-post .btn {
      display:block;
      padding: 8px 12px;
      color: rgb(250,250,250) !important;
      background-color: #4c94dc;
      border-radius: 0;
      border: none;
    }
    .blog-post {
      background-color:rgb(245,245,245);
      overflow:hidden;
      padding-bottom:15px;
      border-radius:5px;
    }
    .blog-post>a:first-child {
      display:block;
      border-radius: 0;
      width:100%;
      height:200px;
      overflow:hidden;
      background-size:cover;
      background-position:center;
    }
    .blog-post figcaption {
      max-width: none;
      background-color:transparent;
      top:20px;
    }
    .blog-post figcaption>p:last-child {
      margin:0 -10px -6px -10px;
    }
    .blog-post .btn:hover {
      background-color:#6cb4fc;
    }
    .blog-post:hover .btn, .blog-post .btn {
      color:rgb(250,250,250);
    }
    .title {
      margin-bottom:0;
    }
    .author {
      margin-bottom:15px;
      color:rgb(140,140,140);
    }
    .category {
      margin:20px 0 0 0;
      background-color:transparent !important;
      border:1px solid #444;
      color: #444 !important;
    }
    .excerpt {
      margin-top: -20px !important;
    }
	</style>
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
							$recent_posts = get_posts(array('numberposts' => -1));
						    	if(count($recent_posts) == 0 && !is_home()){
								echo "<h2>No posts yet. Check back later!</h2>";
							}
							for($i=0; count($recent_posts) > $i; $i++):
							$post = $recent_posts[$i];
					?>
								<figure class="blog-post">
									<a href="<?php echo $post->guid;?>" style="background-image:url('<?php if(has_post_thumbnail($post->ID)) {
										$thumb_img = get_the_post_thumbnail($post->ID, 'full');
										$link_start = strpos($thumb_img, "src=\"")+5;
										$link_length = strpos($thumb_img, "\"", $link_start) - $link_start;
										$link = substr($thumb_img, $link_start, $link_length);
										echo $link;
									}
									else echo "http://pantherhackers.com/wp-content/uploads/2016/11/ph_new_logo_thumbnail_350x200.png"; ?>');">
									</a>
									<a href="<?php echo $post->guid;?>">
										<figcaption>
											<p class="title"><?php echo $post->post_title ?></p>
                      <p class="author"><?php echo 'by ' . get_the_author_meta('display_name',$post->post_author); ?></p>
											<p class="category"><?php echo get_the_category($post->ID)[0]->name; ?></p>
											<p class="excerpt"><?php echo $post->post_excerpt ?></p>
											<p class="text-muted text-small"> <?php echo time_since($post->post_date); ?></p>
										</figcaption>
                    <p>
                      <a href="<?php echo $post->guid ?>" class="btn"> Read More </a>
                    </p>
									</a>
								</figure>
					<?php endfor; ?>
				<?php endif; ?>
				</div>
				</div>
		</div>
<?php get_footer(); ?>