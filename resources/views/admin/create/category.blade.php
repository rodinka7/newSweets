@extends('layouts.main')
@section('content')
<div class="section-box clearfix">
	<div class="breadcrumb">
		<ul>
			<li><a href="">Панель управления</a></li>
			<li><a href="">Создание категории</a></li>
		</ul>
	</div>
	<form action="/admin/create/category" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<section class="catalog admin-catalog">
			<div class="catalog-header">
				<h2>Новогодние подарки</h2>
			</div>
			<div class="catalog-content">
				<div class="catalog-filters">
					<div class="form-group">
						<input type="text" name="name" placeholder="Название категории">
					</div>
					@if ($errors->has('name'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('name') }}</strong>
	                    </span>
	                @endif
				</div>
				<div class="catalog-info clearfix">
					<div class="catalog-main-img">
						Загрузите изображение для категории:
						<div class="form-group">
							<input type="file" name="img">
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
							<textarea name="description" rows="15" placeholder="Описание категории"></textarea>
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
</div>
@endsection