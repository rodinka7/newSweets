var moduleMain = (function(){
	
	return {
		showMenu: function() {
			var menu = document.querySelector('.menu-main'),
				menuStatic = document.querySelector('.menu-main__static'),
				top = menuStatic.getBoundingClientRect().top;
		
			window.addEventListener('scroll', function(){
				var scrolled = document.body.scrollTop;
				
				if (scrolled > top){
					menu.style.position = 'fixed';
					menu.style.top = 0;
					menu.style.left = 0;
				} else if (scrolled <= top) {
					menu.style.position = 'relative';
				}
			});
		},

		parralax: function(){
			var bg1 = document.querySelector('.js-bg-1'),
				header1 = document.querySelector('.js-header-1'),
				container1 = document.querySelector('.js-content-1'),
				top1 = container1.getBoundingClientRect().top,
		
				bg2 = document.querySelector('.js-bg-2'),
				header2 = document.querySelector('.js-header-2'),
				container2 = document.querySelector('.js-content-2'),
				top2 = container2.getBoundingClientRect().top,
				
				
				bg3 = document.querySelector('.js-bg-3'),
				header3 = document.querySelector('.js-header-3');

			var header,
				bg;
			
			window.addEventListener('scroll', function(){
				var wScroll = document.body.scrollTop;

				var	strafeHeader = wScroll / 20,
					strafeBg = wScroll / 5,

					strafeAmountHeader = - strafeHeader + '%',
					strafeAmountBg = 70 - strafeBg + '%',

					transformString = `translate3D(0, ${strafeAmountHeader}, 0)`,
					bgPos = `0 ${strafeAmountBg}`;

				if (wScroll <= top1) {
					header = header1,
					bg = bg1;
				} else if (top1 < wScroll <= top2) {
					header = header2,
					bg = bg2;
				} else if (wScroll > top2) {
					header = header3,
					bg = bg3;
				}
				
				header.style.transform = transformString;
				bg.style.backgroundPosition = bgPos;
			});
		},

		showItems: function(){
			var bg = document.querySelector('.js-bg-1'),
				top = bg.getBoundingClientRect().top + 200,
				bannersLeft = document.querySelectorAll('.js-banner-left'),
				bannersRight = document.querySelectorAll('.js-banner-right');

			window.addEventListener('scroll', function(){
				var scrolled = document.body.scrollTop;

				if (scrolled >= top) {
					bannersLeft.forEach(function(item){
						item.style.transform = `translateX(0)`;
						item.style.opacity = 1;
					});
					bannersRight.forEach(function(item){
						item.style.transform = `translateX(0)`;
						item.style.opacity = 1;
					});
				}
			});
		},

		showBanners: function(){
			var bg = document.querySelector('.js-bg-2'),
				top = bg.getBoundingClientRect().top + 200,
				banners = document.querySelectorAll('.js-banner');

			window.addEventListener('scroll', function(){
				var scrolled = document.body.scrollTop;

				if (scrolled >= top) {
					banners.forEach(function(item){
						item.style.opacity = 1;
					});
				}
			});
		},

		showProducts: function(){
			var bg = document.querySelector('.js-bg-3'),
				top = bg.getBoundingClientRect().top + 200,
				products = document.querySelector('.js-products');

			window.addEventListener('scroll', function(){
				var scrolled = document.body.scrollTop;

				if (scrolled >= top) {
					products.style.opacity = 1;
				}
			});
		}

	}
})();

moduleMain.showMenu();
moduleMain.showItems();
moduleMain.showBanners();
moduleMain.showProducts();