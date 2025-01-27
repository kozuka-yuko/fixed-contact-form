@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('button')
    <a href="/login" class="login">login</a>
@endsection

@section('content')
<div class="register__content">
    <div class="register__heading">
        <h2 class="title">Register</h2>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__group">
            <p class="input">お名前</p>
            <input class="name" type="text" name="name" placeholder="例:山田  太郎" value="{{ old('name') }}" />
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
            <p class="input">メールアドレス</p>
            <input class="email" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <p class="input">パスワード</p>
            <input class="password" type="password" name="password" placeholder="例:coachtech1106">
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__button">
            <button type="'submit" class="form__button-register">登録</button>
        </div>
    </form>
</div>

@endsection