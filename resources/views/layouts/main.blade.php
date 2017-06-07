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
			<img src="/img/logo.jpg" alt="Кондитерский магазин Ласощи" class="top-img">
		</div>
	</div>
</body>
</html>