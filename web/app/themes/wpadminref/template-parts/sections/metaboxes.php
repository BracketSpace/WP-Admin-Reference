<?php
/**
 * Section metaboxes view
 *
 * @package wpadminref
 */
?>
<section class="section section-metaboxes" id="metaboxes">
	<header class="section-header">
		<h1>Metaboxes</h1>
		<div class="switch-button">
			<button data-action="#metaboxes" class="button button-primary button-switch-view">Show code</button>
		</div>
	</header>
	<div class="section-content">
		<div id="dashboard-widgets-wrap">
			<div id="dashboard-widgets" class="metabox-holder">
				<div id="postbox-container-1" class="postbox-container">
					<div id="normal-sortables" class="meta-box-sortables ui-sortable">
						<div id="metabox" class="postbox">
							<button type="button" class="handlediv" aria-expanded="true">
								<span class="screen-reader-text">Metabox collapse</span>
								<span class="toggle-indicator" aria-hidden="true"></span>
							</button>
							<h2 class="hndle ui-sortable-handle">
								<span>Metabox title</span>
							</h2>
							<div class="inside">
								<div class="main">
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
									The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, 
									content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum 
									as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions 
									have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="postbox-container-2" class="postbox-container">
					<div id="column2-sortables" class="meta-box-sortables ui-sortable empty-container" data-emptystring="Drag boxes here"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-code">
		<pre class="section-markup-code line-numbers language-markup"><code class="editor-code line-numbers language-markup"></code></pre>
		<div class="section-code-functions">
			<button class="button button-primary copy-to-clipboard">Copy to clipboard</button>
		</div>
	</div>
</section>
