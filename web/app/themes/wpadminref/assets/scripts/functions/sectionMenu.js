function sectionMenu() {

	const elm = document.querySelector('#adminmenu');
	const ms = new MenuSpy(elm,{
		activeClass : 'current',
		threshold : 15,
	} );
}
