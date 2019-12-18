<?php get_header(); ?>

<main role="main" id="slide" class="single-work transition-fade">

	<section class="work-info">
		<h1><? the_title(); ?></h1>
		<? get_template_part('badges'); ?>
		<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<? the_content(); ?>
		<? endwhile; endif; ?>
	</section>

	<section class="shots">

		<? $featured_url = get_the_post_thumbnail_url();
		$featured_path = pathinfo($featured_url);
		$featured_file = $featured_path['filename'];
		$featured_thumbnail_id = get_post_thumbnail_id( $post->ID );
		$featured_alt = get_post_meta($featured_thumbnail_id, '_wp_attachment_image_alt', true); ?>
		<a href="<?= $featured_url; ?>" data-lightbox="image-0" data-no-swup>
	  		<picture>
		    	<source type="image/webp" srcset="<? bloginfo('template_directory'); ?>/assets/work/<?= $featured_file; ?>.webp">
		    	<img src="<?= $featured_url; ?>" alt="<?= $featured_alt; ?>" data-size="double"/>
	  		</picture>
	  	</a>

		<? $unique_pic = 1; $shots = get_field('shots'); $size = 'full';
			if( $shots ): ?>
				<?php foreach( $shots as $shot ): ?>

					<? $jpg_url = $shot['url'];
					$path = pathinfo($jpg_url);
					$file = $path['filename']; ?>
					<a href="<?= $jpg_url; ?>" data-lightbox="image-<?= $unique_pic; ?>" data-no-swup>
				  		<picture>
		      	    	<source type="image/webp" srcset="<? bloginfo('template_directory'); ?>/assets/work/<?= $file; ?>.webp">
		      	    	<img src="<?= $jpg_url; ?>" alt="<?= $shot['alt']; ?>" data-size="<?= $shot['description']; ?>" />
		        		</picture>
		        	</a>
		        	<? $unique_pic++; ?>

				<?php endforeach; ?>
			<?php endif; ?>
	</section>

</main>

<?php get_footer(); ?>