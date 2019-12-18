<div class="badges">
	<? $badges = get_field('technologies_used');
	if( $badges && in_array('Wordpress', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/wordpress.png" alt="Wordpress badge" />
	<? endif; if( $badges && in_array('HTML', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/html.png" alt="HTML badge" />
	<? endif; if( $badges && in_array('CSS', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/css.png" alt="CSS badge" />
	<? endif; if( $badges && in_array('Javascript', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/javascript.png" alt="Javascript badge" />
	<? endif; if( $badges && in_array('Photoshop', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/photoshop.png" alt="Photoshop badge" />
	<? endif; if( $badges && in_array('Illustrator', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/illustrator.png" alt="Illustrator badge" />
	<? endif; if( $badges && in_array('InDesign', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/indesign.png" alt="InDesign badge" />
	<? endif; if( $badges && in_array('Xcode', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/xcode.png" alt="Xcode badge" />
	<? endif; if( $badges && in_array('Swift', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/swift.png" alt="Swift badge" />
	<? endif; if( $badges && in_array('Objective C', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/objectiveC.png" alt="Objective C badge" />
	<? endif; if( $badges && in_array('Bootstrap', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/bootstrap.png" alt="Bootstrap badge" />
	<? endif; if( $badges && in_array('Titanium', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/titanium.png" alt="Titanium badge" />
	<? endif; if( $badges && in_array('Unity', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/unity.png" alt="Unity badge" />
	<? endif; if( $badges && in_array('Rhino', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/rhino.png" alt="Rhino badge" />
	<? endif; if( $badges && in_array('Keyshot', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/keyshot.png" alt="Keyshot badge" />
	<? endif; if( $badges && in_array('Eventbrite', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/eventbrite.png" alt="Eventbrite badge" />
	<? endif; if( $badges && in_array('Expression Engine', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/expressionEngine.png" alt="Expression Engine badge" />
	<? endif; if( $badges && in_array('Sketch', $badges) ) : ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/badges/sketch.png" alt="Sketch badge" />
	<? endif; ?>
</div>