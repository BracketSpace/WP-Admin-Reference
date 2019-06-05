<!DOCTYPE html>
<html class="wp-toolbar">
<head>
	<title>WP Admin  Reference</title>

	<link rel="stylesheet" href="../../wp/wp-admin/load-styles.php?c=0&dir=ltr&load%5B%5D=dashicons,admin-bar,common,forms,admin-menu,dashboard,list-tables,edit,revisions,media,themes,about,nav-menus,wp-pointer,widgets&load%5B%5D=,site-icon,l10n,buttons,wp-auth-check">
	<style type="text/css">
		#wpadminbar a img.wp-admin-icon {
		    height: 21px;
		    width: 21px;
		    margin: 6px 0;
		    display: block;
		}
	</style>

</head>
<body class="wp-admin wp-core-ui js index-php auto-fold admin-bar branch-5-2 version-5-2-1 admin-color-fresh locale-pl-pl customize-support svg sticky-menu">
	<div id="wpwrap">

	    <div id="adminmenumain" role="navigation" aria-label="Główne menu">
	        <a href="#wpbody-content" class="screen-reader-shortcut">Przejdź do głownej zawartości</a>
	        <a href="#wp-toolbar" class="screen-reader-shortcut">Przejdź do paska narzędzi</a>
	        <div id="adminmenuback"></div>
	        <div id="adminmenuwrap">
	            <ul id="adminmenu">

	                <li class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" id="menu-dashboard">
	                    <a href="index.php" class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" aria-haspopup="false">
	                        <div class="wp-menu-arrow">
	                            <div></div>
	                        </div>
	                        <div class="wp-menu-image dashicons-before dashicons-dashboard">
	                            <br>
	                        </div>
	                        <div class="wp-menu-name">About</div>
	                    </a>
	                </li>
	                <li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true">
	                    <div class="separator"></div>
	                </li>
	                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" id="menu-posts">
	                    <a href="edit.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" aria-haspopup="true">
	                        <div class="wp-menu-arrow">
	                            <div></div>
	                        </div>
	                        <div class="wp-menu-image dashicons-before dashicons-admin-post">
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
	                        <div class="wp-menu-image dashicons-before dashicons-admin-media">
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
	                        <div class="wp-menu-image dashicons-before dashicons-admin-links">
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
	                        <div class="wp-menu-image dashicons-before dashicons-admin-page">
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
	                        <div class="wp-menu-image dashicons-before dashicons-admin-comments">
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
	                        <div class="wp-menu-image dashicons-before dashicons-admin-appearance">
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
	                    	<a class="ab-item" aria-haspopup="true" href="https://wpadmin.bracketspace.com/wp-admin/about.php">
	                    		<img src="<?php echo get_template_directory_uri(); ?>/resources/assets/images/bracketspace-logo.svg" class="wp-admin-icon" alt="WP-Admin reference">
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
	                    	<a class="ab-item" aria-haspopup="true" href="https://wpadmin.bracketspace.com/wp-admin/profile.php">Howdy,  <span class="display-name">developer</span><img alt="" src="https://secure.gravatar.com/avatar/743a121d82b6e389daaaf5aef6f11607?s=26&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/743a121d82b6e389daaaf5aef6f11607?s=52&amp;d=mm&amp;r=g 2x" class="avatar avatar-26 photo" height="26" width="26"></a>
	                    </li>
	                </ul>
	            </div>
	        </div>

	        <div id="wpbody" role="main">

				<div id="wpbody-content" style="overflow: hidden;">
				    <div id="screen-meta" class="metabox-prefs">

				        <div id="contextual-help-wrap" class="hidden" tabindex="-1" aria-label="Contextual Help Tab">
				            <div id="contextual-help-back"></div>
				            <div id="contextual-help-columns">
				                <div class="contextual-help-tabs">
				                    <ul>

				                        <li id="tab-link-overview" class="active">
				                            <a href="#tab-panel-overview" aria-controls="tab-panel-overview">
													Overview								</a>
				                        </li>

				                        <li id="tab-link-help-navigation">
				                            <a href="#tab-panel-help-navigation" aria-controls="tab-panel-help-navigation">
													Navigation								</a>
				                        </li>

				                        <li id="tab-link-help-layout">
				                            <a href="#tab-panel-help-layout" aria-controls="tab-panel-help-layout">
													Layout								</a>
				                        </li>

				                        <li id="tab-link-help-content">
				                            <a href="#tab-panel-help-content" aria-controls="tab-panel-help-content">
													Content								</a>
				                        </li>
				                    </ul>
				                </div>

				                <div class="contextual-help-sidebar">
				                    <p><strong>For more information:</strong></p>
				                    <p><a href="https://codex.wordpress.org/Dashboard_Screen">Documentation on Dashboard</a></p>
				                    <p><a href="https://wordpress.org/support/">Support</a></p>
				                </div>

				                <div class="contextual-help-tabs-wrap">

				                    <div id="tab-panel-overview" class="help-tab-content active">
				                        <p>Welcome to your WordPress Dashboard! This is the screen you will see when you log in to your site, and gives you access to all the site management features of WordPress. You can get help for any screen by clicking the Help tab above the screen title.</p>
				                    </div>

				                    <div id="tab-panel-help-navigation" class="help-tab-content">
				                        <p>The left-hand navigation menu provides links to all of the WordPress administration screens, with submenu items displayed on hover. You can minimize this menu to a narrow icon strip by clicking on the Collapse Menu arrow at the bottom.</p>
				                        <p>Links in the Toolbar at the top of the screen connect your dashboard and the front end of your site, and provide access to your profile and helpful WordPress information.</p>
				                    </div>

				                    <div id="tab-panel-help-layout" class="help-tab-content">
				                        <p>You can use the following controls to arrange your Dashboard screen to suit your workflow. This is true on most other administration screens as well.</p>
				                        <p><strong>Screen Options</strong> — Use the Screen Options tab to choose which Dashboard boxes to show.</p>
				                        <p><strong>Drag and Drop</strong> — To rearrange the boxes, drag and drop by clicking on the title bar of the selected box and releasing when you see a gray dotted-line rectangle appear in the location you want to place the box.</p>
				                        <p><strong>Box Controls</strong> — Click the title bar of the box to expand or collapse it. Some boxes added by plugins may have configurable content, and will show a “Configure” link in the title bar if you hover over it.</p>
				                    </div>

				                    <div id="tab-panel-help-content" class="help-tab-content">
				                        <p>The boxes on your Dashboard screen are:</p>
				                        <p><strong>At A Glance</strong> — Displays a summary of the content on your site and identifies which theme and version of WordPress you are using.</p>
				                        <p><strong>Activity</strong> — Shows the upcoming scheduled posts, recently published posts, and the most recent comments on your posts and allows you to moderate them.</p>
				                        <p><strong>Quick Draft</strong> — Allows you to create a new post and save it as a draft. Also displays links to the 3 most recent draft posts you've started.</p>
				                        <p><strong>WordPress Events and News</strong> — Upcoming events near you as well as the latest news from the official WordPress project and the <a href="https://planet.wordpress.org/">WordPress Planet</a>.</p>
				                        <p><strong>Welcome</strong> — Shows links for some of the most common tasks when setting up a new site.</p>
				                    </div>
				                </div>
				            </div>
				        </div>
				        <div id="screen-options-wrap" class="hidden" tabindex="-1" aria-label="Screen Options Tab">
				            <form id="adv-settings" method="post" wtx-context="11315B5E-4FD2-4F5B-8D92-CD6AF315F523">
				                <fieldset class="metabox-prefs">
				                    <legend>Boxes</legend>
				                    <label for="dashboard_right_now-hide">
				                        <input class="hide-postbox-tog" name="dashboard_right_now-hide" type="checkbox" id="dashboard_right_now-hide" value="dashboard_right_now" checked="checked" wtx-context="1C2F36B4-DD57-49E7-861B-5D0A4DB88130">At a Glance</label>
				                    <label for="dashboard_activity-hide">
				                        <input class="hide-postbox-tog" name="dashboard_activity-hide" type="checkbox" id="dashboard_activity-hide" value="dashboard_activity" checked="checked" wtx-context="F9BF5375-96DD-4122-8B0E-F8EC49632DF2">Activity</label>
				                    <label for="dashboard_quick_press-hide">
				                        <input class="hide-postbox-tog" name="dashboard_quick_press-hide" type="checkbox" id="dashboard_quick_press-hide" value="dashboard_quick_press" checked="checked" wtx-context="2068503B-9148-4858-8DC0-A40A12B2EF71"><span class="hide-if-no-js">Quick Draft</span> <span class="hide-if-js">Your Recent Drafts</span></label>
				                    <label for="dashboard_primary-hide">
				                        <input class="hide-postbox-tog" name="dashboard_primary-hide" type="checkbox" id="dashboard_primary-hide" value="dashboard_primary" checked="checked" wtx-context="5C066944-8977-43E2-8304-953983749EA8">WordPress Events and News</label>
				                    <label for="wp_welcome_panel-hide">
				                        <input type="checkbox" id="wp_welcome_panel-hide" wtx-context="F7B639BF-76DF-4CA4-86BB-9DA0FA192288">Welcome</label>
				                </fieldset>

				                <input type="hidden" id="screenoptionnonce" name="screenoptionnonce" value="c589a420d3" wtx-context="42D93694-3CC6-4071-866D-A38DB29BDC88">
				            </form>
				        </div>
				    </div>
				    <div id="screen-meta-links">
				        <div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle">
				            <button type="button" id="contextual-help-link" class="button show-settings" aria-controls="contextual-help-wrap" aria-expanded="false">Help</button>
				        </div>
				        <div id="screen-options-link-wrap" class="hide-if-no-js screen-meta-toggle">
				            <button type="button" id="show-settings-link" class="button show-settings" aria-controls="screen-options-wrap" aria-expanded="false">Screen Options</button>
				        </div>
				    </div>

				    <div class="wrap">
				        <h1>Dashboard</h1>

				        <div id="welcome-panel" class="welcome-panel hidden">
				            <input type="hidden" id="welcomepanelnonce" name="welcomepanelnonce" value="6a41728e82" wtx-context="47F40DF9-BDD5-474C-8F5F-5F292D46C793"> <a class="welcome-panel-close" href="https://akademiakropki.wpcoder.pl/wp-admin/?welcome=0" aria-label="Dismiss the welcome panel">Dismiss</a>
				            <div class="welcome-panel-content">
				                <h2>Welcome to WordPress!</h2>
				                <p class="about-description">We’ve assembled some links to get you started:</p>
				                <div class="welcome-panel-column-container">
				                    <div class="welcome-panel-column">
				                        <h3>Get Started</h3>
				                        <a class="button button-primary button-hero load-customize hide-if-no-customize" href="https://akademiakropki.wpcoder.pl/wp-admin/customize.php">Customize Your Site</a>
				                        <a class="button button-primary button-hero hide-if-customize" href="https://akademiakropki.wpcoder.pl/wp-admin/themes.php">Customize Your Site</a>
				                        <p class="hide-if-no-customize">or, <a href="https://akademiakropki.wpcoder.pl/wp-admin/customize.php?autofocus[panel]=themes">change your theme completely</a></p>
				                    </div>
				                    <div class="welcome-panel-column">
				                        <h3>Next Steps</h3>
				                        <ul>
				                            <li><a href="https://akademiakropki.wpcoder.pl/wp-admin/post-new.php" class="welcome-icon welcome-write-blog">Write your first blog post</a></li>
				                            <li><a href="https://akademiakropki.wpcoder.pl/wp-admin/post-new.php?post_type=page" class="welcome-icon welcome-add-page">Add an About page</a></li>
				                            <li><a href="https://akademiakropki.wpcoder.pl/wp-admin/customize.php?autofocus[section]=static_front_page" class="welcome-icon welcome-setup-home">Set up your homepage</a></li>
				                            <li><a href="https://akademiakropki.wpcoder.pl/" class="welcome-icon welcome-view-site">View your site</a></li>
				                        </ul>
				                    </div>
				                    <div class="welcome-panel-column welcome-panel-last">
				                        <h3>More Actions</h3>
				                        <ul>
				                            <li>
				                                <div class="welcome-icon welcome-widgets-menus">
				                                    Manage <a href="https://akademiakropki.wpcoder.pl/wp-admin/widgets.php">widgets</a> or <a href="https://akademiakropki.wpcoder.pl/wp-admin/nav-menus.php">menus</a> </div>
				                            </li>
				                            <li><a href="https://akademiakropki.wpcoder.pl/wp-admin/options-discussion.php" class="welcome-icon welcome-comments">Turn comments on or off</a></li>
				                            <li><a href="https://codex.wordpress.org/First_Steps_With_WordPress" class="welcome-icon welcome-learn-more">Learn more about getting started</a></li>
				                        </ul>
				                    </div>
				                </div>
				            </div>
				        </div>

				        <div id="dashboard-widgets-wrap">
				            <div id="dashboard-widgets" class="metabox-holder">
				                <div id="postbox-container-1" class="postbox-container">
				                    <div id="normal-sortables" class="meta-box-sortables ui-sortable">
				                        <div id="dashboard_right_now" class="postbox ">
				                            <button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: At a Glance</span><span class="toggle-indicator" aria-hidden="true"></span></button>
				                            <h2 class="hndle ui-sortable-handle"><span>At a Glance</span></h2>
				                            <div class="inside">
				                                <div class="main">
				                                    <ul>
				                                        <li class="post-count"><a href="edit.php?post_type=post">1 Post</a></li>
				                                        <li class="page-count"><a href="edit.php?post_type=page">1 Page</a></li>
				                                        <li class="comment-count"><a href="edit-comments.php">1 Comment</a></li>
				                                        <li class="comment-mod-count
						 hidden		"><a href="edit-comments.php?comment_status=moderated" class="comments-in-moderation-text">0 Comments in moderation</a></li>
				                                    </ul>
				                                    <p id="wp-version-message"><span id="wp-version">WordPress 5.2.1 running <a href="themes.php">Twenty Nineteen</a> theme.</span></p>
				                                </div>
				                            </div>
				                        </div>
				                        <div id="dashboard_activity" class="postbox ">
				                            <button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Activity</span><span class="toggle-indicator" aria-hidden="true"></span></button>
				                            <h2 class="hndle ui-sortable-handle"><span>Activity</span></h2>
				                            <div class="inside">
				                                <div id="activity-widget">
				                                    <div id="published-posts" class="activity-block">
				                                        <h3>Recently Published</h3>
				                                        <ul>
				                                            <li><span>May 22nd, 12:15 pm</span> <a href="https://akademiakropki.wpcoder.pl/wp-admin/post.php?post=1&amp;action=edit" aria-label="Edit “Hello world!”">Hello world!</a></li>
				                                        </ul>
				                                    </div>
				                                    <div id="latest-comments" class="activity-block">
				                                        <h3>Recent Comments</h3>
				                                        <ul id="the-comment-list" data-wp-lists="list:comment">
				                                            <li id="comment-1" class="comment even thread-even depth-1 comment-item approved">

				                                                <img alt="" src="https://secure.gravatar.com/avatar/?s=50&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/?s=100&amp;d=mm&amp;r=g 2x" class="avatar avatar-50 photo avatar-default" height="50" width="50">

				                                                <div class="dashboard-comment-wrap has-row-actions">
				                                                    <p class="comment-meta">
				                                                        From <cite class="comment-author"><a href="http://wordpress.org/" rel="external nofollow" class="url">Mr WordPress</a></cite> on <a href="https://akademiakropki.wpcoder.pl/?p=1">Hello world!</a> <span class="approve">[Pending]</span> </p>

				                                                    <blockquote>
				                                                        <p>Hi, this is a comment.To delete a comment, just log in and view the post's comments. There you will have…</p>
				                                                    </blockquote>
				                                                    <p class="row-actions"><span class="approve"><a href="comment.php?action=approvecomment&amp;p=1&amp;c=1&amp;_wpnonce=84c148ce9f" data-wp-lists="dim:the-comment-list:comment-1:unapproved:e7e7d3:e7e7d3:new=approved" class="vim-a aria-button-if-js" aria-label="Approve this comment" role="button">Approve</a></span><span class="unapprove"><a href="comment.php?action=unapprovecomment&amp;p=1&amp;c=1&amp;_wpnonce=84c148ce9f" data-wp-lists="dim:the-comment-list:comment-1:unapproved:e7e7d3:e7e7d3:new=unapproved" class="vim-u aria-button-if-js" aria-label="Unapprove this comment" role="button">Unapprove</a></span><span class="reply hide-if-no-js"> | <button type="button" onclick="window.commentReply &amp;&amp; commentReply.open('1','1');" class="vim-r button-link hide-if-no-js" aria-label="Reply to this comment">Reply</button></span><span class="edit"> | <a href="comment.php?action=editcomment&amp;c=1" aria-label="Edit this comment">Edit</a></span><span class="spam"> | <a href="comment.php?action=spamcomment&amp;p=1&amp;c=1&amp;_wpnonce=60c666bac9" data-wp-lists="delete:the-comment-list:comment-1::spam=1" class="vim-s vim-destructive aria-button-if-js" aria-label="Mark this comment as spam" role="button">Spam</a></span><span class="trash"> | <a href="comment.php?action=trashcomment&amp;p=1&amp;c=1&amp;_wpnonce=60c666bac9" data-wp-lists="delete:the-comment-list:comment-1::trash=1" class="delete vim-d vim-destructive aria-button-if-js" aria-label="Move this comment to the Trash" role="button">Trash</a></span><span class="view"> | <a class="comment-link" href="https://akademiakropki.wpcoder.pl/?p=1#comment-1" aria-label="View this comment">View</a></span></p>
				                                                </div>
				                                            </li>
				                                        </ul>
				                                        <h3 class="screen-reader-text">View more comments</h3>
				                                        <ul class="subsubsub">
				                                            <li class="all"><a href="https://akademiakropki.wpcoder.pl/wp-admin/edit-comments.php?comment_status=all">All <span class="count">(<span class="all-count">1</span>)</span></a> |</li>
				                                            <li class="mine"><a href="https://akademiakropki.wpcoder.pl/wp-admin/edit-comments.php?comment_status=mine&amp;user_id=1">Mine <span class="count">(<span class="mine-count">0</span>)</span></a> |</li>
				                                            <li class="moderated"><a href="https://akademiakropki.wpcoder.pl/wp-admin/edit-comments.php?comment_status=moderated">Pending <span class="count">(<span class="pending-count">0</span>)</span></a> |</li>
				                                            <li class="approved"><a href="https://akademiakropki.wpcoder.pl/wp-admin/edit-comments.php?comment_status=approved">Approved <span class="count">(<span class="approved-count">1</span>)</span></a> |</li>
				                                            <li class="spam"><a href="https://akademiakropki.wpcoder.pl/wp-admin/edit-comments.php?comment_status=spam">Spam <span class="count">(<span class="spam-count">0</span>)</span></a> |</li>
				                                            <li class="trash"><a href="https://akademiakropki.wpcoder.pl/wp-admin/edit-comments.php?comment_status=trash">Trash <span class="count">(<span class="trash-count">0</span>)</span></a></li>
				                                        </ul>
				                                        <form method="get" wtx-context="66FE8347-3645-45B7-84AB-40319F560E74">
				                                            <div id="com-reply" style="display:none;">
				                                                <div id="replyrow" style="display:none;">
				                                                    <fieldset class="comment-reply">
				                                                        <legend>
				                                                            <span class="hidden" id="editlegend">Edit Comment</span>
				                                                            <span class="hidden" id="replyhead">Reply to Comment</span>
				                                                            <span class="hidden" id="addhead">Add new Comment</span>
				                                                        </legend>

				                                                        <div id="replycontainer">
				                                                            <label for="replycontent" class="screen-reader-text">Comment</label>
				                                                            <div id="wp-replycontent-wrap" class="wp-core-ui wp-editor-wrap html-active">
				                                                                <link rel="stylesheet" id="editor-buttons-css" href="https://akademiakropki.wpcoder.pl/wp-includes/css/editor.min.css?ver=5.2.1" type="text/css" media="all">
				                                                                <div id="wp-replycontent-editor-container" class="wp-editor-container">
				                                                                    <div id="qt_replycontent_toolbar" class="quicktags-toolbar">
				                                                                        <input type="button" id="qt_replycontent_strong" class="ed_button button button-small" aria-label="Bold" value="b" wtx-context="701BA492-7DC8-4F52-8D52-F09099CD48EF">
				                                                                        <input type="button" id="qt_replycontent_em" class="ed_button button button-small" aria-label="Italic" value="i" wtx-context="AB4F8A97-F224-408A-83D6-7D927EBCD8EE">
				                                                                        <input type="button" id="qt_replycontent_link" class="ed_button button button-small" aria-label="Insert link" value="link" wtx-context="83393E48-2891-4105-8525-1D513C94C228">
				                                                                        <input type="button" id="qt_replycontent_block" class="ed_button button button-small" aria-label="Blockquote" value="b-quote" wtx-context="47DA9DCA-7683-4240-83E3-EE7D7D579BD7">
				                                                                        <input type="button" id="qt_replycontent_del" class="ed_button button button-small" aria-label="Deleted text (strikethrough)" value="del" wtx-context="996FC128-1C2B-47B5-B781-57127842E374">
				                                                                        <input type="button" id="qt_replycontent_ins" class="ed_button button button-small" aria-label="Inserted text" value="ins" wtx-context="7A585C63-BF88-45A3-B54B-381911E556D0">
				                                                                        <input type="button" id="qt_replycontent_img" class="ed_button button button-small" aria-label="Insert image" value="img" wtx-context="21A07F25-BE3F-4578-99E9-12AE0F62B2D5">
				                                                                        <input type="button" id="qt_replycontent_ul" class="ed_button button button-small" aria-label="Bulleted list" value="ul" wtx-context="9388E14D-11F0-48D9-8E1A-EF567FD67FF0">
				                                                                        <input type="button" id="qt_replycontent_ol" class="ed_button button button-small" aria-label="Numbered list" value="ol" wtx-context="F1BA1AE8-0F41-48D8-8A7E-12A09548B9F1">
				                                                                        <input type="button" id="qt_replycontent_li" class="ed_button button button-small" aria-label="List item" value="li" wtx-context="579A20E5-13F8-48F4-8449-455A986260BD">
				                                                                        <input type="button" id="qt_replycontent_code" class="ed_button button button-small" aria-label="Code" value="code" wtx-context="15484F29-829F-4C87-B821-A82F75E14438">
				                                                                        <input type="button" id="qt_replycontent_close" class="ed_button button button-small" title="Close all open tags" value="close tags" wtx-context="C4328904-4ED8-4A1F-84AD-5EE8B72102FE">
				                                                                    </div>
				                                                                    <textarea class="wp-editor-area" rows="20" cols="40" name="replycontent" id="replycontent"></textarea>
				                                                                </div>
				                                                            </div>

				                                                        </div>

				                                                        <div id="edithead" style="display:none;">
				                                                            <div class="inside">
				                                                                <label for="author-name">Name</label>
				                                                                <input type="text" name="newcomment_author" size="50" value="" id="author-name" wtx-context="07022411-8118-4A7C-8454-84B2B2030B31">
				                                                            </div>

				                                                            <div class="inside">
				                                                                <label for="author-email">Email</label>
				                                                                <input type="text" name="newcomment_author_email" size="50" value="" id="author-email" wtx-context="E77A9B1C-2D85-403D-888A-4F1962FBB242">
				                                                            </div>

				                                                            <div class="inside">
				                                                                <label for="author-url">URL</label>
				                                                                <input type="text" id="author-url" name="newcomment_author_url" class="code" size="103" value="" wtx-context="ECF978EA-C42A-438C-9DAB-64864404D498">
				                                                            </div>
				                                                        </div>

				                                                        <div id="replysubmit" class="submit">
				                                                            <p class="reply-submit-buttons">
				                                                                <button type="button" class="save button button-primary">
				                                                                    <span id="addbtn" style="display: none;">Add Comment</span>
				                                                                    <span id="savebtn" style="display: none;">Update Comment</span>
				                                                                    <span id="replybtn" style="display: none;">Submit Reply</span>
				                                                                </button>
				                                                                <button type="button" class="cancel button">Cancel</button>
				                                                                <span class="waiting spinner"></span>
				                                                            </p>
				                                                            <div class="notice notice-error notice-alt inline hidden">
				                                                                <p class="error"></p>
				                                                            </div>
				                                                        </div>

				                                                        <input type="hidden" name="action" id="action" value="" wtx-context="E2C5C0CF-88C2-4677-9562-7044A9DD312B">
				                                                        <input type="hidden" name="comment_ID" id="comment_ID" value="" wtx-context="9E6A208D-1C96-44CA-BE58-BC793A2054B0">
				                                                        <input type="hidden" name="comment_post_ID" id="comment_post_ID" value="" wtx-context="F9CCC837-8F2E-4B60-82B3-0E1B41054AC2">
				                                                        <input type="hidden" name="status" id="status" value="" wtx-context="AAA82EF2-0C0E-4DEA-8F5D-71C8A3C46E4D">
				                                                        <input type="hidden" name="position" id="position" value="-1" wtx-context="B18D8A14-A1E2-43EA-8766-0914A07A51D5">
				                                                        <input type="hidden" name="checkbox" id="checkbox" value="0" wtx-context="E2023B45-2343-460B-A5C2-4BBDE63B731D">
				                                                        <input type="hidden" name="mode" id="mode" value="dashboard" wtx-context="E803DB50-9750-4EF3-859A-95B703DE095C">
				                                                        <input type="hidden" id="_ajax_nonce-replyto-comment" name="_ajax_nonce-replyto-comment" value="3e533d37b6" wtx-context="72561250-02F6-4364-ADD3-815C3218043E">
				                                                        <input type="hidden" id="_wp_unfiltered_html_comment" name="_wp_unfiltered_html_comment" value="17cf1e057c" wtx-context="54AFBEF7-9D6A-49AE-AB2B-ADB983562549"> </fieldset>
				                                                </div>
				                                            </div>
				                                        </form>
				                                        <div class="hidden" id="trash-undo-holder">
				                                            <div class="trash-undo-inside">Comment by <strong></strong> moved to the trash. <span class="undo untrash"><a href="#">Undo</a></span></div>
				                                        </div>
				                                        <div class="hidden" id="spam-undo-holder">
				                                            <div class="spam-undo-inside">Comment by <strong></strong> marked as spam. <span class="undo unspam"><a href="#">Undo</a></span></div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <div id="postbox-container-2" class="postbox-container">
				                    <div id="side-sortables" class="meta-box-sortables ui-sortable">
				                        <div id="dashboard_quick_press" class="postbox ">
				                            <button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: <span class="hide-if-no-js">Quick Draft</span> <span class="hide-if-js">Your Recent Drafts</span></span><span class="toggle-indicator" aria-hidden="true"></span></button>
				                            <h2 class="hndle ui-sortable-handle"><span><span class="hide-if-no-js">Quick Draft</span> <span class="hide-if-js">Your Recent Drafts</span></span></h2>
				                            <div class="inside">

				                                <form name="post" action="https://akademiakropki.wpcoder.pl/wp-admin/post.php" method="post" id="quick-press" class="initial-form hide-if-no-js" wtx-context="038C3CFE-6340-4F9A-8D38-90C9F76AB821">

				                                    <div class="input-text-wrap" id="title-wrap">
				                                        <label for="title">
				                                            Title </label>
				                                        <input type="text" name="post_title" id="title" autocomplete="off" wtx-context="1752B873-DA0A-468D-8027-3729350FAAE7">
				                                    </div>

				                                    <div class="textarea-wrap" id="description-wrap">
				                                        <label for="content">Content</label>
				                                        <textarea name="content" id="content" placeholder="What’s on your mind?" class="mceEditor" rows="3" cols="15" autocomplete="off"></textarea>
				                                    </div>

				                                    <p class="submit">
				                                        <input type="hidden" name="action" id="quickpost-action" value="post-quickdraft-save" wtx-context="EB926F3B-45F1-4238-8CE5-799362909645">
				                                        <input type="hidden" name="post_ID" value="28" wtx-context="AE99643C-4A4B-4EC8-AE8D-CC08C807E5ED">
				                                        <input type="hidden" name="post_type" value="post" wtx-context="ED08B4A7-2CC8-4BAD-B0DB-6BDA9B3D6CB7">
				                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="301e2e2f14" wtx-context="B3F6635D-FC9A-4652-82A6-A8799953DBF2">
				                                        <input type="hidden" name="_wp_http_referer" value="/wp-admin/index.php" wtx-context="96360B95-392E-45F6-8DB1-9D614E83827D">
				                                        <input type="submit" name="save" id="save-post" class="button button-primary" value="Save Draft" wtx-context="4D5C7CB4-357A-4698-8B45-5B3313056ABB">
				                                        <br class="clear">
				                                    </p>

				                                </form>
				                            </div>
				                        </div>
				                        <div id="dashboard_primary" class="postbox ">
				                            <button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: WordPress Events and News</span><span class="toggle-indicator" aria-hidden="true"></span></button>
				                            <h2 class="hndle ui-sortable-handle"><span>WordPress Events and News</span></h2>
				                            <div class="inside">

				                                <div class="community-events-errors notice notice-error inline" aria-hidden="true">
				                                    <p class="hide-if-js">
				                                        This widget requires JavaScript. </p>

				                                    <p class="community-events-error-occurred" aria-hidden="true">
				                                        An error occurred. Please try again. </p>

				                                    <p class="community-events-could-not-locate" aria-hidden="true"></p>
				                                </div>

				                                <div class="community-events-loading hide-if-no-js" aria-hidden="true">
				                                    Loading… </div>

				                                <div id="community-events" class="community-events" aria-hidden="false">
				                                    <div class="activity-block">
				                                        <p>
				                                            <span id="community-events-location-message" aria-hidden="false">Attend an upcoming event near you.</span>

				                                            <button class="button-link community-events-toggle-location" aria-label="Edit city" aria-expanded="false" aria-hidden="false">
				                                                <span class="dashicons dashicons-edit"></span>
				                                            </button>
				                                        </p>

				                                        <form class="community-events-form" aria-hidden="true" action="https://akademiakropki.wpcoder.pl/wp-admin/admin-ajax.php" method="post" wtx-context="519E8E68-2186-479E-855C-D3C3A3FBD541">
				                                            <label for="community-events-location">
				                                                City: </label>
				                                            <input id="community-events-location" class="regular-text" type="text" name="community-events-location" placeholder="Cincinnati" wtx-context="5EB726D9-C313-420A-B6FE-35A7F02A23B4">

				                                            <input type="submit" name="community-events-submit" id="community-events-submit" class="button" value="Submit" wtx-context="4E3390C2-71D1-4B9F-BEA1-2FFEE20972D5">
				                                            <button class="community-events-cancel button-link" type="button" aria-expanded="false">
				                                                Cancel </button>

				                                            <span class="spinner"></span>
				                                        </form>
				                                    </div>

				                                    <ul class="community-events-results activity-block last" aria-hidden="false">

				                                        <li class="event event-wordcamp wp-clearfix">
				                                            <div class="event-info">
				                                                <div class="dashicons event-icon" aria-hidden="true"></div>
				                                                <div class="event-info-inner">
				                                                    <a class="event-title" href="https://2019.europe.wordcamp.org/">WordCamp Europe</a>
				                                                    <span class="event-city">Berlin, Germany</span>
				                                                </div>
				                                            </div>

				                                            <div class="event-date-time">
				                                                <span class="event-date">Thursday, Jun 20, 2019</span>

				                                            </div>
				                                        </li>

				                                    </ul>
				                                </div>

				                                <div class="wordpress-news hide-if-no-js" style="">
				                                    <div class="rss-widget">
				                                        <ul>
				                                            <li><a class="rsswidget" href="https://wordpress.org/news/2019/06/the-month-in-wordpress-may-2019/">The Month in WordPress: May 2019</a></li>
				                                        </ul>
				                                    </div>
				                                    <div class="rss-widget">
				                                        <ul>
				                                            <li><a class="rsswidget" href="https://wptavern.com/take-back-your-web-tantek-celiks-call-to-action-to-join-the-independent-web">WPTavern: Take Back Your Web: Tantek Çelik’s Call to Action to Join the Independent Web</a></li>
				                                            <li><a class="rsswidget" href="https://wptavern.com/jetpack-7-4-adds-business-hours-block-and-ability-to-share-content-through-whatsapp">WPTavern: Jetpack 7.4 Adds Business Hours Block and Ability to Share Content Through WhatsApp</a></li>
				                                            <li><a class="rsswidget" href="https://wordpress.org/news/2019/06/the-month-in-wordpress-may-2019/">WordPress.org blog: The Month in WordPress: May 2019</a></li>
				                                        </ul>
				                                    </div>
				                                </div>

				                                <p class="community-events-footer">
				                                    <a href="https://make.wordpress.org/community/meetups-landing-page" target="_blank">Meetups <span class="screen-reader-text">(opens in a new tab)</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a> |

				                                    <a href="https://central.wordcamp.org/schedule/" target="_blank">WordCamps <span class="screen-reader-text">(opens in a new tab)</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a> |

				                                    <a href="https://wordpress.org/news/" target="_blank">News <span class="screen-reader-text">(opens in a new tab)</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a> </p>

				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <div id="postbox-container-3" class="postbox-container">
				                    <div id="column3-sortables" class="meta-box-sortables ui-sortable empty-container" data-emptystring="Drag boxes here"></div>
				                </div>
				                <div id="postbox-container-4" class="postbox-container">
				                    <div id="column4-sortables" class="meta-box-sortables ui-sortable empty-container" data-emptystring="Drag boxes here"></div>
				                </div>
				            </div>

				            <input type="hidden" id="closedpostboxesnonce" name="closedpostboxesnonce" value="918def2e4d" wtx-context="8FEACA04-9835-4D6D-9677-45CB7B4F84C2">
				            <input type="hidden" id="meta-box-order-nonce" name="meta-box-order-nonce" value="7ea561e85d" wtx-context="9033F1FD-C464-42ED-8D64-4266E5F7734C"> </div>
				        <!-- dashboard-widgets-wrap -->

				    </div>
				    <!-- wrap -->

				    <script id="tmpl-community-events-attend-event-near" type="text/template">
				        Attend an upcoming event near <strong>{{ data.location.description }}</strong>. </script>

				    <script id="tmpl-community-events-could-not-locate" type="text/template">
				        We couldn&#8217;t locate <em>{{data.unknownCity}}</em>. Please try another nearby city. For example: Kansas City; Springfield; Portland. </script>

				    <script id="tmpl-community-events-event-list" type="text/template">
				        <# _.each( data.events, function( event ) { #>
				            <li class="event event-{{ event.type }} wp-clearfix">
				                <div class="event-info">
				                    <div class="dashicons event-icon" aria-hidden="true"></div>
				                    <div class="event-info-inner">
				                        <a class="event-title" href="{{ event.url }}">{{ event.title }}</a>
				                        <span class="event-city">{{ event.location.location }}</span>
				                    </div>
				                </div>

				                <div class="event-date-time">
				                    <span class="event-date">{{ event.formatted_date }}</span>
				                    <# if ( 'meetup'===e vent.type ) { #>
				                        <span class="event-time">{{ event.formatted_time }}</span>
				                        <# } #>
				                </div>
				            </li>
				            <# } ) #>
				    </script>

				    <script id="tmpl-community-events-no-upcoming-events" type="text/template">
				        <li class="event-none">
				            <# if ( data.location.description ) { #>
				                There aren&#8217;t any events scheduled near {{ data.location.description }} at the moment. Would you like to <a href="https://make.wordpress.org/community/handbook/meetup-organizer/welcome/">organize one</a>?
				                <# } else { #>
				                    There aren&#8217;t any events scheduled near you at the moment. Would you like to <a href="https://make.wordpress.org/community/handbook/meetup-organizer/welcome/">organize one</a>?
				                    <# } #>
				        </li>
				    </script>

				    <div class="clear"></div>
				</div>
	        <!-- wpbody -->
	        <div class="clear"></div>
	    </div>
	    <!-- wpcontent -->

	    <div id="wpfooter" role="contentinfo">
	        <p id="footer-left" class="alignleft">
	            <span id="footer-thankyou">Dziękujemy za tworzenie za pomocą <a href="https://pl.wordpress.org/">WordPressa</a>.</span> </p>
	        <p id="footer-upgrade" class="alignright">
	            Wersja 5.2.1 </p>
	        <div class="clear"></div>
	    </div>
	    <script type="text/javascript">
	        list_args = {
	            "class": "WP_Comments_List_Table",
	            "screen": {
	                "id": "dashboard",
	                "base": "dashboard"
	            }
	        };
	    </script>
	    <script type="text/javascript">
	        list_args = {
	            "class": "WP_Comments_List_Table",
	            "screen": {
	                "id": "dashboard",
	                "base": "dashboard"
	            }
	        };
	    </script>
	    <div id="wp-auth-check-wrap" class="hidden">
	        <div id="wp-auth-check-bg"></div>
	        <div id="wp-auth-check">
	            <button type="button" class="wp-auth-check-close button-link"><span class="screen-reader-text">Zamknij okienko dialogowe</span></button>
	            <div id="wp-auth-check-form" class="loading" data-src="https://wpadmin.bracketspace.com/wp-login.php?interim-login=1&amp;wp_lang=pl_PL"></div>
	            <div class="wp-auth-fallback">
	                <p><b class="wp-auth-fallback-expired" tabindex="0">Sesja wygasła</b></p>
	                <p><a href="https://wpadmin.bracketspace.com/wp-login.php" target="_blank">Proszę zalogować się ponownie.</a> Strona logowania zostanie otwarte w nowym oknie. Po zalogowaniu można ją zamknąć i wrócić tutaj.</p>
	            </div>
	        </div>
	    </div>

	    <script type="text/javascript">
	        /* <![CDATA[ */
	        var commonL10n = {
	            "warnDelete": "Masz zamiar trwale usun\u0105\u0107 te elementy ze swojej witryny.\nTa czynno\u015b\u0107 nie mo\u017ce zosta\u0107 cofni\u0119ta.\nWybierz 'Anuluj' aby zatrzyma\u0107, 'OK' aby usun\u0105\u0107.",
	            "dismiss": "Ukryj t\u0119 informacj\u0119.",
	            "collapseMenu": "Zwi\u0144 Menu g\u0142\u00f3wne",
	            "expandMenu": "Rozwi\u0144 Menu g\u0142\u00f3wne"
	        };
	        var wpAjax = {
	            "noPerm": "Przepraszamy, nie posiadasz uprawnienia \u017ceby to zrobi\u0107.",
	            "broken": "Co\u015b posz\u0142o nie tak."
	        };
	        var quicktagsL10n = {
	            "closeAllOpenTags": "Zamknij wszystkie otwarte tagi",
	            "closeTags": "zamknij tagi",
	            "enterURL": "Wprowad\u017a adres URL",
	            "enterImageURL": "Wprowad\u017a adres URL obrazka",
	            "enterImageDescription": "Wprowad\u017a opis obrazka",
	            "textdirection": "kierunek pisania",
	            "toggleTextdirection": "Prze\u0142\u0105cz kierunek pisania w edytorze",
	            "dfw": "Tryb pisania bez rozpraszania",
	            "strong": "Pogrubienie",
	            "strongClose": "Zamknij znacznik pogrubienia",
	            "em": "Kursywa",
	            "emClose": "Zamknij znacznik kursywy",
	            "link": "Wstaw odno\u015bnik",
	            "blockquote": "Blok z cytatem",
	            "blockquoteClose": "Zamknij znacznik cytatu",
	            "del": "Usuni\u0119ty tekst (przekre\u015blenie)",
	            "delClose": "Zamknij znacznik usuni\u0119tego tekstu",
	            "ins": "Wstawiony text",
	            "insClose": "Zamknij znacznik wstawionego tekstu",
	            "image": "Wstaw obrazek",
	            "ul": "Lista nieuporz\u0105dkowana",
	            "ulClose": "Zamknij list\u0119 nienumerowan\u0105",
	            "ol": "Numerowanie",
	            "olClose": "Zamknij znacznik listy numerowanej",
	            "li": "Element listy",
	            "liClose": "Zamknij znacznik elementu listy",
	            "code": "Kod",
	            "codeClose": "Zamknij znacznik kodu",
	            "more": "Wstaw znacznik \u201eCzytaj dalej\u201d"
	        };
	        var adminCommentsL10n = {
	            "hotkeys_highlight_first": "",
	            "hotkeys_highlight_last": "",
	            "replyApprove": "Zatwierd\u017a i odpowiedz",
	            "reply": "Odpowiedz",
	            "warnQuickEdit": "Czy na pewno chcesz edytowa\u0107 ten komentarz?\nWprowadzone zmiany zostan\u0105 utracone.",
	            "warnCommentChanges": "Czy na pewno chcesz to zrobi\u0107?\nZmiany wprowadzone w komentarzu zostan\u0105 utracone.",
	            "docTitleComments": "Komentarze",
	            "docTitleCommentsCount": "Komentarze (%s)"
	        };
	        var postBoxL10n = {
	            "postBoxEmptyString": "Przesu\u0144 tutaj sekcje"
	        };
	        var _wpUtilSettings = {
	            "ajax": {
	                "url": "\/wp-admin\/admin-ajax.php"
	            }
	        };
	        var communityEventsData = {
	            "nonce": "52fdeb272c",
	            "cache": "",
	            "l10n": {
	                "enter_closest_city": "Wpisz najbli\u017csze miasto, aby znale\u017a\u0107 bliskie wydarzenia.",
	                "error_occurred_please_try_again": "Wyst\u0105pi\u0142 b\u0142\u0105d. Prosz\u0119 spr\u00f3bowa\u0107 ponownie.",
	                "attend_event_near_generic": "We\u017a udzia\u0142 w nadchodz\u0105cym wydarzeniu w pobli\u017cu ciebie.",
	                "could_not_locate_city": "Nie mo\u017cemy zlokalizowa\u0107 %s. Podaj prosz\u0119 inne miasto w pobli\u017cu. Na przyk\u0142ad: Krak\u00f3w, Wadowice czy Olsztyn.",
	                "city_updated": "Miasto zosta\u0142a zaktualizowane. Lista wydarze\u0144 w pobli\u017cu %s."
	            }
	        };
	        var thickboxL10n = {
	            "next": "Nast\u0119pne \u00bb",
	            "prev": "\u00ab Poprzednie",
	            "image": "Obrazek",
	            "of": "z",
	            "close": "Zamknij",
	            "noiframes": "Ta funkcja wymaga u\u017cycia ramek inline. Obs\u0142uga iframe'\u00f3w jest w twojej przegl\u0105darce wy\u0142\u0105czona lub nie s\u0105 one przez ni\u0105 obs\u0142ugiwane.",
	            "loadingAnimation": "https:\/\/wpadmin.bracketspace.com\/wp-includes\/js\/thickbox\/loadingAnimation.gif"
	        };
	        var plugininstallL10n = {
	            "plugin_information": "Wtyczka:",
	            "plugin_modal_label": "Szczeg\u00f3\u0142y wtyczki",
	            "ays": "Czy na pewno chcesz zainstalowa\u0107 t\u0119 wtyczk\u0119?"
	        };
	        var _wpUpdatesSettings = {
	            "ajax_nonce": "bdb09dc394",
	            "l10n": {
	                "searchResults": "Wyniki wyszukiwania: &#8220;%s&#8221;",
	                "searchResultsLabel": "Wyniki wyszukiwania",
	                "noPlugins": "Wygl\u0105da na to, \u017ce nie ma aktualnie dost\u0119pnych \u017cadnych wtyczek.",
	                "noItemsSelected": "W celu zmiany, wybierz przynajmniej jeden obiekt.",
	                "updating": "Aktualizowanie...",
	                "pluginUpdated": "Zosta\u0142a zaktualizowana!",
	                "themeUpdated": "Zosta\u0142 zaktualizowany!",
	                "update": "Zaktualizuj",
	                "updateNow": "Aktualizuj teraz",
	                "pluginUpdateNowLabel": "Aktualizuj teraz %s",
	                "updateFailedShort": "Aktualizacja nie powiod\u0142a si\u0119.",
	                "updateFailed": "Aktualizacja nie powiod\u0142a si\u0119: %s",
	                "pluginUpdatingLabel": "Aktualizuj\u0119 %s...",
	                "pluginUpdatedLabel": "%s zosta\u0142a zaktualizowana!",
	                "pluginUpdateFailedLabel": "Aktualizacja %s zako\u0144czy\u0142a si\u0119 niepowodzeniem",
	                "updatingMsg": "Aktualizowanie... prosz\u0119 czeka\u0107.",
	                "updatedMsg": "Aktualizacj\u0119 zako\u0144czono pomy\u015blnie.",
	                "updateCancel": "Anulowano aktualizacj\u0119.",
	                "beforeunload": "Opuszczenie strony mo\u017ce przerwa\u0107 aktualizacj\u0119.",
	                "installNow": "Zainstaluj teraz",
	                "pluginInstallNowLabel": "Instaluj teraz %s",
	                "installing": "Instalowanie...",
	                "pluginInstalled": "Zainstalowana!",
	                "themeInstalled": "Zainstalowany!",
	                "installFailedShort": "Instalacja si\u0119 nie powiod\u0142a",
	                "installFailed": "Instalacja nie powiod\u0142a si\u0119: %s",
	                "pluginInstallingLabel": "Instaluj\u0119 %s...",
	                "themeInstallingLabel": "Instaluj\u0119 %s...",
	                "pluginInstalledLabel": "Zainstalowano: %s!",
	                "themeInstalledLabel": "Zainstalowano: %s!",
	                "pluginInstallFailedLabel": "Nie powiod\u0142a si\u0119 instalacja wtyczki: %s",
	                "themeInstallFailedLabel": "Nie powiod\u0142a si\u0119 instalacja motywu: %s",
	                "installingMsg": "Instalowanie... prosz\u0119 czeka\u0107.",
	                "installedMsg": "Instalacja zako\u0144czona sukcesem.",
	                "importerInstalledMsg": "Importer zosta\u0142 zainstalowany pomy\u015blnie. <a href=\"%s\">Uruchom go<\/a>",
	                "aysDelete": "Czy na pewno chcesz usn\u0105\u0107 %s?",
	                "aysDeleteUninstall": "Czy na pewno chcesz usun\u0105\u0107 %s wraz z danymi?",
	                "aysBulkDelete": "Czy na pewno chcesz usun\u0105\u0107 wybrane wtyczki wraz z ich danymi?",
	                "aysBulkDeleteThemes": "Uwaga: Wybrane motywy mog\u0105 by\u0107 aktywne w innych witrynach sieci. Czy na pewno chcesz kontynuowa\u0107?",
	                "deleting": "Usuwanie...",
	                "deleteFailed": "Nie uda\u0142o si\u0119 skasowa\u0107: %s",
	                "pluginDeleted": "Skasowana!",
	                "themeDeleted": "Skasowany!",
	                "livePreview": "Podgl\u0105d na \u017cywo",
	                "activatePlugin": "Aktywuj",
	                "activateTheme": "Aktywuj",
	                "activatePluginLabel": "W\u0142\u0105cz %s",
	                "activateThemeLabel": "W\u0142\u0105cz %s",
	                "activateImporter": "Uruchom Importer",
	                "activateImporterLabel": "Uruchom %s",
	                "unknownError": "Co\u015b posz\u0142o nie tak.",
	                "connectionError": "Utracono po\u0142\u0105czenie albo serwer nie odpowiada. Prosz\u0119 spr\u00f3bowa\u0107 p\u00f3\u017aniej.",
	                "nonceError": "Wyst\u0105pi\u0142 b\u0142\u0105d. Prosz\u0119 od\u015bwie\u017cy\u0107 stron\u0119 i spr\u00f3bowa\u0107 ponownie.",
	                "pluginsFound": "Liczba znalezionych wtyczek: %d",
	                "noPluginsFound": "Nie znaleziono \u017cadnej wtyczki. Spr\u00f3buj poszuka\u0107 inaczej."
	            }
	        }; /* ]]> */
	    </script>
	    <script type="text/javascript" src="https://wpadmin.bracketspace.com/wp-admin/load-scripts.php?c=0&amp;load%5B%5D=hoverIntent,common,admin-bar,wp-ajax-response,jquery-color,wp-lists,quicktags,jquery-query,admin-comments,jquery-ui-core,jquery-&amp;load%5B%5D=ui-widget,jquery-ui-mouse,jquery-ui-sortable,postbox,underscore,wp-util,wp-a11y,dashboard,thickbox,plugin-install,updates,shortc&amp;load%5B%5D=ode,media-upload,svg-painter&amp;ver=5.2.1"></script>
	    <script type="text/javascript" src="https://wpadmin.bracketspace.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.0.0"></script>
	    <script type="text/javascript">
	        ('fetch' in window) || document.write('<script src="https://wpadmin.bracketspace.com/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>');
	        (document.contains) || document.write('<script src="https://wpadmin.bracketspace.com/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.26.0-0"></scr' + 'ipt>');
	        (window.FormData && window.FormData.prototype.keys) || document.write('<script src="https://wpadmin.bracketspace.com/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>');
	        (Element.prototype.matches && Element.prototype.closest) || document.write('<script src="https://wpadmin.bracketspace.com/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>');
	    </script>
	    <script type="text/javascript" src="https://wpadmin.bracketspace.com/wp-includes/js/dist/hooks.min.js?ver=2.2.0"></script>
	    <script type="text/javascript">
	        /* <![CDATA[ */
	        var heartbeatSettings = {
	            "nonce": "e481f36b42"
	        };
	        /* ]]> */
	    </script>
	    <script type="text/javascript" src="https://wpadmin.bracketspace.com/wp-includes/js/heartbeat.min.js?ver=5.2.1"></script>
	    <script type="text/javascript">
	        /* <![CDATA[ */
	        var authcheckL10n = {
	            "beforeunload": "Twoja sesja wygas\u0142a. Mo\u017cesz zalogowa\u0107 si\u0119 ponownie na tej stronie lub przej\u015b\u0107 do ekranu logowania si\u0119.",
	            "interval": "180"
	        };
	        /* ]]> */
	    </script>
	    <script type="text/javascript" src="https://wpadmin.bracketspace.com/wp-includes/js/wp-auth-check.min.js?ver=5.2.1"></script>
	    <script type="text/javascript">
	        /* <![CDATA[ */
	        var wpLinkL10n = {
	            "title": "Wstaw\/edytuj odno\u015bnik",
	            "update": "Zaktualizuj",
	            "save": "Dodaj link",
	            "noTitle": "(brak tytu\u0142u)",
	            "noMatchesFound": "Brak wynik\u00f3w.",
	            "linkSelected": "Wybrano odno\u015bnik.",
	            "linkInserted": "Wstawiono odno\u015bnik."
	        };
	        /* ]]> */
	    </script>
	    <script type="text/javascript" src="https://wpadmin.bracketspace.com/wp-includes/js/wplink.min.js?ver=5.2.1"></script>
	    <script type="text/javascript" src="https://wpadmin.bracketspace.com/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4"></script>
	    <script type="text/javascript" src="https://wpadmin.bracketspace.com/wp-includes/js/jquery/ui/menu.min.js?ver=1.11.4"></script>
	    <script type="text/javascript">
	        /* <![CDATA[ */
	        var uiAutocompleteL10n = {
	            "noResults": "Brak wynik\u00f3w.",
	            "oneResult": "Znaleziono jeden wynik. U\u017cyj strza\u0142ek g\u00f3ra\/d\u00f3\u0142 do nawigacji.",
	            "manyResults": "Znaleziono %d wynik\u00f3w. U\u017cyj strza\u0142ek g\u00f3ra\/d\u00f3\u0142 do nawigacji.",
	            "itemSelected": "Wybrano obiekt."
	        };
	        /* ]]> */
	    </script>
	    <script type="text/javascript" src="https://wpadmin.bracketspace.com/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.11.4"></script>

	    <script type="text/javascript">
	        tinyMCEPreInit = {
	            baseURL: "https://wpadmin.bracketspace.com/wp-includes/js/tinymce",
	            suffix: ".min",
	            mceInit: {},
	            qtInit: {
	                'replycontent': {
	                    id: "replycontent",
	                    buttons: "strong,em,link,block,del,ins,img,ul,ol,li,code,close"
	                }
	            },
	            ref: {
	                plugins: "",
	                theme: "modern",
	                language: ""
	            },
	            load_ext: function(url, lang) {
	                var sl = tinymce.ScriptLoader;
	                sl.markDone(url + '/langs/' + lang + '.js');
	                sl.markDone(url + '/langs/' + lang + '_dlg.js');
	            }
	        };
	    </script>
	    <script type="text/javascript">
	        (function() {
	            var init, id, $wrap;

	            if (typeof tinymce !== 'undefined') {
	                if (tinymce.Env.ie && tinymce.Env.ie < 11) {
	                    tinymce.$('.wp-editor-wrap ').removeClass('tmce-active').addClass('html-active');
	                    return;
	                }

	                for (id in tinyMCEPreInit.mceInit) {
	                    init = tinyMCEPreInit.mceInit[id];
	                    $wrap = tinymce.$('#wp-' + id + '-wrap');

	                    if (($wrap.hasClass('tmce-active') || !tinyMCEPreInit.qtInit.hasOwnProperty(id)) && !init.wp_skip_init) {
	                        tinymce.init(init);

	                        if (!window.wpActiveEditor) {
	                            window.wpActiveEditor = id;
	                        }
	                    }
	                }
	            }

	            if (typeof quicktags !== 'undefined') {
	                for (id in tinyMCEPreInit.qtInit) {
	                    quicktags(tinyMCEPreInit.qtInit[id]);

	                    if (!window.wpActiveEditor) {
	                        window.wpActiveEditor = id;
	                    }
	                }
	            }
	        }());
	    </script>
	    <div id="wp-link-backdrop" style="display: none"></div>
	    <div id="wp-link-wrap" class="wp-core-ui" style="display: none" role="dialog" aria-labelledby="link-modal-title">
	        <form id="wp-link" tabindex="-1" wtx-context="878345A6-EAF8-4E5D-809D-E7FD3AD51E16">
	            <input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="46fce7799e" wtx-context="FCC9F180-FF65-46D6-9F0D-C5FD0FCB7670">
	            <h1 id="link-modal-title">Wstaw/edytuj odnośnik</h1>
	            <button type="button" id="wp-link-close"><span class="screen-reader-text">Zamknij</span></button>
	            <div id="link-selector">
	                <div id="link-options">
	                    <p class="howto" id="wplink-enter-url">Wprowadź docelowy adres URL…</p>
	                    <div>
	                        <label><span>Adres URL</span>
	                            <input id="wp-link-url" type="text" aria-describedby="wplink-enter-url" wtx-context="2BAC7378-BB6B-4DB2-A467-1E3E6E09D9BD">
	                        </label>
	                    </div>
	                    <div class="wp-link-text-field">
	                        <label><span>Tekst odnośnika</span>
	                            <input id="wp-link-text" type="text" wtx-context="F0884655-FC9B-437D-8D5A-F00E550B3943">
	                        </label>
	                    </div>
	                    <div class="link-target">
	                        <label><span></span>
	                            <input type="checkbox" id="wp-link-target" wtx-context="4D2BA93C-1E31-4232-8C0C-F339241CBEC1"> Otwórz odnośnik w nowej zakładce</label>
	                    </div>
	                </div>
	                <p class="howto" id="wplink-link-existing-content">… lub dodaj odnośnik do już opublikowanych treści</p>
	                <div id="search-panel">
	                    <div class="link-search-wrapper">
	                        <label>
	                            <span class="search-label">Szukaj</span>
	                            <input type="search" id="wp-link-search" class="link-search-field" autocomplete="off" aria-describedby="wplink-link-existing-content" wtx-context="55A21A44-9B38-4B25-824D-0DD5A0EA57E6">
	                            <span class="spinner"></span>
	                        </label>
	                    </div>
	                    <div id="search-results" class="query-results" tabindex="0">
	                        <ul></ul>
	                        <div class="river-waiting">
	                            <span class="spinner"></span>
	                        </div>
	                    </div>
	                    <div id="most-recent-results" class="query-results" tabindex="0">
	                        <div class="query-notice" id="query-notice-message">
	                            <em class="query-notice-default">Nie wprowadzono kryteriów wyszukiwania. Wyświetlane są najnowsze pozycje.</em>
	                            <em class="query-notice-hint screen-reader-text">Wyszukaj elementy lub użyj klawiszy strzałek w górę i w dół, aby je wybrać.</em>
	                        </div>
	                        <ul></ul>
	                        <div class="river-waiting">
	                            <span class="spinner"></span>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="submitbox">
	                <div id="wp-link-cancel">
	                    <button type="button" class="button">Anuluj</button>
	                </div>
	                <div id="wp-link-update">
	                    <input type="submit" value="Dodaj link" class="button button-primary" id="wp-link-submit" name="wp-link-submit" wtx-context="8C78FAC4-4CB6-449D-91EF-984AC0B10DB2">
	                </div>
	            </div>
	        </form>
	    </div>

	    <div class="clear"></div>
	</div>

	<script type="text/javascript" src="../../wp/wp-admin/load-scripts.php?c=0&load%5B%5D=jquery-core,jquery-migrate,utils&ver=5.2.1"></script>
	<script type="text/javascript" src="../../wp/wp-admin/load-scripts.php?c=0&load%5B%5D=hoverIntent,common,admin-bar,wp-ajax-response,jquery-color,wp-lists,quicktags,jquery-query,admin-comments,jquery-ui-core,jquery-&load%5B%5D=ui-widget,jquery-ui-mouse,jquery-ui-sortable,postbox,underscore,wp-util,wp-a11y,dashboard,thickbox,plugin-install,updates,shortc&load%5B%5D=ode,media-upload,svg-painter"></script>

</body>
</html>