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
	wp_enqueue_style( 'prism-unescaped-markup', get_theme_file_uri( '/node_modules/prismjs/plugins/unescaped-markup/prism-unescaped-markup.css' ), array(), '1.0.0', all );
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
	wp_enqueue_script( 'menuspy', get_theme_file_uri( '/node_modules/menuspy/dist/menuspy.min.js' ), array( 'jquery' ), '1.3.0', true );
	wp_enqueue_script( 'clipboard', get_theme_file_uri( '/node_modules/clipboard/dist/clipboard.min.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/clipboard/dist/clipboard.min.js' ) ), true );
	wp_enqueue_script( 'prismjs', get_theme_file_uri( '/node_modules/prismjs/prism.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/prism.js' ) ), true );
	wp_enqueue_script( 'prismjs-components', get_theme_file_uri( '/node_modules/prismjs/components.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/components.js' ) ), true );
	wp_enqueue_script( 'prism-markup-templating', get_theme_file_uri( '/node_modules/prismjs/components/prism-markup-templating.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/components/prism-markup-templating.js' ) ), true );
	wp_enqueue_script( 'prismjs-components-php', get_theme_file_uri( '/node_modules/prismjs/components/prism-php.min.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/components/prism-php.min.js' ) ), true );
	wp_enqueue_script( 'prism-toolbar', get_theme_file_uri( '/node_modules/prismjs/plugins/toolbar/prism-toolbar.min.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/plugins/toolbar/prism-toolbar.min.js' ) ), true );
	wp_enqueue_script( 'prismjs-line-numbers', get_theme_file_uri( '/node_modules/prismjs/plugins/line-numbers/prism-line-numbers.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/plugins/line-numbers/prism-line-numbers.js' ) ), true );
	wp_enqueue_script( 'prism-normalize-whitespace', get_theme_file_uri( '/node_modules/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.js' ) ), true );
	wp_enqueue_script( 'prism-copy-to-clipboard', get_theme_file_uri( '/node_modules/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js' ) ), true );
	wp_enqueue_script( 'prism-unescaped-markup', get_theme_file_uri( '/node_modules/prismjs/plugins/unescaped-markup/prism-unescaped-markup.min.js' ), array(), filemtime( get_theme_file_uri( '/node_modules/prismjs/plugins/unescaped-markup/prism-unescaped-markup.min.js' ) ), true );
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

	$sections['spinners'] = [
		'icon'  => 'update-alt',
		'title' => __( 'Spinners', 'wpadminref' ),
	];

	$sections['notices'] = [
		'icon'  => 'warning',
		'title' => __( 'Notices', 'wpadminref' ),
	];

	$sections['counter'] = [
		'icon'    => 'star-filled',
		'title'   => __( 'Counter', 'wpadminref' ),
		'counter' => '2',
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

/** Register Custom Post Type */
function custom_post_type() {
	$labels = array(
		'name'                  => _x( 'Counter', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Counter', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Counters', 'text_domain' ),
		'name_admin_bar'        => __( 'Counter', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);

	$args = array(
		'label'               => __( 'Counter', 'text_domain' ),
		'description'         => __( 'Custom post type', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'counter', $args );

}
add_action( 'init', 'custom_post_type', 0 );
