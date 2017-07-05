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
		<img src="/img/presents/{{ $img }}" alt="">
		<input type="file" value="Добавить изображение" name="img">
		@if ($errors->has('img'))
            <span class="help-block">
                <strong>{{ $errors->first('img') }}</strong>
            </span>
        @endif
	</div>
	<div class="section-left">
		<div class="section-left-header">
			<h2>{{ $name }}</h2>
		</div>
		<div class="section-left-info">
			<div class="product-info">
				<span class="product-info-1">Вес:</span>
				<span class="product-info-2">{{ $weight }} г</span>
			</div>
			<div class="product-info">
				<span class="product-info-1">Артикул:</span>
				<span class="product-info-2">{{ $articul }}</span>
			</div>
			<div class="product-info">
				<span class="product-info-1">Количество конфет:</span>
				<span class="product-info-2">{{ $number }} шт</span>
			</div>
			<div class="product-price">
				<span class="price-new">{{ $newprice }} грн</span> 
				<span class="price-old">{{ $oldprice }} грн</span>
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
			@foreach ($candies as $candy)
			<tr><td>{{ $candy['producer'] }}</td><td>{{ $candy['name'] }}</td><td>{{ $candy['number'] }}</td></tr>
			@endforeach
		</table>
	</div>
</section>
@endsection