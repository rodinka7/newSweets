@extends('layouts.main')
@section('content')
<section class="section-box clearfix">
	<div class="breadcrumb">
		<ul>
			<li><a href="">Панель управления</a></li>
			<li><a href="">Создание товара</a></li>
		</ul>
	</div>
	<form action="/admin/create/product" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="zoom-container">
			Загрузить изображение:
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
					<input type="text" placeholder="Название товара" name="name">
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
							<input type="text" name="weight"> г
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
							<input type="text" name="articul">
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
							<input type="text" name="candies"> шт
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
							<input type="text" name="priceNew" placeholder="Введите новую цену"> грн
						</div>					
					</span> 
					@if ($errors->has('priceNew'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('priceNew') }}</strong>
	                    </span>
	                @endif
					<span class="price-old">					
						<div class="form-group">
							<input type="text" name="priceOld" placeholder="Введите старую цену"> грн
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
			<table>
				<tbody class="js-table">
					<tr><th>Производитель</th><th>Название</th><th>Количество, шт</th></tr>
					<tr class="js-row"><td><input type="text" class="js-producer"></td><td><input type="text" class="js-candy"></td><td><input type="text" class="js-number"></td></tr>
				</tbody>
			</table>
			<div class="purchase">
				<input type="hidden" class="js-arr" name="hidden">
				<button class="quentity-btn js-addToTable">Сохранить</button>
			</div>		
		</div>
	</form>
</section>
<script src="/js/admin.js"></script>
@endsection