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
    <link rel="stylesheet" href="/css/vendor/normalize.css">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" type="text/css" href="/css/about.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="/fonts/open-sans/stylesheet.css">

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
						<li><a href="/">Главная</a></li>
						<li><a href="/catalog">Каталог</a></li>
						<li><a href="">Элитные подарки</a></li>
						<li><a href="">Эконом-подарки</a></li>
						<li><a href="/about">О магазине</a></li>
					</ul>
				</div>
			</header>
			<section class="container">
				@yield('content')
			</section>
			<footer class="footer">
				<div>Powered by TaniaDan © 2017</div>
			</footer>
		</div>
	</div>
</body>
</html>