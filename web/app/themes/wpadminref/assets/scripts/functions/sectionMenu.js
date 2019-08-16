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
			tolerance: '60',
		} );
	} );

  jQuery("a").on( 'click', function( e ) {
    if ( this.hash !== '' ) {
      e.preventDefault();
      var hash = this.hash;
      jQuery('html, body').animate( {
        scrollTop: jQuery( hash ).offset().top -50
      }, 300, function(){
        window.location.hash = hash;
      } );
    }
  });
}
