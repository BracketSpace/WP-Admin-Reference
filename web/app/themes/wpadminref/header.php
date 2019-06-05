<!DOCTYPE html>
<html class="wp-toolbar" <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<title>WP Admin  Reference</title>
	<style type="text/css">
		#wpadminbar a img.wp-admin-icon {
		    height: 20px;
		    width: 20px;
		    margin: 6px 0;
		}
	</style>
</head>
<body class="wp-admin wp-core-ui js index-php auto-fold admin-bar branch-5-2 version-5-2-1 admin-color-fresh locale-pl-pl customize-support svg sticky-menu">
	<div id="wpwrap">

	    <div id="adminmenumain" role="navigation" aria-label="Główne menu">

	        <div id="adminmenuback"></div>
	        <div id="adminmenuwrap">
	            <ul id="adminmenu">

	                <li class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" id="menu-dashboard">
	                    <a href="index.php" class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" aria-haspopup="false">
	                        <div class="wp-menu-arrow">
	                            <div></div>
	                        </div>
	                        <div class="wp-menu-image dashicons-before dashicons-info">
	                            <br>
	                        </div>
	                        <div class="wp-menu-name">About</div>
	                    </a>
	                </li>
	                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" id="menu-posts">
	                    <a href="edit.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" aria-haspopup="true">
	                        <div class="wp-menu-arrow">
	                            <div></div>
	                        </div>
	                        <div class="wp-menu-image dashicons-before dashicons-welcome-widgets-menus">
	                            <br>
	                        </div>
	                        <div class="wp-menu-name">Metabox</div>
	                    </a>
	                </li>
	                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" id="menu-media">
	                    <a href="upload.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" aria-haspopup="true">
	                        <div class="wp-menu-arrow">
	                            <div></div>
	                        </div>
	                        <div class="wp-menu-image dashicons-before dashicons-admin-links">
	                            <br>
	                        </div>
	                        <div class="wp-menu-name">Buttons</div>
	                    </a>
	                </li>
	                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-links" id="menu-links">
	                    <a href="link-manager.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-links" aria-haspopup="true">
	                        <div class="wp-menu-arrow">
	                            <div></div>
	                        </div>
	                        <div class="wp-menu-image dashicons-before dashicons-editor-table">
	                            <br>
	                        </div>
	                        <div class="wp-menu-name">Tables</div>
	                    </a>
	                </li>
	                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
	                    <a href="edit.php?post_type=page" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
	                        <div class="wp-menu-arrow">
	                            <div></div>
	                        </div>
	                        <div class="wp-menu-image dashicons-before dashicons-update-alt">
	                            <br>
	                        </div>
	                        <div class="wp-menu-name">Spinners</div>
	                    </a>
	                </li>
	                <li class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last" id="menu-comments">
	                    <a href="edit-comments.php" class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last">
	                        <div class="wp-menu-arrow">
	                            <div></div>
	                        </div>
	                        <div class="wp-menu-image dashicons-before dashicons-screenoptions">
	                            <br>
	                        </div>
	                        <div class="wp-menu-name">Dashicons
	                        </div>
	                    </a>
	                </li>
	                <li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true">
	                    <div class="separator"></div>
	                </li>
	                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" id="menu-appearance">
	                    <a href="themes.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" aria-haspopup="true">
	                        <div class="wp-menu-arrow">
	                            <div></div>
	                        </div>
	                        <div class="wp-menu-image dashicons-before dashicons-nametag">
	                            <br>
	                        </div>
	                        <div class="wp-menu-name">Credits</div>
	                    </a>
	                </li>
					<li id="collapse-menu" class="hide-if-no-js">
						<button type="button" id="collapse-button" aria-label="Collapse Main menu" aria-expanded="true">
							<span class="collapse-button-icon" aria-hidden="true"></span><span class="collapse-button-label">Collapse menu</span>
						</button>
					</li>
	            </ul>
	        </div>
	    </div>

	    <div id="wpcontent">

	        <div id="wpadminbar" class="">
	            <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Pasek narzędzi">
	                <ul id="wp-admin-bar-root-default" class="ab-top-menu">
	                    <li id="wp-admin-bar-menu-toggle"><a class="ab-item" href="#" aria-expanded="false"><span class="ab-icon"></span><span class="screen-reader-text">Menu</span></a></li>
	                    <li id="wp-admin-bar-wp-logo" class="menupop">
	                    	<a class="ab-item" aria-haspopup="true" href="https://bracketspace.com/" target="_blank">
	                    		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bracketspace-logo.svg" class="wp-admin-icon" alt="WP-Admin reference">
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
	                    	<a class="ab-item" aria-haspopup="true" href="#">Howdy,  <span class="display-name">developer</span><img alt="" src="https://secure.gravatar.com/avatar/743a121d82b6e389daaaf5aef6f11607?s=26&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/743a121d82b6e389daaaf5aef6f11607?s=52&amp;d=mm&amp;r=g 2x" class="avatar avatar-26 photo" height="26" width="26"></a>
	                    </li>
	                </ul>
	            </div>
	        </div>

	        <div id="wpbody" role="main">