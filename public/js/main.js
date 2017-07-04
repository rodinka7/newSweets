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
				} else {
					menu.style.position = 'relative';
				}
			});
		},

		parralax: function(){
			var bg1 = document.querySelector('.js-bg-1'),
				header1 = document.querySelector('.js-header-1'),
				bottom1 = bg1.getBoundingClientRect().bottom,
		
				bg2 = document.querySelector('.js-bg-2'),
				header2 = document.querySelector('.js-header-2'),
				bottom2 = bg2.getBoundingClientRect().bottom,
				
				
				bg3 = document.querySelector('.js-bg-3'),
				header3 = document.querySelector('.js-header-3');
			
			window.addEventListener('scroll', function(){					
				var scrolled = document.body.scrollTop,
					header,
					bg,
					newScroll;	
			
				if (scrolled <= bottom1) {
					header = header1;
					bg = bg1;
					blockScroll = scrolled;
				} else if (bottom1 < scrolled && scrolled <= bottom2) {
					header = header2,
					bg = bg2,
					blockScroll = scrolled - bottom1;
				} else if (scrolled > bottom2) {
					header = header3,
					bg = bg3,
					blockScroll = scrolled - bottom2;
				}
				
				var strafeHeader = blockScroll / 45,
					strafeBg = blockScroll / 20,
					
					strafeAmountHeader = - strafeHeader + '%',
					strafeAmountBg = 20 - strafeBg + '%', 

					transformString = `translate3D(0, ${strafeAmountHeader}, 0)`,
					bgPos = `0 ${strafeAmountBg}`;

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
				products = document.querySelectorAll('.js-product');

			window.addEventListener('scroll', function(){
				var scrolled = document.body.scrollTop;

				if (scrolled >= top) {
					products.forEach(function(item){
						item.style.opacity = 1;
					})
				}
			});
		},

		showArrow: function(){
			var bg = document.querySelector('.js-bg-1'),
				top = bg.getBoundingClientRect().top,
				arrow = document.querySelector('.js-arrow');

			window.addEventListener('scroll', function(){
				var scrolled = document.body.scrollTop;

				if (scrolled >= top) {
					arrow.style.opacity = 1;
				} else {
					arrow.style.opacity = 0;
				}
			})
		},

		arrowTop: function(){
			var arrow = document.querySelector('.js-arrow');

			arrow.addEventListener('click', function(e){
				e.preventDefault();
				var scrolled = document.body.scrollTop;

				var timer = setInterval(function(){
					if (scrolled > 0) {
						scrolled -= 50;
						document.body.scrollTop = scrolled;
					} else {
						clearInterval(timer);
					}
				}, 10);
			});
		},

		slider: function() {
			var sliderUp = document.querySelector('.js-slider-up'),
				sliderDown = document.querySelector('.js-slider-down'),
				prevBtn = document.querySelector('.product-prev'),
				nextBtn = document.querySelector('.product-next'),
				slides = document.querySelectorAll('.js-product');

			prevBtn.addEventListener('click', function(e){
				e.preventDefault();

				var newPosUp = sliderPosUp - slideWidth,
					newPosDown = sliderPosDown + slideWidth,
					nodeUp,
					nodeDown;
				

				sliderUp.style.transform = `translateX(${newPosUp}px)`;
				sliderDown.style.transform = `translateX(${newPosDown}px)`;
				
				sliderPosUp = newPosUp;	
				sliderPosDown = newPosDown;

				nodeUp = slides[numUp].cloneNode(true);
				sliderUp.appendChild(nodeUp);
				
				if (newPosUp < 0) {
					sliderUp.style.float = 'left';
					sliderDown.style.float = 'right';
				} else {
					sliderUp.style.float = 'right';
					sliderDown.style.float = 'left';
				}

				if (numUp < length - 1) {
					numUp += 1;
				} else {
					numUp = 0;
				}

				nodeDown = slides[numDown].cloneNode(true);
				sliderDown.insertBefore(nodeDown, sliderDown.firstElementChild);

				if (numDown > 0) {
					numDown -= 1;
				} else {
					numDown = length - 1;
				}
			});

			nextBtn.addEventListener('click', function(e){
				e.preventDefault();
				
				var newPosUp = sliderPosUp + slideWidth,
					newPosDown = sliderPosDown - slideWidth,
					nodeUp,
					nodeDown;

				sliderUp.style.transform = `translateX(${newPosUp}px)`;
				sliderDown.style.transform = `translateX(${newPosDown}px)`;
				
				sliderPosUp = newPosUp;	
				sliderPosDown = newPosDown;

				nodeUp = slides[numDown].cloneNode(true);
				sliderUp.insertBefore(nodeUp, sliderUp.firstElementChild);
				
				if (newPosUp < 0) {
					sliderUp.style.float = 'left';
					sliderDown.style.float = 'right';
				} else {
					sliderUp.style.float = 'right';
					sliderDown.style.float = 'left';
				}
				if (numUp > 0) {
					numUp -= 1;
				} else {
					numUp = length - 1;
				}

				nodeDown = slides[numUp].cloneNode(true);
				sliderDown.appendChild(nodeDown);
				
				if (numDown < length - 1) {
					numDown += 1;
				} else {
					numDown = 0;
				}
			});
		}

	}
})();

moduleMain.showMenu();
moduleMain.parralax();
moduleMain.showItems();
moduleMain.showBanners();
moduleMain.showProducts();
moduleMain.showArrow();
moduleMain.arrowTop();
moduleMain.slider();