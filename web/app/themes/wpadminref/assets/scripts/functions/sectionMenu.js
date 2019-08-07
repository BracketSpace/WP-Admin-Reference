function sectionMenu() {
	jQuery( '.section' ).each( function() {
		const section_id = jQuery( this ).attr( 'id' );
		const waypoint = new Waypoint( {
			element: document.getElementById( section_id ),
			handler( direction ) {
				jQuery( '.menu-top' ).removeClass( 'current' );
				jQuery( '.menu-top[data-menu="' + section_id + '"' ).addClass( 'current' );
			},
			continuous: false,
			offset: '0',
		} );
	} );
}