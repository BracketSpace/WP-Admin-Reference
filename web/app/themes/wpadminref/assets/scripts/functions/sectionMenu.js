export function init() {
	$( '.section' ).each( function() {
		const section_id = $( this ).attr( 'id' );
		const waypoint = new Waypoint( {
			element: document.getElementById( section_id ),
			handler( direction ) {
				$( '.menu-top' ).removeClass( 'current' );
				$( '.menu-top[data-menu="' + section_id + '"' ).addClass( 'current' );
			},
			continuous: false,
			offset: '0',
		} );
	} );
}
