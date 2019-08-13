sectionMenu();

jQuery( '.button-switch-view' ).click( function (e) {
	e.preventDefault();
	e.stopPropagation();
	e.stopImmediatePropagation();
	jQuery( this ).text() === 'Show code' ? jQuery(this).text('Show markup') : jQuery(this).text('Show code');

	const section = jQuery( this ).data( 'action' );
	const code = jQuery( section ).children( '.section-content' ).html();
	const section_markup_code = jQuery( section ).find( '.section-markup-code code' );

	jQuery( section_markup_code ).text( code );
	Prism.highlightAll( jQuery( section_markup_code )[0] );
	
	jQuery( section ).toggleClass( 'code-view' );

});

Prism.plugins.NormalizeWhitespace.setDefaults({
	'remove-trailing': true,
	'remove-indent': true,
	'left-trim': true,
	'right-trim': true,
	'break-lines': 200,
});

