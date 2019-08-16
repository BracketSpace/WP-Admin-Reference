<?php
/**
 * Section about view
 *
 * @package wpadminref
 */

?>

<section class="section section-about" id="about">
	<div class="section-content large-text d-flex flex-column align-items-center justify-content-center h-100 text-center">
		<h1 class="big-title">WP-Admin reference</h1>
		<p>
			This is a place where you can quickly reference elements from wp-admin. You can use them in your own plugins.<br/>
			This is an actual WordPress Dashboard loaded, all the styles and scripts are already available on the admin side, you can just grab the HTML and you are all set.
		</p>
		<p class="text-light">WordPress version: <?php echo esc_html( get_bloginfo( 'version' ) ); ?></p>
	</div>
</section>
