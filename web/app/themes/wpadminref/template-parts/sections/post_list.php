<?php
/**
 * Section post list view
 *
 * @package wpadminref
 */

?>
<section class="section section-spinners" id="post_list">
	<header class="section-header">
		<h1>Post List</h1>
		<div class="switch-button">
			<button data-action="#post_list" class="button button-primary button-switch-view">Change view to code</button>
		</div>
	</header>
	<div class="section-content">
		<table class="wp-list-table widefat fixed striped posts">
			<thead>
			<tr>
				<td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox"></td><th scope="col" id="title" class="manage-column column-title column-primary sortable desc"><a href="http://wpadmin.bracketspace.localhost/wp/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th><th scope="col" id="author" class="manage-column column-author">Author</th><th scope="col" id="categories" class="manage-column column-categories">Categories</th><th scope="col" id="tags" class="manage-column column-tags">Tags</th><th scope="col" id="comments" class="manage-column column-comments num sortable desc"><a href="http://wpadmin.bracketspace.localhost/wp/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" id="date" class="manage-column column-date sortable asc"><a href="http://wpadmin.bracketspace.localhost/wp/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th>	</tr>
			</thead>

			<tbody id="the-list">
						<tr id="post-1" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-uncategorized">
					<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-1">
																						Select Hello world!			</label>
					<input id="cb-select-1" type="checkbox" name="post[]" value="1">
					<div class="locked-indicator">
						<span class="locked-indicator-icon" aria-hidden="true"></span>
						<span class="screen-reader-text">
						“Hello world!” is locked				</span>
					</div>
					</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
		<strong><a class="row-title" href="http://wpadmin.bracketspace.localhost/wp/wp-admin/post.php?post=1&amp;action=edit" aria-label="“Hello world!” (Edit)">Hello world!</a></strong>

		<div class="hidden" id="inline_1">
			<div class="post_title">Hello world!</div><div class="post_name">hello-world</div>
			<div class="post_author">1</div>
			<div class="comment_status">open</div>
			<div class="ping_status">open</div>
			<div class="_status">publish</div>
			<div class="jj">06</div>
			<div class="mm">08</div>
			<div class="aa">2019</div>
			<div class="hh">08</div>
			<div class="mn">24</div>
			<div class="ss">06</div>
			<div class="post_password"></div><div class="page_template">default</div><div class="post_category" id="category_1">1</div><div class="tags_input" id="post_tag_1"></div><div class="sticky"></div><div class="post_format"></div></div><div class="row-actions"><span class="edit"><a href="http://wpadmin.bracketspace.localhost/wp/wp-admin/post.php?post=1&amp;action=edit" aria-label="Edit “Hello world!”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Hello world!” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="http://wpadmin.bracketspace.localhost/wp/wp-admin/post.php?post=1&amp;action=trash&amp;_wpnonce=4c79a816df" class="submitdelete" aria-label="Move “Hello world!” to the Trash">Trash</a> | </span><span class="view"><a href="http://wpadmin.bracketspace.localhost/?p=1" rel="bookmark" aria-label="View “Hello world!”">View</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=post&amp;author=1">krzysztof@bracketspace.com</a></td><td class="categories column-categories" data-colname="Categories"><a href="edit.php?category_name=uncategorized">Uncategorized</a></td><td class="tags column-tags" data-colname="Tags"><span aria-hidden="true">—</span><span class="screen-reader-text">No tags</span></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
				<a href="http://wpadmin.bracketspace.localhost/wp/wp-admin/edit-comments.php?p=1&amp;comment_status=approved" class="post-com-count post-com-count-approved"><span class="comment-count-approved" aria-hidden="true">1</span><span class="screen-reader-text">1 comment</span></a><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No pending comments</span></span>		</div>
				</td><td class="date column-date" data-colname="Date">Published<br><abbr title="2019/08/06 8:24:06 am">2019/08/06</abbr></td>		</tr>
					</tbody>

			<tfoot>
			<tr>
				<td class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-2">Select All</label><input id="cb-select-all-2" type="checkbox"></td><th scope="col" class="manage-column column-title column-primary sortable desc"><a href="http://wpadmin.bracketspace.localhost/wp/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-author">Author</th><th scope="col" class="manage-column column-categories">Categories</th><th scope="col" class="manage-column column-tags">Tags</th><th scope="col" class="manage-column column-comments num sortable desc"><a href="http://wpadmin.bracketspace.localhost/wp/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-date sortable asc"><a href="http://wpadmin.bracketspace.localhost/wp/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th>	</tr>
			</tfoot>
		</table>
	</div>
	<div class="section-code">
		<pre class="section-markup-code line-numbers language-markup"><code class="editor-code line-numbers language-markup"></code></pre>
		<div class="section-code-functions">
			<button class="button button-primary copy-to-clipboard">Copy to clipboard</button>
		</div>
	</div>
</section>
