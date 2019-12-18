<? get_header(); /* Template Name: My Work */ ?>

<main id="slide" class="transition-fade">
	<section class="work">

		<div>
			<h1><?= get_the_title(10); ?></h1>
			<?php $post = get_post(10); 
			echo apply_filters('the_content', $post->post_content); ?>
		</div>

		<? query_posts(array('post_type' => 'work')); ?>
		<? while (have_posts()) : the_post(); ?>
			<a href="<? the_permalink(); ?>">
				<? $og_url = get_the_post_thumbnail_url(get_the_ID(),'medium_large');
				$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
		  		<picture>
      	    	<img src="<?= $og_url; ?>" alt="<?= $alt; ?>" />
        		</picture>
        		<div>
        			<h2><? the_title(); ?></h2>
        			<? get_template_part('badges'); ?>
        		</div>
			</a>
		<? endwhile; ?>

	</section>
</main>

<? get_footer(); ?>