		<footer>
			<div class="footer-form" id="contact">
				<p><? the_field('footer_form_text', 'option'); ?></p>
				<? gravity_form(1, false, false, '', false); ?>
			</div>
			<div class="footer-info">
				<div class="footer-social">
					<a href="<? the_field('spotify', 'option'); ?>" target="_blank" rel="noreferrer">
						<div>
							<img src="<? bloginfo('template_directory'); ?>/assets/social/spotify.svg" alt="spotify logo" />
							<img src="<? bloginfo('template_directory'); ?>/assets/social/spotify-white.svg" alt="spotify logo" />
						</div>
					</a>
					<a href="<? the_field('instagram', 'option'); ?>" target="_blank" rel="noreferrer">
	  					<div>
		  					<img src="<? bloginfo('template_directory'); ?>/assets/social/instagram.svg" alt="instagram logo" />
		  					<img src="<? bloginfo('template_directory'); ?>/assets/social/instagram-white.svg" alt="instagram logo" />
		  				</div>
	  				</a>
					<a href="<? the_field('twitter', 'option'); ?>" target="_blank" rel="noreferrer">
						<div>
							<img src="<? bloginfo('template_directory'); ?>/assets/social/twitter.svg" alt="twitter logo" />
							<img src="<? bloginfo('template_directory'); ?>/assets/social/twitter-white.svg" alt="twitter logo" />
						</div>
					</a>
					<a href="<? the_field('dribbble', 'option'); ?>" target="_blank" rel="noreferrer">
						<div>
							<img src="<? bloginfo('template_directory'); ?>/assets/social/dribbble.svg" alt="dribbble logo" />
							<img src="<? bloginfo('template_directory'); ?>/assets/social/dribbble-white.svg" alt="dribbble logo" />
						</div>
					</a>
				</div>
				<nav>
					<ul>
						<?php wp_nav_menu( array(
						'theme_location'    => 'primary',
						'menu'				  => 'Footer Menu',
						'depth'             => 2,
						'container'         => false,
						'items_wrap' 		  => '%3$s',
						'walker'            => new Christopher(),
						)); ?>
					</ul>
				</nav>
			</div>
		</footer>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<? if( is_page_template('page-inspiration-year.php') || is_singular('work') ): ?>
			<script defer src="<?php bloginfo('template_directory'); ?>/js/lightbox.js"></script>
		<? endif; ?>
		<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>  
		<script defer src="<?php bloginfo('template_directory'); ?>/js/SwupScriptsPlugin.min.js"></script>
		<script defer src="<?php bloginfo('template_directory'); ?>/js/SwupPreloadPlugin.min.js"></script>
		<script defer src="<?php bloginfo('template_directory'); ?>/js/SwupScrollPlugin.min.js"></script>
		<script defer src="<?php bloginfo('template_directory'); ?>/js/SwupSlideTheme.min.js"></script>
		<script defer src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
		<!-- Twitter universal website tag code -->
		<script>
		!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
		},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
		a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
		twq('init','o2op4');
		twq('track','PageView');
		</script>
		<!-- End Twitter universal website tag code -->
		<? wp_footer(); ?>
	</body>
</html>
