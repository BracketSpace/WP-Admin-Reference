<?php
/**
 * Section spinners view
 *
 * @package wpadminref
 */

?>
<section class="section section-spinners" id="spinners">
	<h1>Spinners</h1>
	<div class="section-content">
		<div class="grid-2">
			<div class="grid-column">
				<h3>@1x</h3>
				<div class="block">
					<img src="<?php echo esc_url( get_admin_url() . '/images/spinner.gif' ); ?>" />
					<pre class="line-numbers language-markup">
						<code class="language-markup">
							&lt;img src=&quot;&lt;?php echo esc_url( get_admin_url() . '/images/spinner.gif' ); ?&gt;&quot; /&gt;
						</code>
						<p>or</p>
						<code class="language-markup">
							&lt;span class=&quot;spinner is-active&quot;&gt;&lt;/span&gt;
						</code>
					</pre>
				</div>
				<div class="block">
					<img src="<?php echo esc_url( get_admin_url() . '/images/loading.gif' ); ?>" />
					<pre class="line-numbers language-markup">
						<code class="language-markup">
							&lt;img src=&quot;&lt;?php echo esc_url( get_admin_url() . '/images/loading.gif' ); ?&gt;&quot; /&gt;
						</code>
					</pre>
				</div>
				<div class="block">
					<img src="<?php echo esc_url( get_admin_url() . '/images/wpspin_light.gif' ); ?>" />
					<pre class="line-numbers language-markup">
						<code class="language-markup">
							&lt;img src=&quot;&lt;?php echo esc_url( get_admin_url() . '/images/wpspin_light.gif' ); ?&gt;&quot; /&gt;
						</code>
					</pre>
				</div>
				<div class="block">
					<img src="<?php echo esc_url( includes_url() . '/js/tinymce/skins/lightgray/img/loader.gif' ); ?>" />
					<pre class="line-numbers language-markup">
						<code class="language-markup">
							&lt;img src=&quot;&lt;?php echo esc_url( includes_url() . '/js/tinymce/skins/lightgray/img/loader.gif' ); ?&gt;&quot; /&gt;
						</code>
					</pre>
				</div>
				<div class="block">
					<img src="<?php echo esc_url( includes_url() . '/js/thickbox/loadingAnimation.gif' ); ?>" />
					<pre class="line-numbers language-markup">
						<code class="language-markup">
							&lt;img src=&quot;&lt;?php echo esc_url( includes_url() . '/js/thickbox/loadingAnimation.gif' ); ?&gt;&quot; /&gt;
						</code>
					</pre>
				</div>
			</div>
			<div class="grid-column">
				<h3>@2x</h3>
				<div class="block">
					<img src="<?php echo esc_url( get_admin_url() . '/images/spinner-2x.gif' ); ?>" />
					<pre class="line-numbers language-markup">
						<code class="language-markup">
							&lt;img src=&quot;&lt;?php echo esc_url( get_admin_url() . '/images/spinner-2x.gif' ); ?&gt;&quot; /&gt;
						</code>
					</pre>
				</div>
				<div class="block">
					<img src="<?php echo esc_url( get_admin_url() . '/images/wpspin_light-2x.gif' ); ?>" />
					<pre class="line-numbers language-markup">
						<code class="language-markup">
							&lt;img src=&quot;&lt;?php echo esc_url( get_admin_url() . '/images/wpspin_light-2x.gif' ); ?&gt;&quot; /&gt;
						</code>
					</pre>
				</div>
			</div>
		</div>
	</div>
</section>
