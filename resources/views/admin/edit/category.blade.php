@extends('layouts.main')
@section('content')
<div class="section-box clearfix">
	<div class="breadcrumb">
		<ul>
			<li><a href="">Панель управления</a></li>
			<li><a href="">Создание категории</a></li>
		</ul>
	</div>
	<form class="clearfix" action="/admin/edit/category/{{ $id }}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<section class="catalog admin-catalog">
			<div class="catalog-header">
				<h2>Новогодние подарки</h2>
			</div>
			<div class="catalog-content">
				<div class="catalog-filters">
					<div class="form-group">
						<input type="text" name="name" value="{{ $name }}">
					</div>
					@if ($errors->has('name'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('name') }}</strong>
	                    </span>
	                @endif
				</div>
				<div class="catalog-info clearfix">
					<div class="catalog-main-img">
						<img src="/img/presents/{{ $img }}" alt="">
						<div class="form-group">
							<input type="file" name="img" placeholder="Загрузите изображение для категории">
						</div>
						@if ($errors->has('img'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('img') }}</strong>
		                    </span>
		                @endif
		                <div class="purchase-admin">
		                	<button class="quentity-btn" type="submit">Сохранить категорию</button>		      
		                </div>
					</div>
					<div class="catalog-article">
						<div class="form-group">
							<textarea name="description" rows="15" placeholder="Описание категории">{{ $description }}</textarea>
						</div>	
						@if ($errors->has('description'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('description') }}</strong>
		                    </span>
		                @endif
					</div>
				</div>
			</div>
		</section>
	</form>
	<div class="catalog-products">
		<div class="catalog-weight">
			<label for="">
				Выберите вес:
				<select name="" id="">
					<option value="">все товары</option>
					<option value="">до 500 г</option>
					<option value="">до 1 кг</option>
					<option value="">до 1.5 кг</option>
				</select>
			</label>
			<label for="">
				Выберите стоимость:
				<select name="" id="">
					<option value="">все товары</option>
					<option value="">до 50 грн</option>
					<option value="">до 100 грн</option>
					<option value="">до 150 грн</option>
				</select>
			</label>
		</div>
		<div class="catalog-items">
			@foreach($products as $product)
			<div class="box-product">
				<div class="box-image">
					<a class="box-image-link" href="/admin/edit/product/{{ $product['id'] }}">
						<img class="box-img catalog-item" src="/img/presents/{{ $product['img'] }}" alt="">	
					</a>
				</div>
				<div class="caption">
					<div class="product-price">
						<span class="price-new">{{ $product['newprice'] }} грн</span> 
						<span class="price-old">{{ $product['oldprice'] }} грн</span>
					</div>
					<div class="product-name">
						<a href="/admin/edit/product/{{ $product['id'] }}">{{ $product['name'] }}</a>
					</div>
					<div class="product-desc">Новогодний подарок в элитной упаковке подойдет в качестве корпоративного угощения.</div>
				</div>
				<div class="product-cart">
					<button class="product-btn-red"><i class="fa fa-shopping-cart"></i></button>
					<button class="product-btn-black"><i class="fa fa-search-plus"></i></button>
				</div>
			</div>
			@endforeach
			<div class="box-product admin-product">
				<div class="admin-product-inner">
					<a href="/admin/create/product">Создать новый подарок</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection