<?php get_header(); ?>

<main role="main" id="slide" class="blog transition-fade">
	<section class="blog-header">
		<h1><?= get_the_title(12); ?></h1>
		<? the_field('description', 12); ?>
		<ul>
			<? wp_list_categories( array('show_option_all' => 'All') ); ?>
		</ul>
	</section>

	<section class="posts">
		
		<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<a href="<? the_permalink(); ?>" class="<?php if( get_field('size') == 'Double' ){ echo 'double'; } else { echo 'single'; } ?>">
				<img src="<?= get_the_post_thumbnail_url($post->ID, 'large'); ?>" alt="" />
				<div>
					<div>
						<? foreach((get_the_category()) as $category){
	     					echo '<h4 class="category '.$category->name.'">'.$category->name.'</h4>';
		     			} ?>
						<h2><? the_title(); ?></h2>
						<p><? echo strip_tags(content(30)); ?></p>
						<h3 class="date"><? echo get_the_date('F j, Y'); ?></h3>
					</div>
				</div>
			</a>

		<? endwhile; endif; ?>
	</section>

</main>

<?php get_footer(); ?>