<?php
/**
 * Theme funtions
 *
 * @package wpadminref
 */

add_theme_support( 'title-tag' );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'admin-bar' );
	wp_enqueue_style( 'common' );
	wp_enqueue_style( 'forms' );
	wp_enqueue_style( 'admin-menu' );
	wp_enqueue_style( 'dashboard' );
	wp_enqueue_style( 'list-tables' );
	wp_enqueue_style( 'edit' );
	wp_enqueue_style( 'revisions' );
	wp_enqueue_style( 'media' );
	wp_enqueue_style( 'themes' );
	wp_enqueue_style( 'about' );
	wp_enqueue_style( 'nav-menus' );
	wp_enqueue_style( 'wp-pointer' );
	wp_enqueue_style( 'widgets' );
	wp_enqueue_style( 'wpadminref-styles', get_theme_file_uri( '/assets/styles/main.css' ), array(), filemtime( get_theme_file_uri( '/assets/styles/main.css' ) ) );
} );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_script( 'jquery-core' );
	wp_enqueue_script( 'jquery-migrate' );
	wp_enqueue_script( 'utils' );
	wp_enqueue_script( 'waypoints', get_theme_file_path( '/assets/scripts/waypoints.js' ), array(), filemtime( get_theme_file_path( '/assets/scripts/waypoints.js' ) ), true );
	wp_enqueue_script( 'wpadminref-script', get_theme_file_path( '/assets/scripts/main.js' ), array(), filemtime( get_theme_file_path( '/assets/scripts/main.js' ) ), true );
} );

add_filter( 'wpadminref/sections', function( $sections ) {

	$sections['about'] = [
		'icon'  => 'info',
		'title' => __( 'About', 'wpadminref' ),
	];

	$sections['metaboxes'] = [
		'icon'  => 'welcome-widgets-menus',
		'title' => __( 'Metaboxes', 'wpadminref' ),
	];

	$sections['buttons'] = [
		'icon'  => 'admin-links',
		'title' => __( 'Buttons', 'wpadminref' ),
	];

	$sections['tables'] = [
		'icon'  => 'editor-table',
		'title' => __( 'Tables', 'wpadminref' ),
	];

	$sections['spinners'] = [
		'icon'  => 'update-alt',
		'title' => __( 'Spinners', 'wpadminref' ),
	];

	$sections['dashicons'] = [
		'icon'  => 'screenoptions',
		'title' => __( 'Dashicons', 'wpadminref' ),
	];

	$sections['dashicons'] = [
		'icon'  => 'nametag',
		'title' => __( 'Credits', 'wpadminref' ),
	];

	return $sections;

} );

