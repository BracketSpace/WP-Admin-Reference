<?php
/**
 * Header top bar
 *
 * @package wpadminref
 */

?>

<div id="wpadminbar" class="">
	<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar">
		<ul id="wp-admin-bar-root-default" class="ab-top-menu">
			<li id="wp-admin-bar-menu-toggle"><a class="ab-item" href="javascript:void()" aria-expanded="false"><span class="ab-icon"></span><span class="screen-reader-text">Menu</span></a></li>
			<li id="wp-admin-bar-wp-logo" class="menupop">
				<a class="ab-item" aria-haspopup="true" href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank">
					<?php get_template_part( 'template-parts/header/logo' ); ?>
					<span class="screen-reader-text">BracketSpace</span>
				</a>
				<div class="ab-sub-wrapper">
					<ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
						<li id="wp-admin-bar-about"><a class="ab-item" href="https://bracketspace.com">BracketSpace</a></li>
					</ul>
					<ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
						<li id="wp-admin-bar-wporg"><a class="ab-item" href="https://wordpress.org/">WordPress.org</a></li>
						<li id="wp-admin-bar-documentation"><a class="ab-item" href="https://codex.wordpress.org/">Documentation</a></li>
						<li id="wp-admin-bar-support-forums"><a class="ab-item" href="https://developer.wordpress.org/">Developer Resources</a></li>
					</ul>
				</div>
			</li>
			<li id="wp-admin-bar-site-name" class="menupop">
				<a class="ab-item" aria-haspopup="true" href="https://wpadmin.bracketspace.com/">WP-Admin reference</a>
			</li>
		</ul>
		<ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
			<li id="wp-admin-bar-my-account" class="menupop with-avatar">
				<a class="ab-item" aria-haspopup="true" href="javascript:void()">Howdy,  <span class="display-name">developer</span><img alt="" src="https://secure.gravatar.com/avatar/743a121d82b6e389daaaf5aef6f11607?s=26&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/743a121d82b6e389daaaf5aef6f11607?s=52&amp;d=mm&amp;r=g 2x" class="avatar avatar-26 photo" height="26" width="26"></a>
			</li>
		</ul>
		<ul class="share-buttons-top">
			<div class="share-buttons">
				<div class="share-button">
					<div class="fb-share-button" data-href="https://wpadminref.bracketspace.com/" data-layout="button" data-size="small">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwpadminref.bracketspace.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
							Share
						</a>
					</div>
				</div>
				<div class="share-button">
					<a class="twitter-share-button small"
						href="https://twitter.com/intent/tweet?text=Look%20what%20i%20found!%20Complete%20wp-admin%20referece%3A%20https%3A%2F%2Fwpadminref.bracketspace.com%2F"
						data-size="small"
						data-text="Share on Twitter"
						data-url="https://wpadminref.bracketspace.com/"
						data-hashtags="wp-admin,WordPress"
						data-via="twitterdev"
						data-related="twitterapi,twitter">
						Tweet
					</a>
				</div>
			</div>
		</ul>
	</div>
</div>
