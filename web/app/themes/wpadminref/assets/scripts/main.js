jQuery( '.section-with-columns' ).each( function( index ) {
	const column_markup = jQuery( this ).find( '.column-content' ).html();
	const column_code = jQuery( this ).find( '.column-code code' );

	jQuery( column_code ).text( column_markup );
	Prism.highlightAll( jQuery( column_code )[0] );
});

jQuery(document).on('ready', function( jQuery ){
	postboxes.init();
	postboxes.add_postbox_toggles();
	postboxes._mark_area()
});

jQuery( document ).ready( function() {
	if ( jQuery(window).width() < 1199 && jQuery(window).load() ) {
		jQuery( '.section-notices .notice' ).each( function( index ) {
			const markup = jQuery(this).prop('outerHTML');
			const code = jQuery(' .notices-code-column .block:nth-child(' + (index + 1) + ') ').html();
			console.log(index);
			jQuery( code ).insertAfter( 
				jQuery( jQuery(this) ) 
			);
		});
	}

	if ( jQuery(window).width() < 783 && jQuery(window).load() ) {
		jQuery( '.share-buttons-top .fb-share-button' ).attr( 'data-size', 'large' );
	}
});

jQuery( document ).ready(function() {
	sectionMenu();
	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true
	});
});

