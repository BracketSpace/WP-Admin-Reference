function sectionMenu() {

	const elm = document.querySelector('#adminmenu');
	const ms = new MenuSpy(elm,{
		activeClass : 'current',
		threshold : 15,
	} );

	jQuery("a").on( 'click', function( e ) {
		if ( this.hash !== '' ) {
			e.preventDefault();
			var hash = this.hash;
			jQuery('html, body').animate( {
				scrollTop: jQuery( hash ).offset().top -15
			}, 300, function(){
				window.location.hash = hash;
			} );
		}
	});
}
