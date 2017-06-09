<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Сладкие новогодние подарки</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sweets') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="/css/vendor/normalize.css">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
	<div id="app">
		<div class="container">
			<header>
				<div class="top-menu">
					<nav class="top-menu__nav">
						<ul class="top-menu__list">
							<li><a href="">Войти</a></li>
							<li><a href="">Регистрация</a></li>
							<li><a href="">Выйти</a></li>
						</ul>
					</nav>
					<div class="top-menu__right">
						<div class="top-search">
							<form action="">
								<input type="text" >
								<button>
									<i class="fa fa-2x fa-search"></i>
								</button>
							</form>
						</div>
						<div class="top-cart">
							<i class="fa fa-2x fa-shopping-cart"></i>
							0 товаров
						</div>
					</div>
				</div>
				<img src="/img/logonew.jpg" alt="Кондитерский магазин Ласощи" class="top-img">
				<div class="menu-main">
					<ul>
						<li><a href="">Товары</a></li>
						<li><a href="">Товары</a></li>
						<li><a href="">Товары</a></li>
						<li><a href="">Товары</a></li>
						<li><a href="">Товары</a></li>
						<li><a href="">Товары</a></li>
					</ul>
				</div>
			</header>
			<section class="content">
				<section class="content-main">
					<img src="/img/bgnew.jpg" alt="" alt class="top-img">
					<div class="content-header">
						<h2>Новогодние сладкие подарки</h2>
						<h1>2018</h1>
						<h3>Мы сделаем Вашу жизнь сладкой и изысканной</h3>
						<a class="cart-link red" href="">
							<i class="fa fa-3x fa-shopping-cart"></i>
						</a>
					</div>
				</section>
			</section>
			<section class="content">
				<div class="content-second">
					<div class="content-box">
						<div class="banner">
							<a class="banner-link yellow" href="">
								<img src="/img/presents/1.png" alt="">
								<div class="banner-desc">
									<h3>Подарки в элитной упаковке</h3>
								</div>
							</a>
							<a class="cart-box" href="">
								<i class="fa fa-2x fa-shopping-cart"></i>
							</a>
						</div>
						<div class="banner">
							<a class="banner-link red" href="">
								<img src="/img/presents/10.png" alt="">
								<div class="banner-desc">
									<h3>Подарки в стандартной упаковке</h3>
								</div>
							</a>
							<a class="cart-box" href="">
								<i class="fa fa-2x fa-shopping-cart"></i>
							</a>
						</div>
						<div class="banner">
							<a class="banner-link green" href="">
								<img src="/img/presents/12.png" alt="">
								<div class="banner-desc">
									<h3>Подарки весом до 1кг</h3>
								</div>
							</a>
							<a class="cart-box" href="">
								<i class="fa fa-2x fa-shopping-cart"></i>
							</a>
						</div>
						<div class="banner">
							<a class="banner-link violet" href="">
								<img src="/img/presents/17.png" alt="">
								<div class="banner-desc">
									<h3>Подарки весом больше 1кг</h3>
								</div>
							</a>
							<a class="cart-box" href="">
								<i class="fa fa-2x fa-shopping-cart"></i>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="content-main">
					<img src="/img/candynew.jpg" alt="" class="top-img">
					<div class="content-header">
						<h2>Новогодние сладкие подарки</h2>
						<h1>2018</h1>
						<h3>Мы сделаем Вашу жизнь сладкой и изысканной</h3>
						<a class="cart-link violet" href="">
							<i class="fa fa-3x fa-shopping-cart"></i>
						</a>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="content-fourth">
					<div class="content-box">
						<div class="banner">
							<a class="banner-link fourth" href="">
								<span>
									<i class="fa fa-5x fa-star"></i>
								</span>
								<div class="banner-desc fourth">
									<h3>Скидки постоянным</h3>
									<h4>и оптовым покупателям</h4>
								</div>
							</a>
							<a class="cart-box fourth" href="">
								<img src="/img/arr-banner.png" alt="">
							</a>
						</div>
						<div class="banner">
							<a class="banner-link fourth" href="">
								<span>
									<i class="fa fa-5x fa-truck"></i>
								</span>
								<div class="banner-desc fourth">
									<h3>Оперативная доставка</h3>
									<h4>по Украине</h4>
								</div>
							</a>
							<a class="cart-box fourth" href="">
								<img src="/img/arr-banner.png" alt="">
							</a>
						</div>
						<div class="banner">
							<a class="banner-link fourth" href="">
								<span>
									<i class="fa fa-5x fa-phone-square"></i>
								</span>
								<div class="banner-desc fourth">
									<h3>Мы на связи ежедневно</h3>
									<h4>с 8.00 до 22.00</h4>
								</div>
							</a>
							<a class="cart-box fourth" href="">
								<img src="/img/arr-banner.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="content-main">
					<img src="/img/giftnew.jpg" alt="" class="top-img">
					<div class="content-header">
						<h2>Новогодние сладкие подарки</h2>
						<h1>2018</h1>
						<h3>Мы сделаем Вашу жизнь сладкой и изысканной</h3>
						<a class="cart-link green" href="">
							<i class="fa fa-3x fa-shopping-cart"></i>
						</a>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="content-sixth">
					<div class="box-heading">
						<h2>Наши сладкие подарки</h2>
					</div>
					<div class="box-content">
						<div class="box-product">
							<div class="box-image">
								<img src="/img/presents/11.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</body>
</html>