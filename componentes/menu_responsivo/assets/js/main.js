(function() {
	document.getElementById('btn-menu').onclick = function() {
		let verificaMenu = document.getElementById('menu').className;
		if(verificaMenu == 'menu') {
			document.getElementById('menu').className = 'menu db';
		} else {
			document.getElementById('menu').className = 'menu';
		}		
	};
})();