@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('button')
<form action="/login" class="form-login" method="post">
    @csrf
    <button class="header__button-login" type="submit">login</button>
</form>
@endsection

@section('content')
<div class="register__content">
    <div class="register__heading">
        <h2>Register</h2>
    </div>
    <form class="form" action="" method="">
        @csrf
        <div class="form__group">
            <p>お名前</p>
            <input type="email" name="email" placeholder="例:山田  太郎" value="{{ old('name') }}" />
            <div class="form__error">
                
            </div>
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
            <button type="'submit" class="form__button-register">登録</button>
        </div>
    </form>
</div>

@endsection