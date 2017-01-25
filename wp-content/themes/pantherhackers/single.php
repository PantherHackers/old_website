<?php get_header(); ?>
  <style type="text/css">
    @media screen and (max-width:600px) {
      .single-blog-post.main-content {
        width:100% !important;
        border-radius:0 !important;
      }
      .post-image-area.overlay-group {
        padding:5% 15px 5% 15px !important;
      }
      .wrapper.post-content {
        top:0;
        max-width:100% !important;
        border:none !important;
      }
    }

    .single-blog-post.main-content {
      position: relative;
      width: 80%;
      margin: 0 auto;
      height: auto;
      margin-bottom: 40px;
      margin-top: 20px;
      background-color: rgb(245,245,245);
      border-radius: 7px;
      overflow: hidden;
      box-shadow:inset 0 0 0 1px rgb(230,230,230)
    }
    .post-image-area.overlay-group {
      height:auto;
      width:100%;
      padding-top: 5%;
      padding-bottom: 10%;
      background-size:cover !important;
      background-position:center !important;
    }
    .overlay-top {
      opacity:1;
    }
    .title {
      margin-bottom:0;
    }
    .author {
      font-size:13pt;
    }
    .post-info.overlay-bottom {
      position:relative !important;
    }
    .wrapper.post-content {
      max-width:87.5%;
      font-size:13pt;
      border-radius:5px;
      border:1px solid rgb(235,235,235);
      margin-bottom:-25px;
    }
  </style>

 <div class="single-blog-post main-content">
     <?php if ( ! have_posts() ) : ?>
            <h1>Not Found</h1>
                <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>
    <?php endif; ?>
    <?php while ( have_posts() ) : the_post(); ?>
    		<div class="post-image-area overlay-group" style="background:url('<?php
        	if(has_post_thumbnail($post->ID)) {
        		$thumb_img = get_the_post_thumbnail($post->ID, 'full');
        		$link_start = strpos($thumb_img, "src=\"")+5;
        		$link_length = strpos($thumb_img, "\"", $link_start) - $link_start;
        		$link = substr($thumb_img, $link_start, $link_length);
        	}
        	echo $link;
        ?>');">
    			<div class="overlay-top" style="background-color:rgba(0,0,0,<?php if(has_post_thumbnail($post->ID)) echo '0.4'; else echo '0.0'; ?>);"></div>

    			<div class="post-info overlay-bottom">
    				<h2 class="title" style="color: <?php if(has_post_thumbnail($post->ID)) echo '#fff'; else echo '#444'; ?>;"><?php the_title(); ?></h2>
            <p class="author" style="color: <?php if(has_post_thumbnail($post->ID)) echo '#eee'; else echo '#555'; ?>;"><?php echo 'by ' . get_the_author_meta('display_name',$post->post_author); ?></p>
    				<p class="text-muted"><?php the_date(); ?></p>
    			</div>
    		</div>
    	<div class="wrapper post-content">
    		<?php the_content(); ?>
    	</div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>