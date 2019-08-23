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
	</header>
	<div class="section-content">
		<table class="wp-list-table widefat fixed striped posts">
			<thead>
				<tr>
					<td id="cb" class="manage-column column-cb check-column">
						<label class="screen-reader-text" for="cb-select-all-1">Select All</label>
						<input id="cb-select-all-1" type="checkbox">
					</td>
					<th scope="col" id="title" class="manage-column column-title column-primary sortable desc">
						<span>Title</span>
					</th>
					<th scope="col" id="author" class="manage-column column-author">Author</th>
					<th scope="col" id="categories" class="manage-column column-categories">Categories</th>
					<th scope="col" id="tags" class="manage-column column-tags">Tags</th>
					<th scope="col" id="comments" class="manage-column column-comments num sortable desc">
						<span>
							<span class="vers comment-grey-bubble" title="Comments">
								<span class="screen-reader-text">Comments</span>
							</span>
						</span>
					</th>
					<th scope="col" id="date" class="manage-column column-date sortable asc">
						<a href="javascript:void(0)">
							<span>Date</span><span class="sorting-indicator"></span>
						</a>
					</th>
				</tr>
			</thead>

			<tbody id="the-list">

			<?php for ( $i = 1; $i <= 10; $i++ ) { ?>
				<tr id="post-<?php echo esc_html( $i ); ?>" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-Dummy category">
					<th scope="row" class="check-column">
						<label class="screen-reader-text" for="cb-select-1">Select Post #<?php echo esc_html( $i ); ?></label>
						<input id="cb-select-1" type="checkbox" name="post[]" value="1">
						<div class="locked-indicator">
							<span class="locked-indicator-icon" aria-hidden="true"></span>
							<span class="screen-reader-text">
								“Post #<?php echo esc_html( $i ); ?>” is locked
							</span>
						</div>
					</th>
					<td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
						<div class="locked-info">
							<span class="locked-avatar"></span> 
							<span class="locked-text"></span>
						</div>
						<strong>
							<a class="row-title" href="javascript:void(0)" aria-label="“Post #<?php echo esc_html( $i ); ?>” (Edit)">Post #<?php echo esc_html( $i ); ?></a>
						</strong>

						<div class="row-actions">
							<span class="edit"><a href="javascript:void(0)" aria-label="Edit “Post #<?php echo esc_html( $i ); ?>”">Edit</a> | </span>
							<span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Post #<?php echo esc_html( $i ); ?>” inline" aria-expanded="false">Quick Edit</button> | </span>
							<span class="trash"><a href="javascript:void(0)" class="submitdelete" aria-label="Move “Post #<?php echo esc_html( $i ); ?>” to the Trash">Trash</a> | </span>
							<span class="view"><a href="javascript:void(0)" rel="bookmark" aria-label="View “Post #<?php echo esc_html( $i ); ?>”">View</a></span>
						</div>
						<button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
					</td>
					<td class="author column-author" data-colname="Author">
						<a href="javascript:void(0)">dummy@emailaddress</a>
					</td>
					<td class="categories column-categories" data-colname="Categories">
						<a href="javascript:void(0)">Dummy category</a>
					</td>
					<td class="tags column-tags" data-colname="Tags">
						<span aria-hidden="true">—</span>
						<span class="screen-reader-text">No tags</span>
					</td>
					<td class="comments column-comments" data-colname="Comments">		
					<div class="post-com-count-wrapper">
						<a href="javascript:void(0)" class="post-com-count post-com-count-approved">
							<span class="comment-count-approved" aria-hidden="true">1</span>
							<span class="screen-reader-text">1 comment</span>
						</a>
						<span class="post-com-count post-com-count-pending post-com-count-no-pending">
							<span class="comment-count comment-count-no-pending" aria-hidden="true">0</span>
							<span class="screen-reader-text">No pending comments</span></span>
						</div>
					</td>
					<td class="date column-date" data-colname="Date">Published<br>
						<abbr title="2019/08/22 9:00:46 am">2 hours ago</abbr>
					</td>
				</tr>
			<?php } ?>

			</tbody>
			<tfoot>
				<tr>
					<td class="manage-column column-cb check-column">
						<label class="screen-reader-text" for="cb-select-all-2">Select All</label>
						<input id="cb-select-all-2" type="checkbox" >
					</td>
					<th scope="col" class="manage-column column-title column-primary sortable desc">
						<span>Title</span>
					</th>
					<th scope="col" class="manage-column column-author">Author</th>
					<th scope="col" class="manage-column column-categories">Categories</th>
					<th scope="col" class="manage-column column-tags">Tags</th>
					<th scope="col" class="manage-column column-comments num sortable desc">
						<span>
							<span class="vers comment-grey-bubble" title="Comments">
								<span class="screen-reader-text">Comments</span>
							</span>
						</span>
					</th>
					<th scope="col" class="manage-column column-date sortable asc">
						<a href="javascript:void(0)">
							<span>Date</span>
							<span class="sorting-indicator"></span>
						</a>
					</th>
				</tr>
			</tfoot>
		</table>

		<div class="grid-2">
			<div class="grid-column column-code">
				<h3>Static HTML Code</h3>
				<script type="text/plain" class="language-markup">
					<table class="wp-list-table widefat fixed striped posts">
						<thead>
							<tr>
								<td id="cb" class="manage-column column-cb check-column">
									<label class="screen-reader-text" for="cb-select-all-1">Select All</label>
									<input id="cb-select-all-1" type="checkbox">
								</td>
								<th scope="col" id="title" class="manage-column column-title column-primary sortable desc">
									<span>Title</span>
								</th>
								<th scope="col" id="author" class="manage-column column-author">Author</th>
								<th scope="col" id="categories" class="manage-column column-categories">Categories</th>
								<th scope="col" id="tags" class="manage-column column-tags">Tags</th>
								<th scope="col" id="comments" class="manage-column column-comments num sortable desc">
									<span>
										<span class="vers comment-grey-bubble" title="Comments">
											<span class="screen-reader-text">Comments</span>
										</span>
									</span>
								</th>
								<th scope="col" id="date" class="manage-column column-date sortable asc">
									<a href="javascript:void(0)">
										<span>Date</span><span class="sorting-indicator"></span>
									</a>
								</th>
							</tr>
						</thead>

						<tbody id="the-list">
							<?php
							for ( $i = 1; $i <= 10; $i++ ) {
								?>
								<tr id="post-<?php echo esc_html( $i ); ?>" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-Dummy category">
								<th scope="row" class="check-column">
									<label class="screen-reader-text" for="cb-select-1">Select Post #<?php echo esc_html( $i ); ?></label>
									<input id="cb-select-1" type="checkbox" name="post[]" value="1">
									<div class="locked-indicator">
										<span class="locked-indicator-icon" aria-hidden="true"></span>
										<span class="screen-reader-text">
											“Post #<?php echo esc_html( $i ); ?>” is locked
										</span>
									</div>
								</th>
								<td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
									<div class="locked-info">
										<span class="locked-avatar"></span> 
										<span class="locked-text"></span>
									</div>
									<strong>
										<a class="row-title" href="javascript:void(0)" aria-label="“Post #<?php echo esc_html( $i ); ?>” (Edit)">Post #<?php echo esc_html( $i ); ?></a>
									</strong>

									<div class="row-actions">
										<span class="edit"><a href="javascript:void(0)" aria-label="Edit “Post #<?php echo esc_html( $i ); ?>”">Edit</a> | </span>
										<span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Post #<?php echo esc_html( $i ); ?>” inline" aria-expanded="false">Quick Edit</button> | </span>
										<span class="trash"><a href="javascript:void(0)" class="submitdelete" aria-label="Move “Post #<?php echo esc_html( $i ); ?>” to the Trash">Trash</a> | </span>
										<span class="view"><a href="javascript:void(0)" rel="bookmark" aria-label="View “Post #<?php echo esc_html( $i ); ?>”">View</a></span>
									</div>
									<button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
								</td>
								<td class="author column-author" data-colname="Author">
									<a href="javascript:void(0)">dummy@emailaddress</a>
								</td>
								<td class="categories column-categories" data-colname="Categories">
									<a href="javascript:void(0)">Dummy category</a>
								</td>
								<td class="tags column-tags" data-colname="Tags">
									<span aria-hidden="true">—</span>
									<span class="screen-reader-text">No tags</span>
								</td>
								<td class="comments column-comments" data-colname="Comments">		
								<div class="post-com-count-wrapper">
									<a href="javascript:void(0)" class="post-com-count post-com-count-approved">
										<span class="comment-count-approved" aria-hidden="true">1</span>
										<span class="screen-reader-text">1 comment</span>
									</a>
									<span class="post-com-count post-com-count-pending post-com-count-no-pending">
										<span class="comment-count comment-count-no-pending" aria-hidden="true">0</span>
										<span class="screen-reader-text">No pending comments</span></span>
									</div>
								</td>
								<td class="date column-date" data-colname="Date">Published<br>
									<abbr title="2019/08/22 9:00:46 am">2 hours ago</abbr>
								</td>
							</tr><?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td class="manage-column column-cb check-column">
									<label class="screen-reader-text" for="cb-select-all-2">Select All</label>
									<input id="cb-select-all-2" type="checkbox" >
								</td>
								<th scope="col" class="manage-column column-title column-primary sortable desc">
									<span>Title</span>
								</th>
								<th scope="col" class="manage-column column-author">Author</th>
								<th scope="col" class="manage-column column-categories">Categories</th>
								<th scope="col" class="manage-column column-tags">Tags</th>
								<th scope="col" class="manage-column column-comments num sortable desc">
									<span>
										<span class="vers comment-grey-bubble" title="Comments">
											<span class="screen-reader-text">Comments</span>
										</span>
									</span>
								</th>
								<th scope="col" class="manage-column column-date sortable asc">
									<a href="javascript:void(0)">
										<span>Date</span>
										<span class="sorting-indicator"></span>
									</a>
								</th>
							</tr>
						</tfoot>
					</table>
				</script>
			</div>
			<div class="grid-column">
				<h3>Using WP_List_Table</h3>
				<div class="metabox-holder ">
					<div id="post_list_01" class="postbox">
						<button type="button" class="handlediv" aria-expanded="true">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="true"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>1. Extending WP_List_Table</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										if ( ! class_exists( 'WP_List_Table' ) ) {
											require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_02" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>2. Creating a child class that extends WP_List_Table</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										class Items extends WP_List_Table {

											public function __construct() {

												parent::__construct( [
													'singular' => __( 'Item', 'bs' ),
													'plural'   => __( 'Items', 'bs' ),
													'ajax'     => false
												] );
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_03" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>3. The get_items() method</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/**
										 * Retrieve items data from the database
										 *
										 * @param int $per_page
										 * @param int $page_number
										 *
										 * @return mixed
										 */
										public static function get_items( $per_page = 5, $page_number = 1 ) {

											global $wpdb;

											$sql = "SELECT * FROM {$wpdb->prefix}items";

											if ( ! empty( $_REQUEST['orderby'] ) ) {
											$sql .= ' ORDER BY ' . esc_sql( $_REQUEST['orderby'] );
											$sql .= ! empty( $_REQUEST['order'] ) ? ' ' . esc_sql( $_REQUEST['order'] ) : ' ASC';
											}

											$sql .= " LIMIT $per_page";

											$sql .= ' OFFSET ' . ( $page_number - 1 ) * $per_page;


											$result = $wpdb->get_results( $sql, 'ARRAY_A' );

											return $result;
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_04" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>4. The delete_item() method</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/**
										 * Delete a item record.
										 *
										 * @param int $id item ID
										 */
										public static function delete_item( $id ) {
											global $wpdb;

											$wpdb->delete(
											"{$wpdb->prefix}items",
											[ 'ID' => $id ],
											[ '%d' ]
											);
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_05" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>5. The item_count() - Number of items in the database</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/**
										 * Returns the count of records in the database.
										 *
										 * @return null|string
										 */
										public static function record_count() {
											global $wpdb;

											$sql = "SELECT COUNT(*) FROM {$wpdb->prefix}items";

											return $wpdb->get_var( $sql );
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_06" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>6. Text displayed when no item data is available</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/** Text displayed when no item data is available */
										public function no_items() {
											_e( 'No items avaliable.', 'bs' );
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_07" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>7. The column_name method</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/**
										 * Method for name column
										 *
										 * @param array $item an array of DB data
										 *
										 * @return string
										 */
										function column_name( $item ) {

											// create a nonce
											$delete_nonce = wp_create_nonce( 'bs_delete_item' );

											$title = '<strong>' . $item['name'] . '</strong>';

											$actions = [
											'delete' => sprintf( '<a href="?page=%s&action=%s&item=%s&_wpnonce=%s">Delete</a>', esc_attr( $_REQUEST['page'] ), 'delete', absint( $item['ID'] ), $delete_nonce )
											];

											return $title . $this->row_actions( $actions );
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_08" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>8. Render a column when no column specific method exists.</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/**
										 * Render a column when no column specific method exists.
										 *
										 * @param array $item
										 * @param string $column_name
										 *
										 * @return mixed
										 */
										public function column_default( $item, $column_name ) {
											switch ( $column_name ) {
											case 'name':
											case 'manufacturer':
												return $item[ $column_name ];
											default:
												return print_r( $item, true ); //Show the whole array for troubleshooting purposes
											}
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_09" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>9. The column_cb method</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/**
										 * Render the bulk edit checkbox
										 *
										 * @param array $item
										 *
										 * @return string
										 */
										function column_cb( $item ) {
											return sprintf(
											'<input type="checkbox" name="bulk-delete[]" value="%s" />', $item['ID']
											);
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_10" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>10. The method get_columns()</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/**
										 *  Associative array of columns
										 *
										 * @return array
										 */
										function get_columns() {
											$columns = [
											'cb'      => '<input type="checkbox" />',
											'name'    => __( 'Name', 'bs' ),
											'manufacturer' => __( 'Manufacturer', 'bs' ),
											'price'    => __( 'Price', 'bs' )
											];

											return $columns;
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_11" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>11. The get_sortable_columns() method</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/**
										 * Columns to make sortable.
										 *
										 * @return array
										 */
										public function get_sortable_columns() {
											$sortable_columns = array(
											'name' => array( 'name', true ),
											'manufacturer' => array( 'manufacturer', false )
											'price' => array( 'price', false )
											);

											return $sortable_columns;
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_12" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>12. get_bulk_actions()</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/**
										 * Returns an associative array containing the bulk action
										 *
										 * @return array
										 */
										public function get_bulk_actions() {
											$actions = [
											'bulk-delete' => 'Delete'
											];

											return $actions;
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_13" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>13. The prepare_items() method</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										/**
										 * Handles data query and filter, sorting, and pagination.
										 */
										public function prepare_items() {

											$this->_column_headers = $this->get_column_info();

											/** Process bulk action */
											$this->process_bulk_action();

											$per_page     = $this->get_items_per_page( 'items_per_page', 5 );
											$current_page = $this->get_pagenum();
											$total_items  = self::record_count();

											$this->set_pagination_args( [
											'total_items' => $total_items,
											'per_page'    => $per_page
											] );


											$this->items = self::get_items( $per_page, $current_page );
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
					<div id="post_list_14" class="postbox closed">
						<button type="button" class="handlediv" aria-expanded="false">
							<span class="screen-reader-text">Metabox collapse</span>
							<span class="toggle-indicator" aria-hidden="false"></span>
						</button>
						<h2 class="hndle ui-sortable-handle">
							<span>14. Function process_bulk_action()</span>
						</h2>
						<div class="inside">
							<div class="main">
								<pre class="line-numbers language-php">
									<code class="line-numbers language-php">
										public function process_bulk_action() {

											// Detect when a bulk action is being triggered...
											if ( 'delete' === $this->current_action() ) {

											// In our file that handles the request, verify the nonce.
											$nonce = esc_attr( $_REQUEST['_wpnonce'] );

											if ( ! wp_verify_nonce( $nonce, 'bs_delete_item' ) ) {
												die( 'Go get a life script kiddies' );
											}
											else {
												self::delete_item( absint( $_GET['item'] ) );

												wp_redirect( esc_url( add_query_arg() ) );
												exit;
											}

											}

											// If the delete bulk action is triggered
											if ( ( isset( $_POST['action'] ) && $_POST['action'] == 'bulk-delete' ) || ( isset( $_POST['action2'] ) && $_POST['action2'] == 'bulk-delete' ) ) {

											$delete_ids = esc_sql( $_POST['bulk-delete'] );

											// loop over the array of record IDs and delete them
											foreach ( $delete_ids as $id ) {
												self::delete_item( $id );

											}

											wp_redirect( esc_url( add_query_arg() ) );
											exit;
											}
										}
									</code>
								</pre>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-code">
		<pre class="section-markup-code line-numbers language-markup"><code class="editor-code line-numbers language-markup"></code></pre>
	</div>
</section>
