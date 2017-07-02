@extends('layouts.main')

@section('content')
<div class="section-box clearfix">
    <div class="breadcrumb">
        <ul>
            <li><a href="">Главная</a></li>
            <li><a href="">Регистрация</a></li>
        </ul>
    </div>
   <section class="content">
       <div class="catalog-header">
           <h2>Войдите на сайт или зарегистрируйтесь</h2>
       </div>
   </section>
   <section class="account-box">
       <h4>Впервые на сайте?</h4>
       <p>Быстрая и удобная регистрация</p>
       <ul>
           <li>Заказывайте товары онлайн</li>
           <li>Узнавайте о новинках</li>
           <li>Связывайтесь с нашими менеджерами на сайте</li>
       </ul>
        <button class="quentity-btn">Войти</button>
   </section>
   <section class="login-box">
       <h4>Регистрация</h4>
       <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
               <label for="input-name">Имя</label>
               <input type="text" id="input-name">
            </div>
            <div class="form-group">
               <label for="input-lastname">Фамилия</label>
               <input type="text" id="input-lastname">
            </div>
            <div class="form-group">
               <label for="input-email">Электронная почта</label>
               <input type="text" id="input-email">
            </div>
            <div class="form-group">
               <label for="input-password">Пароль</label>
               <input type="password" id="input-password">
            </div>
            <div class="form-group">
               <button type="submit" class="quentity-btn">Регистрация</button>
               <a href="" class="login-btn">Выйти</a>
            </div>
       </form>
   </section>
</div>

<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
