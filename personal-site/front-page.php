<? get_header(); ?>

<main id="slide" class="transition-fade front">

	<section class="hero">

		<div class="intro">
		  	<div class="daily-sites">
	  			<a href="https://www.awwwards.com/" onclick="window.open('https://httpster.net/'); window.open('https://land-book.com/'); window.open('https://dribbble.com/'); window.open('https://thehistoryoftheweb.com/archives/'); window.open('https://css-tricks.com/'); window.open('https://alistapart.com/articles/'); window.open('https://css-irl.info/'); window.open('https://orion.managewp.com/dashboard/overview'); window.open('https://heydesigner.com/');">My Daily Sites</a>
	  		</div>
			<h1><? the_field('hero_text', 8); ?></h1>
			<picture>
		    	<source type="image/webp" srcset="<? bloginfo('template_directory'); ?>/assets/joe-kotlan-smiling.webp">
		    	<img src="<? bloginfo('template_directory'); ?>/assets/joe-kotlan-smiling.jpg" alt="joe kotlan smiling"/>
		  	</picture>
		</div>

		<a href="<? the_field('dribbble', 'option'); ?>" class="dribbble">
			<img src="<? bloginfo('template_directory'); ?>/assets/social/dribbble.svg" alt="link to dribbble portfolio" />
		</a>

		<div id="rotating-text">
			<svg x="0px" y="0px" width="300px" height="300px">
			    <defs>
			        <path id="path" d="M90,150c0,33.1,26.9,60,60,60s60-26.9,60-60s-26.9-60-60-60S90,116.9,90,150" />
			    </defs>
			    <circle cx="150" cy="100" r="75" fill="none"/>
			    <g>
			        <use xlink:href="#path" fill="none"/>
			        <text fill="#50504d">
			            <textPath xlink:href="#path" letter-spacing="1.2"><? the_field('rotating_text', 8); ?></textPath>
			        </text>
			    </g>
			</svg>
		</div>

	</section>

	<section class="latest">

		<h2><? the_field('recent_section_headline', 8); ?></h2>

		<div class="latest-twitter">
			<h3>Latest on <img src="<? bloginfo('template_directory'); ?>/assets/social/twitter-white.svg" alt="twitter" height="35" /></h2>
			<a class="twitter-timeline twitter-tweet" href="<? the_field('twitter', 'option'); ?>"  data-chrome="noheader nofooter noscrollbar noborders noscrollbar" data-tweet-limit="1" ></a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			<? // Get latest tweet, only using this to get the timestamp of the tweet.
			require_once('TwitterAPIExchange.php');
			$settings = array(
			   'oauth_access_token' => "21933113-if4gtQT1cTRukKcQ0SxmEQNGG4E0o75ChrAQCgw88",
			   'oauth_access_token_secret' => "vv5oCB6BS78szyN5l2xFpYLO3UMsYhon7Zcj9Tnr1xlou",
			   'consumer_key' => "jCk6t9AuDpT31UiSlycSEIZdk",
			   'consumer_secret' => "dx92ZAJ6ZIqyKaYi0FZh4l2nZBdCx2nkiNMaTnEX4i8USmN2Mp"
			);
			$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
			$requestMethod = "GET";
			$user = "joekotlan";
			$count = 1;
			if (isset($_GET['user'])) { $user = $_GET['user']; }
			if (isset($_GET['count'])) { $count = $_GET['count'];}
			$getfield = "?screen_name=$user&count=$count";
			$twitter = new TwitterAPIExchange($settings);
			$string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(),$assoc = TRUE);
			foreach($string as $items) {
				$unformatted_date = $items['created_at'];
				$old_date_timestamp = strtotime($unformatted_date);
				$date = date('n/j/Y, g:i:s A', $old_date_timestamp);
				echo '<p id="twitter-timestamp" class="timestamp">'.$date.'</p>';
			} ?>
		</div>

		<div class="latest-instagram">
			<h3>Latest on <img src="<? bloginfo('template_directory'); ?>/assets/social/instagram-white.svg" alt="instagram" height="35"/></h3>
			<ul id="instagram-image">
		</div>

		<div class="latest-work">
			<? query_posts(array( 'post_type' => 'work', 'showposts' => 1 ) ); ?>
			<? while (have_posts()) : the_post(); ?>
				<h3><? the_field('front_page_description'); ?></h3>
				<a href="<?= the_permalink(); ?>">
					<? the_post_thumbnail( 'large'); ?>
				</a>
				<p id="work-timestamp" class="timestamp"><? echo get_the_date('n/j/Y, g:i:s A'); ?></p>
			<? endwhile; ?>
		</div>
			
		<div class="latest-literature">
			<? query_posts(array( 'post_type' => 'post', 'showposts' => 1 ) ); ?>
			<? while (have_posts()) : the_post(); ?>
				<h3><? the_field('front_page_description'); ?></h3>
				<a href="<? the_permalink(); ?>">
					<? the_post_thumbnail( 'large'); ?>
					<div>
						<? foreach((get_the_category()) as $category){
	     					echo '<h5 class="category '.$category->name.'">'.$category->name.'</h5>';
		     			} ?>
						<h4><? the_title(); ?></h4>
						<p><? echo strip_tags(content(30)); ?></p>
						<h5 class="date"><? echo get_the_date('F j, Y'); ?></h5>
					</div>
				</a>
				<p id="literature-timestamp" class="timestamp"><? echo get_the_date('n/j/Y, g:i:s A'); ?></p>
			<? endwhile; ?>
		</div>

	</section>

	<section class="bio">
		<h2><? the_field('bio_headline', 8); ?></h2>
		<? the_field('bio', 8); ?>
	</section>

</main>

<? get_footer(); ?>