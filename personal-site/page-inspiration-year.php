<? get_header(); /* Template Name: Inspiration - Year */ ?>

<main id="slide" class="transition-fade">

	<section class="inspiration">

		<? 
			$inspiration = get_field('inspiration');
			$year = get_the_title();
			$num = (int)$year;
			$prev = $num - 1;
			$next = $num + 1;
			$current = date("Y");
			$currentNum = (int)$current;
			$totalYears = $currentNum - 2010;
		?>
		<div class="head">

			<div class="title">
				<? if($year != '2011'): ?>
					<a href="/inspiration/year-<?= $prev; ?>">Previous Year</a>
				<? endif; ?>	
				<h1><?= $year; ?></h1>
				<? if($year != $current): ?>
					<a href="/inspiration/year-<?= $next; ?>">Next Year</a>
				<? endif; ?>
			</div>

			<div class="dots">
				<?php for ($i = 0; $i < $totalYears; $i++) : ?>
					<? $yearLink = 2011 + $i; ?>
				   <a href="/inspiration/year-<?= $yearLink; ?>" <? if($yearLink == $num){ echo 'class="current"'; } ?>><?= $yearLink ?></a>
				<? endfor; ?>
			</div>

		</div>

		<? $unique_img = 0; if( $inspiration ):
	   	foreach( $inspiration as $img ):
	   		$jpg = $img['filename'];
	   		$webp = str_replace('jpg', 'webp', $jpg);
	   		$webp = str_replace('jpeg', 'webp', $webp);
	   		$webp = str_replace('png', 'webp', $webp); ?>
	   		<a href="<?= $img['sizes']['large']; ?>" data-lightbox="image-<?= $unique_img; ?>" data-no-swup>
	      		<picture>
	      	    	<source type="image/webp" srcset="<? bloginfo('template_directory'); ?>/assets/inspiration/<?= $year; ?>/<?=$webp; ?>">
	      	    	<img src="<?= $img['sizes']['large']; ?>" alt="<?= $img['alt']; ?>" data-size="<?= $img['description']; ?>" />
	        		</picture>
        		</a>
        		<? $unique_img++; ?>
        <? endforeach;
     endif; ?>
	</section>

</main>

<? get_footer(); ?>