@extends('layouts.main')
@section('content')
<section class="section-box clearfix">
	<div class="breadcrumb">
		<ul>
			<li><a href="">Главная</a></li>
			<li><a href="">Подарки стадарт</a></li>
		</ul>
	</div>
	<form action="/admin/edit/product/{{ $id }}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="zoom-container">
			<img src="/img/presents/{{ $img }}" alt="">
			Изменить изображение:
			<input type="file" value="Добавить изображение" name="img">
			@if ($errors->has('img'))
	            <span class="help-block">
	                <strong>{{ $errors->first('img') }}</strong>
	            </span>
	        @endif
		</div>
		<div class="section-left">
			<div class="section-left-header">
				<div class="form-group">
					<input type="text" value="{{ $name }}" name="name">
				</div>
				@if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
			</div>
			<div class="section-left-info">
				<div class="product-info">
					<span class="product-info-1">Вес:</span>
					<span class="product-info-2">				
						<div class="form-group">
							<input type="text" value="{{ $weight }}" name="weight"> г
						</div>					
					</span>
				</div>
				@if ($errors->has('weight'))
                    <span class="help-block">
                        <strong>{{ $errors->first('weight') }}</strong>
                    </span>
                @endif
				<div class="product-info">
					<span class="product-info-1">Артикул:</span>
					<span class="product-info-2">				
						<div class="form-group">
							<input type="text" value="{{ $articul }}" name="articul">
						</div>					
					</span>
				</div>
				@if ($errors->has('articul'))
                    <span class="help-block">
                        <strong>{{ $errors->first('articul') }}</strong>
                    </span>
                @endif
				<div class="product-info">
					<span class="product-info-1">Количество конфет:</span>
					<span class="product-info-2">				
						<div class="form-group">
							<input type="text" value="{{ $number }}" name="candies"> шт
						</div>					
					</span>
				</div>
				@if ($errors->has('candies'))
                    <span class="help-block">
                        <strong>{{ $errors->first('candies') }}</strong>
                    </span>
                @endif
				<div class="product-price">
					<span class="price-new">					
						<div class="form-group">
							<input type="text" value="{{ $newprice }}" name="priceNew" placeholder="Введите новую цену"> грн
						</div>					
					</span> 
					@if ($errors->has('priceNew'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('priceNew') }}</strong>
	                    </span>
	                @endif
					<span class="price-old">					
						<div class="form-group">
							<input type="text" value="{{ $oldprice }}" name="priceOld" placeholder="Введите старую цену"> грн
						</div>					
					</span>
					@if ($errors->has('priceOld'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('priceOld') }}</strong>
	                    </span>
	                @endif
				</div>
				<div class="form-group create-label">
					<label>
						Выберите категорию:
						<select name="category" id="">
							<option value="1">Элитные подарки</option>
							<option value="2">Стандартые подарки</option>
						</select>
					</label>					
				</div>
				<div class="purchase">
					<button class="quentity-btn" type="submit">Сохранить</button>
				</div>
			</div>
		</div>
		<div class="section-right">
			<div class="section-right-header">
				<h2>Состав подарка</h2>
			</div>
			<div class="error-message">
				Чтобы удалить позицию, просто оставьте ее пустой.
			</div>		
			<table>
				<tbody class="js-table">
					<tr><th>Производитель</th><th>Название</th><th>Количество, шт</th></tr>
					@foreach ($candies as $candy)
					<tr class="js-row"><td><input type="text" value="{{ $candy['producer'] }}" class="js-producer"></td><td><input type="text" value="{{ $candy['name'] }}" class="js-candy"></td><td><input type="text" value="{{ $candy['number'] }}" class="js-number"></td></tr>
					@endforeach
				</tbody>
			</table>
			<div class="purchase">
				<input type="hidden" class="js-arrEdit" name="hidden">
				<button class="quentity-btn js-edit">Сохранить</button>
				<button class="quentity-btn js-add">Добавить</button>
			</div>		
		</div>
	</form>
</section>
<script src="/js/admin.js"></script>
@endsection