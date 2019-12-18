<?php get_header(); ?>

<main role="main" id="slide" class="single transition-fade">
	<article class="content">

		<h1><? the_title(); ?></h1>
		<p class="date"><? echo get_the_date('F j, Y'); ?></p>
		<? foreach((get_the_category()) as $category){
			echo '<a class="cat-link" href="'.get_category_link($category).'"><h4 class="category '.$category->name.'">'.$category->name.'</h4></a>';
		} ?>

		<? if(get_field('show_featured_image') == 'Yes') :
			$feat_url = get_the_post_thumbnail_url($post->ID, 'full');
			$feat_img = get_post_thumbnail_id( $post->ID );
			$feat_alt = get_post_meta($feat_img, '_wp_attachment_image_alt', true); ?>
			<img class="feat-img" src="<?= $feat_url ?>" alt="<?= $feat_alt ?>" />
		<? endif; ?>

		<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<? the_content(); ?>
		<? endwhile; endif; ?>

		<p class="blog-post-ending"><a href="<? the_field('twitter', 'option'); ?>" target="_blank" rel="nofollow">@joekotlan</a> on Twitter</p>

	</article>
</main>

<?php get_footer(); ?>