		<footer class="top-footer theme-dark">
			<div class="wrapper">
				<img src="<?php bloginfo('template_directory');?>/img/logo-01.png" alt="" class="logo-small">
				<p>Designed and Developed by Panther Hackers @ GSU</p>
				<p>	
					<a href="https://www.facebook.com/PantherHackers"><i class="fa fa-facebook"></i></a> &nbsp; 
					<a href="https://twitter.com/PantherHackers"><i class="fa fa-twitter"></i></a> &nbsp; 
					<a href="https://instagram.com/pantherhackers/"> <i class="fa fa-instagram"></i></a>&nbsp; 
					<!-- <a href="#"> <i class="fa fa-vine"></i></a> &nbsp;  -->
					<!-- <a href="#"> <i class="fa fa-youtube-play"></i></a> &nbsp;  -->
					<a href="mailto:hello@pantherhackers.com"> <i class="fa fa-envelope-o"></i></a>
				</p>
			</div>
		</footer>
	
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/collapse.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/app.js"></script>
		
		<?php if(is_home()): ?>
			<script>
				document.querySelector('header').style.height = window.innerHeight + "px";
				
				$(function() {
					$('a[href*=#]:not([href=#])').click(function() {
						if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
							var target = $(this.hash);
							target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
							if (target.length) {
								$('html,body').animate({
									scrollTop: target.offset().top
								}, 1000);
								
								return false;
							}
						}
					});
				});
			</script>
		<?php endif; ?>
	</body>
</html>