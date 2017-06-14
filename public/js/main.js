(function(){

	function showMenu(){
		var menu = document.querySelector('#menu-main'),
			top = menu.getBoundingClientRect().top;
		
		window.addEventListener('scroll', function(){
			var scrolled = document.body.scrollTop;
			
			if (scrolled >= top){
				menu.style.position = 'fixed';
				menu.style.top = 0;
				menu.style.left = 0;
			} else {
				menu.style.position = 'relative';
			}
		});
	}

	function parralax() {
		var wScroll = document.body.scrollTop;
	}

	showMenu();
	parralax();
})();