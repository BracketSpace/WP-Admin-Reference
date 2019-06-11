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
	<?php wp_head(); ?>
</head>
<body class="wp-admin wp-core-ui js index-php auto-fold admin-bar customize-support svg">
	<div id="wpwrap">
	<?php get_template_part( 'template-parts/header/navigation' ); ?>
		<div id="wpcontent">
		<?php get_template_part( 'template-parts/header/header-top' ); ?>
			<div id="wpbody" role="main">
