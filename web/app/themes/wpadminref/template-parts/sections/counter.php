<?php
/**
 * Section counter view
 *
 * @package wpadminref
 */

?>

<?php
/**
 * Section metaboxes view
 *
 * @package wpadminref
 */

?>

<section class="section section-metaboxes section-with-columns" id="counter">
	<header class="section-header">
		<h2>Counter</h2>
		<hr/>
	</header>
	<div class="section-content">
		<div class="block">
			<p>Counter in HTML</p>
			<script type="text/plain" class="language-markup">
				<span class="update-plugins count-2">
					<span class="plugin-count">2</span>
				</span>
			</script>
		</div>

		<div class="block">
			<p>Counter for CPT</p>
			<script type="text/plain" class="language-php">
				$number    = 2; // Query here.
				$post_type = get_post_type_object( 'cpt-slug' );

				if ( $number > 0 ) {
					$post_type->labels->menu_name .= ' <span class="update-plugins"><span class="update-count">' . $number . '</span></span>';
					$post_type->labels->all_items .= ' <span class="update-plugins"><span class="update-count">' . $number . '</span></span>';
				}
			</script>
		</div>
	</div>
</section>

