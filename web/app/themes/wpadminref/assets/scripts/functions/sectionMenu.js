function sectionMenu() {

	const elm = document.querySelector('#adminmenu');
	const ms = new MenuSpy(elm,{
		activeClass : 'current',
		threshold : 15,
	} );

	jQuery( 'a' ).on( 'click', function( e ) {
		if ( this.hash !== '' ) {
			e.preventDefault();
			var hash = this.hash;
			jQuery( 'html, body' ).animate( {
				scrollTop: jQuery( hash ).offset().top
			}, 300, function(){
				window.location.hash = hash;
			} );
		}
	});

	jQuery( '.menu-top' ).on( 'click', function() {
		jQuery( '#wpwrap' ).removeClass( 'wp-responsive-open' );
	});
}
