<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<title><?php bloginfo( 'title' ); ?></title>
	<style type="text/css">
		#wpadminbar a img.wp-admin-icon {
		    height: 20px;
		    width: 20px;
		    margin: 6px 0;
		}
		#wpadminbar .menupop:hover .ab-sub-wrapper{
			display: block;
		}
	</style>
</head>
<body class="wp-admin wp-core-ui js index-php auto-fold admin-bar branch-5-2 version-5-2-1 admin-color-fresh locale-pl-pl customize-support svg sticky-menu">
	<div id="wpwrap">
		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	    <div id="wpcontent">
	    	<?php get_template_part( 'template-parts/header/header-top' ); ?>
	        <div id="wpbody" role="main">