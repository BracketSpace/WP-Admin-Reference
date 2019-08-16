<?php
/**
 * Theme funtions
 *
 * @package wpadminref
 */

add_theme_support( 'title-tag' );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'wp-admin' );
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
	wp_enqueue_style( 'colors' );
	wp_enqueue_style( 'prism-okaidia', get_theme_file_uri( '/node_modules/prismjs/themes/prism-okaidia.css' ), array(), '1.0.0', all );
	wp_enqueue_style( 'prism-toolbar', get_theme_file_uri( '/node_modules/prismjs/plugins/toolbar/prism-toolbar.css' ), array(), '1.0.0', all );
	wp_enqueue_style( 'prism-line-numbers', get_theme_file_uri( '/node_modules/prismjs/plugins/line-numbers/prism-line-numbers.css' ), array(), '1.0.0', all );
	wp_enqueue_style( 'wpadminref-styles', get_theme_file_uri( '/assets/styles/main.css' ), array(), filemtime( get_theme_file_uri( '/assets/styles/main.css' ) ), all );
} );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script( 'jquery-core' );
	wp_enqueue_script( 'jquery-migrate' );
	wp_enqueue_script( 'jquery-query' );
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'ui-widget' );
	wp_enqueue_script( 'jquery-ui-mouse' );
	wp_enqueue_script( 'jquery-ui-resizable' );
	wp_enqueue_script( 'jquery-ui-draggable' );
	wp_enqueue_script( 'jquery-ui-sortable' );
	wp_enqueue_script( 'jquery-ui-button' );
	wp_enqueue_script( 'jquery-ui-position' );
	wp_enqueue_script( 'jquery-ui-dialog' );
	wp_enqueue_script( 'jquery-ui-menu' );
	wp_enqueue_script( 'jquery-ui-autocomplete' );
	wp_enqueue_script( 'postbox', admin_url( 'js/postbox.js' ), [ 'jquery-ui-sortable' ], true, true );
	wp_enqueue_script( 'underscore', admin_url( 'js/underscore.js' ), [ 'jquery-ui-sortable' ], true, true );
	wp_enqueue_script( 'utils' );
	wp_enqueue_script( 'hoverIntent' );
	wp_enqueue_script( 'common' );
	wp_enqueue_script( 'jquery-color' );
	wp_enqueue_script( 'admin-bar' );
	wp_enqueue_script( 'wp-ajax-response' );
	wp_enqueue_script( 'wp-lists' );
	wp_enqueue_script( 'quicktags' );
	wp_enqueue_script( 'admin-comments' );
	wp_enqueue_script( 'quicktags' );
	wp_enqueue_script( 'jquery-query' );
	wp_enqueue_script( 'jquery-color' );
	wp_enqueue_script( 'dashboard' );
	wp_enqueue_script( 'thickbox' );
	wp_enqueue_script( 'shortc' );
	wp_enqueue_script( 'waypoints', get_theme_file_uri( '/node_modules/waypoints/lib/jquery.waypoints.min.js' ), array( 'jquery' ), '4.0.1', true );
	wp_enqueue_script( 'clipboard', get_theme_file_uri( '/node_modules/clipboard/dist/clipboard.min.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/clipboard/dist/clipboard.min.js' ) ), true );
	wp_enqueue_script( 'prismjs', get_theme_file_uri( '/node_modules/prismjs/prism.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/prism.js' ) ), true );
	wp_enqueue_script( 'prism-toolbar', get_theme_file_uri( '/node_modules/prismjs/plugins/toolbar/prism-toolbar.min.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/plugins/toolbar/prism-toolbar.min.js' ) ), true );
	wp_enqueue_script( 'prismjs-line-numbers', get_theme_file_uri( '/node_modules/prismjs/plugins/line-numbers/prism-line-numbers.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/plugins/line-numbers/prism-line-numbers.js' ) ), true );
	wp_enqueue_script( 'prism-normalize-whitespace', get_theme_file_uri( '/node_modules/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.js' ) ), true );
	wp_enqueue_script( 'prism-copy-to-clipboard', get_theme_file_uri( '/node_modules/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js' ) ), true );
	wp_enqueue_script( 'sectionMenu', get_theme_file_uri( '/assets/scripts/functions/sectionMenu.js' ), array(), filemtime( get_theme_file_uri( '/assets/scripts/functions/sectionMenu.js' ) ), true );
	wp_enqueue_script( 'wpadminref-script', get_theme_file_uri( '/assets/scripts/main.js' ), array(), filemtime( get_theme_file_uri( '/assets/scripts/main.js' ) ), true );
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

	$sections['post_list'] = [
		'icon'  => 'editor-justify',
		'title' => __( 'Post List', 'wpadminref' ),
	];
	$sections['spinners']  = [
		'icon'  => 'update-alt',
		'title' => __( 'Spinners', 'wpadminref' ),
	];

	$sections['dashicons'] = [
		'icon'  => 'smiley',
		'title' => __( 'Dashicons', 'wpadminref' ),
	];

	$sections['credits'] = [
		'icon'  => 'nametag',
		'title' => __( 'Credits', 'wpadminref' ),
	];

	return $sections;

} );

function get_current_url() {
	$active_id = get_queried_object_id(); 
	$current_url = get_permalink( $active_id );
	return $current_url;
}