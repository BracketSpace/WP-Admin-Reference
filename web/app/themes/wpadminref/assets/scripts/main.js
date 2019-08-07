sectionMenu();


jQuery( '.button-switch-view' ).click( function (e) {
	e.preventDefault();
	jQuery(this).text( function(i, text){
			return text === "Change view to markup" ? "Change view to code" : "Change view to markup";
	})
	const section = jQuery( this ).data( 'action' );
	console.log(section);

	const code = jQuery( section ).children( '.section-content' ).html();
	const section_markup_code = jQuery( section ).find( '.section-markup-code code' );

	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true,
		'break-lines': 200,
		'indent': 0,
		'remove-initial-line-feed': false,
		'tabs-to-spaces': 2,
		'spaces-to-tabs': 2
	});

	jQuery( section_markup_code ).text( code );
	Prism.highlightAll( jQuery( section_markup_code )[0] );
	
	jQuery( section ).toggleClass( 'code-view' );

});