<?php
/**
 * Sections loop
 *
 * @package wpadminref
 */

$sections = apply_filters( 'wpadminref/sections', [] );
foreach ( $sections as $section_slug => $section ) {
	get_template_part( 'template-parts/sections/' . $section_slug );
}
