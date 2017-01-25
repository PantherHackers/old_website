<?php /* Template Name: Events */ ?>
<?php get_header(); ?>

<style type="text/css">
  @media (max-width: 645px) {
	.wrapper {
		padding-left: 0;
		padding-right: 0;
	}
	.event-list {
		background:#eee;
	}
	.event-list .event {
		padding:0;
		border:none;
		border-radius:0;
	}
	.event-list .event:first-child {
		padding-top:0;
	}
	.event.media .date {
		flex-flow: column nowrap !important;
		border-radius:0 !important;
	}
	.event.media .content-wrapper {
		border:none !important;
		border-radius:0 !important;
	}
	.event.media .date .media-left.event-time {
		order:1;
		max-width:initial !important;
		flex-flow:row nowrap !important;
		padding:3px 10px !important;
  		width:100%;
	}
	.event.media .date .media-left.event-time hr {
		display:none;
	}
	.event.media .date .media-left.event-time p {
		margin: 0 3px;
		align-self:center;
	}
	.event.media .date .media-left.event-time p:last-child {
		margin-top:0;
		margin-left:15px;
	}
	.event.media .date .title-inner {
		padding:5px 25px !important;
		width:100%;
	}
	.event.media .title p a {
		color:#eee !important;
	}
  }
  @media (max-width: 420px) {
	.event-list .event {
		padding:0;
	}
  }
  @media (max-width: 375px) {
	.wrapper {
		padding-left: 0;
		padding-right: 0;
	}
  }
  .mobile-stack {
	float:initial;
	width:initial;
	margin-right:initial;
	display:initial;
  }
  .event-list {
    width:100%;
  }
  .event-list .event:hover .event-info {
    background-color:rgb(245,245,245);
    color:#444;
    padding:0 0 0 20px;
    font-size:1em;
  }
  .event.media {
    display:flex;
    flex-flow: column nowrap;
  }
  .event.media .date {
    display:flex;
    flex-flow:row nowrap;
    text-align: left;
    border-radius:5px 5px 0 0;
    overflow:hidden;
  }
  .event.media .date .media-left.event-time {
    max-width:8vw;
    display:flex;
    flex-flow:column nowrap;
    justify-content:center;
    flex-grow:1;
    border:none;
    padding:10px;
    border-radius:0;
    background-color:#444;
    color:white;
  }
  .event.media .date .media-left.event-time.box hr {
    width: 70%;
    background-color:#bbb;
    border:none;
  }
  .event.media .date .title {
    background: rgb(245,245,245);
    background-size:cover !important;
    background-position:center !important;
    display:flex;
    flex-grow:1;
  }
  .event.media .date .title .title-inner {
    flex-grow:1;
    background: rgba(0,0,0,0.4);
    padding: 5px 0 5px 50px;
  }
  .event.media .title-inner .heading {
    background:none;
    color:white;
    font-size:32pt;
    padding:0;
    margin-top:10px;
    margin-bottom:10px;
  }
  .event.media .title p {
    line-height:1em;
    color:white;
  }
  .event.media .title p {
    font-size:13pt;
    margin-top:10px;
  }
  .event.media .title p a {
    color:#ddd;
  }
  .event.media .content-wrapper {
    border-radius:0 0 5px 5px;
    border: 1px solid rgb(230,230,230);
    border-top:none;
    padding:20px;
    background-color:rgb(245,245,245);
  }
  .media-body.event-info {
    padding-left:0 !important;
  }
  .media-body.event-info .content {
    white-space:pre-wrap;
    white-space: -moz-pre-wrap;
    white-space: -o-pre-wrap;
    word-wrap: break-word;

    font-family:'Gentium Basic', serif;
    font-size:12pt;
    padding:0;
    border-radius:0;
    background-color:transparent;
    border:none;
  }
</style>

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
          <div class="date">
  					<div class="media-left event-time box">
  						<p><?php echo get_post_meta(get_the_ID(), 'month', true);?> </p>
  						<p class="text-emphasized text-bigger"><?php echo get_post_meta(get_the_ID(), 'date', true);?></p>
  						<hr>
  						<p class="text-small"><?php echo get_post_meta(get_the_ID(), 'start_time', true);?> to <?php echo get_post_meta(get_the_ID(), 'end_time', true);?></p>
  					</div>
            <div class="title" style="background:<?php
              $post_content = get_the_content();
              $img_pos = strpos($post_content, "<img");
              if($img_pos !== false) {
                $link_start = strpos($post_content, "src=\"", $img_pos)+5;
                $link_end = strpos($post_content, "\"", $link_start);
                $link = substr($post_content, $link_start, $link_end-$link_start);
                echo "url('" . $link . "')";
                $img_end = strpos($post_content, ">", $link_end);
                $post_content = substr($post_content, 0, $img_pos) . substr($post_content, $img_end+1);

                $a_middle=strpos($post_content, "></");
                if($a_middle !== false) {
                  $a_start = strrpos(substr($post_content, 0, $a_middle), "<");
                  $a_end = strpos(substr($post_content, $a_middle+2), ">")+$a_middle+3;
                  $post_content = substr($post_content, 0, $a_start) . substr($post_content, $a_end);
                }
              }
              else {
                echo "#444";
              }
            ?>;">
              <div class="title-inner">
      						<h2 class="heading"><?php the_title();?></h2>
      						<p><a target="_blank" href="http://maps.google.com/?q=<?php echo get_post_meta(get_the_ID(), 'location', true);?>"><i class="fa fa-map-marker"></i> <?php echo get_post_meta(get_the_ID(), 'location', true);?></a></p>
                  <?php
                    $last_link_start=strrpos($post_content, "http");
                    $last_link_end = strpos($post_content, "\n", $last_link_start);
                    $link_text = strrpos(substr($post_content, 0, $last_link_start), "\n")+1;
                    $last_link = substr($post_content, $link_text, $last_link_end-$link_text);
                    if(strpos($last_link, "<a") === false) {
                      $link_addr_start = strpos($last_link, "http");
                      $link_addr_end = strrpos($last_link, " ", $link_addr_start);
                      if($link_addr_end === false) $link_addr_end = strlen($last_link);
                      $link_addr = substr($last_link, $link_addr_start, $link_addr_end-$link_addr_start);
                      $last_link = substr($last_link, 0, $link_addr_start) . "<a target=\"_blank\" href=\"" . $link_addr . "\">" . $link_addr . "</a>" . substr($last_link, $link_addr_end);
                    }
                    echo "<p>" . $last_link . "</p>";
                    $post_content = substr($post_content, 0, $link_text) . substr($post_content, $last_link_end);

                    $start = strpos($post_content, "<body>")+6;
                    $end = strpos($post_content, "</body>");
                    $post_content = substr($post_content, $start, $end-$start);
                    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+`~|[]{}\'\";,./<>";
                    for($i = 0; $i < strlen($post_content); $i++) {
                      if(strpos($chars, $post_content[$i]) !== false) {
                        $post_content=substr($post_content, $i);
                        break;
                      }
                    }
                    for($i = strlen($post_content)-1; $i >= 0; $i--) {
                      if(strpos($chars, $post_content[$i]) !== false) {
                        $post_content=substr($post_content, 0, $i+1);
                        break;
                      }
                    }
                  ?>
              </div>
            </div>
          </div>
          <div class="content-wrapper">
            <div class="media-body event-info">
  						<p class="content"><?php echo $post_content;?></p>
  					</div>
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