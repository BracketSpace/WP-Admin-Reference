jQuery( document ).ready(function() {

	jQuery( '.section' ).each( function() {

		var $section_id = jQuery( this ).attr( 'id' );

		var waypoint = new Waypoint({
			element: document.getElementById( $section_id ),
			handler: function( direction ) {
				jQuery( '.menu-top' ).removeClass( 'current' );
				jQuery( '.menu-top[data-menu="' + $section_id + '"' ).addClass( 'current' );
			},
			continuous: false,
			offset: '0'
		})
	});
});