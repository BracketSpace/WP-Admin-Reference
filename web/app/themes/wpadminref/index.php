<?php
/**
 * Theme index page
 *
 * @package Wpadminref
 */

get_header(); ?>
    <div id="wpbody-content" style="overflow: hidden;">
        <div class="wrap">
        <?php get_template_part('single'); ?>
        </div>
    </div>
<?php get_footer(); ?>
