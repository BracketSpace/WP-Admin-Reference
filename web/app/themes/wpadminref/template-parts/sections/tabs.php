<?php
/**
 * Section tans view
 *
 * @package wpadminref
 */

?>
<section class="section section-with-columns section-tabs" id="tabs">
	<header class="section-header">
		<h2>Tabs</h2>
		<hr/>
	</header>
	<div class="section-content">
		<div class="grid-2">
			<div>
				<h2 class="nav-tab-wrapper">
					<a href="javascript:void(0)" class="nav-tab nav-tab-active">Tab #01</a>
					<a href="javascript:void(0)" class="nav-tab">Tab #02</a>
					<a href="javascript:void(0)" class="nav-tab">Tab #03</a>
				</h2>
				<div class="tabs-content">
					<h3>Settings tabs</h3>
					<p>
						These are native WordPress tabs. Unfortunately they are not supported by JS :(. Fortunately, you can code it yourself!
					</p>
					<h3><strong>Here's the tutorial!</strong></h3>
					<p><strong>Markup: </strong></p>
					<script type="text/plain" class="line-numbers language-markup">
						<div id="tabs">
							<ul>
								<li><a href="#tab-01">Tab #01</a></li>
								<li><a href="#tab-02">Tab #02</a></li>
								<li><a href="#tab-03">Tab #03</a></li>
							</ul>
							<div id="tab-01">Tab #01 content here</div>
							<div id="tab-02">Tab #02 content here</div>
							<div id="tab-03">Tab #03 content here</div>
						</div>
					</script>
					<p><strong>JS: </strong></p>
					<pre class="line-numbers language-js">
						<code class="line-numbers language-js">
							(function($) {
								$(function(){
									$('#tabs').tabs();
								});
							})(jQuery);
						</code>
					</pre>
					<p>That's all folks!</p>
				</div>
				</div>
				<div class="column-code h-500">
					<pre class="line-numbers language-markup">
						<code class="line-numbers language-php">
							&lt;h2 class=&quot;nav-tab-wrapper&quot;&gt;
								&lt;a href=&quot;javascript:void(0)&quot; class=&quot;nav-tab &lt;?php echo $active_tab == 'display_options' ? 'nav-tab-active' : ''; ?&gt;&quot;&gt;Tab #01&lt;/a&gt;
								&lt;a href=&quot;javascript:void(0)&quot; class=&quot;nav-tab &lt;?php echo $active_tab == 'display_options' ? 'nav-tab-active' : ''; ?&gt;&quot;&gt;Tab #02&lt;/a&gt;
								&lt;a href=&quot;javascript:void(0)&quot; class=&quot;nav-tab &lt;?php echo $active_tab == 'display_options' ? 'nav-tab-active' : ''; ?&gt;&quot;&gt;Tab #03&lt;/a&gt;
							&lt;/h2&gt;
							&lt;div class=&quot;tabs-content&quot;&gt;
								&lt;h3&gt;Settings tabs&lt;/h3&gt;
								&lt;p&gt;
									&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and 
									praising pain was born and I will give you a complete account of the system, and 
									expound the actual teachings of the great explorer of the truth, the master-builder 
									of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it 
									is pleasure, but because those who do not know how to pursue pleasure rationally 
									encounter consequences that are extremely painful.
								&lt;/p&gt;
								&lt;p&gt;
									Nor again is there anyone who loves or pursues or desires to obtain pain of itself, 
									because it is pain, but because occasionally circumstances occur in which toil and 
									pain can procure him some great pleasure. To take a trivial example, which of us 
									ever undertakes laborious physical exercise, except to obtain some advantage from it? 
									But who has any right to find fault with a man who chooses to enjoy a pleasure that has 
									no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;
								&lt;/p&gt;
								&lt;p&gt;
									&lt;a href=&quot;javascript:void(0)&quot; target=&quot;_blank&quot; class=&quot;button button-primary&quot;&gt;Save changes&lt;/a&gt;
								&lt;/p&gt;
							&lt;/div&gt;
						</code>
					</pre>
				</div>
			</div>
		</div>
	</div>
</section>
