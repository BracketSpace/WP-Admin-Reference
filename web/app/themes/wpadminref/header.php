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
	<meta property="og:image" content="<?php echo esc_url( get_theme_file_uri( '/assets/images/bracketspace-logo.png' ) ); ?>" />
	<link rel="shortcut icon" href="<?php get_theme_file_uri( '/favicon.ico' ); ?>/favicon.ico" />
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
