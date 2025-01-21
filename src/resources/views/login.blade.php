@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('button')
<form action="/register" class="form-register" method="post">
    @csrf
    <button class="header__button-register" type="submit">register</button>
</form>
@endsection

@section('content')
<div class="login__content">
    <div class="login__heading">
        <h2>Login</h2>
    </div>
    <form class="form" action="/login" method="POST">
        @csrf
        <div class="form__group">
            <p>メールアドレス</p>
            <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            <div class="form__error">
                
            </div>
            <p>パスワード</p>
            <input type="password" name="password" placeholder="例:coachtech1106">
            <div class="form__error">
                
            </div>
        </div>
        <div class="form__button">
            <button type="'submit" class="form__button-login">Login</button>
        </div>
    </form>
</div>

@endsection