<?php
/**
 * Navigation
 *
 * @package wpadminref
 */

?>

<div id="adminmenumain" role="navigation">

	<div id="adminmenuback"></div>
	<div id="adminmenuwrap">
		<ul id="adminmenu">
	<?php
	$sections = apply_filters( 'wpadminref/sections', [] );
	foreach ( $sections as $section_slug => $section ) {
		?>
			<li class="menu-top menu-top-first menu-icon-<?php echo esc_attr( $section_slug ); ?>" id="menu-<?php echo esc_attr( $section_slug ); ?>">
				<a href="#<?php echo esc_attr( $section_slug ); ?>" class="wp-first-item menu-top menu-icon-dashboard" aria-haspopup="false">
					<div class="wp-menu-arrow">
						<div></div>
					</div>
					<div class="wp-menu-image dashicons-before dashicons-<?php echo esc_attr( $section['icon'] ); ?>">
						<br>
					</div>
					<div class="wp-menu-name">
						<?php echo esc_html( $section['title'] ); ?>
						<?php if ( $section['counter'] ) : ?>
						<span class="update-plugins count-<?php echo esc_html( $section['counter'] ); ?>">
							<span class="plugin-count"><?php echo esc_html( $section['counter'] ); ?></span>
						</span>
						<?php endif; ?>
					</div>
				</a>
			</li>
		<?php
	}
	?>
			<li id="collapse-menu" class="hide-if-no-js">
				<button type="button" id="collapse-button" aria-label="Collapse Main menu" aria-expanded="true">
					<span class="collapse-button-icon" aria-hidden="true"></span><span class="collapse-button-label">Collapse menu</span>
				</button>
			</li>
		</ul>
	</div>
</div>
