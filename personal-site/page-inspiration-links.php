<? get_header(); /* Template Name: Inspiration - Links */ ?>

<main id="slide" class="<?= (str_replace(' ', '-', strtolower(get_the_title()))); ?> transition-fade">

	<section class="description">
		<h1><? the_title(); ?></h1>
		<? the_content(); ?>
	</section>

	<section class="sites">
		
			<? if( have_rows('years') ):
				while ( have_rows('years') ) : the_row(); ?>

					<div class="year">
						<? if( get_sub_field('year')): ?>
							<h2><? the_sub_field('year'); ?></h2>
						<? endif; ?>
						<ul>

							<? if( have_rows('sites') ):
								while ( have_rows('sites') ) : the_row(); ?>

									<li>
										<? $site_link = get_sub_field('link'); ?>
										<a href="<?= $site_link['url']; ?>" target="_blank" rel="noreferrer"><? the_sub_field('site_name'); ?>
											<?if(get_sub_field('attribute')): ?>
												<p class="attribute"><? the_sub_field('attribute'); ?></p>
											<? endif; ?>
										</a>
									</li>

								<? endwhile;
							endif; ?>
							
						</ul>
					</div>

				<? endwhile;
			endif; ?>
			
	</section>

</main>

<? get_footer(); ?>