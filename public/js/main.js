var moduleMain = (function(){
	
	return {
		showMenu: function() {
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
		},
		parralax: function(){
			var bg = document.querySelector('.bg-img'),
				img = document.querySelector('.js-img'),
				height = img.height,
				container = bg.parentElement;

			console.log(img);
			console.log(height);
			console.log(container);
			container.style.height = height + 'px';
			
			window.addEventListener('scroll', function(){
				var wScroll = document.body.scrollTop;


				var	strafe = wScroll / 45,
					strafeAmount = - strafe + '%', 
					transformString = `translate3D(0, ${strafeAmount}, 0)`;
				
				bg.style.transform = transformString;
			});
		}
	}
})();

moduleMain.showMenu();
moduleMain.parralax();