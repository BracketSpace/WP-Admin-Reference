<?php
/**
 * Theme header
 *
 * @package wpadminref
 */

?>

<!DOCTYPE html>
<html class="wp-toolbar" <?php language_attributes(); ?>  >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="WP Admin Reference by BracketSpace.com" />
	<meta property="og:description" content="This is a place where you can quickly reference elements from wp-admin. You can use them in your own plugins." />
	<meta property="og:image" content="<?php echo esc_url( get_theme_file_uri( '/assets/images/sm.png' ) ); ?>" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/apple-icon-57x57.png' ) ); ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/apple-icon-60x60.png' ) ); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/apple-icon-72x72.png' ) ); ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/apple-icon-76x76.png' ) ); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/apple-icon-114x114.png' ) ); ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/apple-icon-120x120.png' ) ); ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/apple-icon-144x144.png' ) ); ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/apple-icon-152x152.png' ) ); ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/apple-icon-180x180.png/' ) ); ?>">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/android-icon-192x192.png' ) ); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/favicon-32x32.png' ) ); ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/favicon-96x96.png' ) ); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/favicon-16x16.png' ) ); ?>">
	<link rel="manifest" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/' ) ); ?>/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicons/ms-icon-144x144.png' ) ); ?>">
	<meta name="theme-color" content="#23282d">
	<script type="text/javascript">var ajaxurl = <?php echo wp_json_encode( admin_url( 'admin-ajax.php', 'relative' ) ); ?></script>
	<?php wp_head(); ?>
</head>
<body class="wp-admin wp-core-ui js index-php auto-fold admin-bar customize-support svg sticky-menu">
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="wpwrap">
	<?php get_template_part( 'template-parts/header/navigation' ); ?>
		<div id="wpcontent">
		<?php get_template_part( 'template-parts/header/header-top' ); ?>
			<div id="wpbody" role="main">
