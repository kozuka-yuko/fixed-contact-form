@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('button')
<a href="/register" class="register">register</a>
@endsection

@section('content')
<div class="login__content">
    <div class="login__heading">
        <h2>Login</h2>
    </div>
    <form class="form" action="/login" method="post">
        @csrf
        <div class="form__group">
            <p>メールアドレス</p>
            <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <p>パスワード</p>
            <input type="password" name="password" placeholder="例:coachtech1106">
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__button">
            <button type="'submit" class="form__button-login">Login</button>
        </div>
    </form>
</div>

@endsection