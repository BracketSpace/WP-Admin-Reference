sectionMenu();

jQuery( '.button-switch-view' ).click( function (e) {
	e.preventDefault();
	jQuery(this).text( function( text ){
		return text == "Change view to code" ? "Change view to markup" : "Change view to code";
	})
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

