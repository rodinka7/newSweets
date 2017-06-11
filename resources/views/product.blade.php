@extends('layouts.main')
@section('content')
<section class="section-box clearfix">
	<div class="breadcrumb">
		<ul>
			<li><a href="">Главная</a></li>
			<li><a href="">Подарки стадарт</a></li>
		</ul>
	</div>
	<div class="zoom-container">
		<img src="/img/presents/13.png" alt="">
	</div>
	<div class="section-left">
		<div class="section-left-header">
			<h2>Петривка</h2>
		</div>
		<div class="section-left-info">
			<div class="product-info">
				<span class="product-info-1">Вес:</span>
				<span class="product-info-2">550 г</span>
			</div>
			<div class="product-info">
				<span class="product-info-1">Артикул:</span>
				<span class="product-info-2">101-85</span>
			</div>
			<div class="product-info">
				<span class="product-info-1">Количество конфет:</span>
				<span class="product-info-2">40 шт</span>
			</div>
			<div class="product-price">
				<span class="price-new">68 грн</span> 
				<span class="price-old">74 грн</span>
			</div>
			<div class="purchase">
				<div>Выберите количество:</div>
				<div class="quentity-box">
					<input type="text" placeholder="1">
					<span><i class="fa fa-minus"></i></span>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<button class="quentity-btn">Добавить<br />в корзину</button>
			</div>
		</div>
	</div>
	<div class="section-right">
		<div class="section-right-header">
			<h2>Состав подарка</h2>
		</div>
		<table>
			<tr><th>Производитель</th><th>Название</th><th>Количество, шт</th></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
			<tr><td>Рошен</td><td>Шоколапки</td><td>5</td></tr>
		</table>
	</div>
</section>
@endsection