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
			<div class="column-content markup-holder">
				<h2 class="nav-tab-wrapper">
					<a href="#" class="nav-tab nav-tab-active">Tab #01</a>
					<a href="#" class="nav-tab">Tab #02</a>
					<a href="#" class="nav-tab">Tab #03</a>
				</h2>
				<div class="tabs-content">
					<h3>Settings tabs</h3>
					<p>
						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
					</p>
					<table class="form-table">
						<tbody>
							<tr>
								<th scope="row"><label for="input_id">Regular field</label></th>
								<td><input name="input_id" type="text" id="input_id" value="Lorem Ipsum is that!" class="regular-text"></td>
							</tr>
						<tbody>
							<tr>
								<th scope="row"><label for="input_id">Regular field 2</label></th>
								<td><input name="input_id" type="text" id="input_id" value="It is a long established fact!" class="regular-text"></td>
							</tr>
							<tr>
								<th scope="row">Checkbox</th>
								<td>
									<fieldset>
										<legend class="screen-reader-text">
											<span>checkbox</span>
										</legend>
										<label for="checkbox_id">
											<input name="checkbox_id" type="checkbox" id="checkbox_id" value="1">
											Just check me!
										</label>
									</fieldset>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="select_id">Select</label></th>
								<td>
									<select name="select_id" id="select_id">
										<option selected="selected" value="option_one">Option #1</option>
										<option value="option_2">Option #2</option>
										<option value="option_3">Option #3</option>
										<option value="option_4">Option #4</option>
									</select>
								</td>
							</tr>

							<tr>
								<th scope="row">Settings tabs paragraph</th>
								<td>
									<p>
										It is a long established fact that a reader will be distracted by the readable 
										content of a page when looking at its layout. The point of using Lorem Ipsum is 
										that it has a more-or-less normal distribution of letters, as opposed to using 
										'Content here, content here', making it look like readable English.
									</p>
								</td>
							</tr>
						</tbody>
					</table>
					<p>
						<a href="javascript:void(0)" target="_blank" class="button button-primary">Save changes</a>
					</p>
				</div>
			</div>
			<div class="column-code">
				<pre class="line-numbers language-markup">
					<code class="line-numbers language-markup">
						<h2 class="nav-tab-wrapper">
							<a href="#" class="nav-tab" <?php echo esc_html( $active_tab ) === 'display_options' ? 'nav-tab-active' : ''; ?>>Tab #01</a>
							<a href="#" class="nav-tab" <?php echo esc_html( $active_tab ) === 'display_options' ? 'nav-tab-active' : ''; ?>>Tab #02</a>
							<a href="#" class="nav-tab" <?php echo esc_html( $active_tab ) === 'display_options' ? 'nav-tab-active' : ''; ?>>Tab #03</a>
						</h2>
						<div class="tabs-content">
							<h3>Settings tabs</h3>
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
							</p>
							<table class="form-table">
								<tbody>
									<tr>
										<th scope="row"><label for="input_id">Regular field</label></th>
										<td><input name="input_id" type="text" id="input_id" value="Lorem Ipsum is that!" class="regular-text"></td>
									</tr>
								<tbody>
									<tr>
										<th scope="row"><label for="input_id">Regular field 2</label></th>
										<td><input name="input_id" type="text" id="input_id" value="It is a long established fact!" class="regular-text"></td>
									</tr>
									<tr>
										<th scope="row">Checkbox</th>
										<td>
											<fieldset>
												<legend class="screen-reader-text">
													<span>checkbox</span>
												</legend>
												<label for="checkbox_id">
													<input name="checkbox_id" type="checkbox" id="checkbox_id" value="1">
													Just check me!
												</label>
											</fieldset>
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="select_id">Select</label></th>
										<td>
											<select name="select_id" id="select_id">
												<option selected="selected" value="option_one">Option #1</option>
												<option value="option_2">Option #2</option>
												<option value="option_3">Option #3</option>
												<option value="option_4">Option #4</option>
											</select>
										</td>
									</tr>

									<tr>
										<th scope="row">Settings tabs paragraph</th>
										<td>
											<p>
												It is a long established fact that a reader will be distracted by the readable 
												content of a page when looking at its layout. The point of using Lorem Ipsum is 
												that it has a more-or-less normal distribution of letters, as opposed to using 
												'Content here, content here', making it look like readable English.
											</p>
										</td>
									</tr>
								</tbody>
							</table>
							<p>
								<a href="javascript:void(0)" target="_blank" class="button button-primary">Save changes</a>
							</p>
						</div>
					</code>
				</pre>
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
