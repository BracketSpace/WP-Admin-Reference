<?php
/**
 * Theme index page
 *
 * @package wpadminref
 */

?>

<?php get_header(); ?>
	<div id="wpbody-content" style="overflow: hidden;">
		<?php
			 wp_nonce_field('closedpostboxes', 'closedpostboxesnonce', false ); 
			 wp_nonce_field('meta-box-order', 'meta-box-order-nonce', false );
		?>
		<div class="wrap">
		<?php get_template_part( 'template-parts/sections/content' ); ?>
		</div>
	</div>
<?php get_footer(); ?>
