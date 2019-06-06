<?php

add_action('wp_enqueue_scripts', 'wp_admin_styles');

function wp_admin_styles(){
    wp_enqueue_style('dashicons');
	wp_enqueue_style('admin-bar');
	wp_enqueue_style('common');
	wp_enqueue_style('forms');
	wp_enqueue_style('admin-menu');
	wp_enqueue_style('dashboard');
	wp_enqueue_style('list-tables');
	wp_enqueue_style('edit');
	wp_enqueue_style('revisions');
	wp_enqueue_style('media');
	wp_enqueue_style('themes');
	wp_enqueue_style('about');
	wp_enqueue_style('nav-menus');
	wp_enqueue_style('wp-pointer');
	wp_enqueue_style('widgets');
	wp_enqueue_style('wpadminref-styles', get_template_directory_uri() . '/assets/styles/main.css' );
}

add_action('wp_enqueue_scripts', 'wp_admin_scripts');
function wp_admin_scripts(){
	wp_enqueue_script('jquery-core');
	wp_enqueue_script('jquery-migrate');
	wp_enqueue_script('utils');
}
