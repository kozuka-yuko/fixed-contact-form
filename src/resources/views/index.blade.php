@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form action="" class="form" method="">
        @csrf
        <div class="form__group">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
            <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}" />
            <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
            <label>
                <input type="radio" name="gender" value="male" checked>男性
            </label>
            <label>
                <input type="radio" name="gender" value="female">女性
            </label>
            <label>
                <input type="radio" name="gender" value="other">その他
            </label>
        </div>
        <div class="form__error">

        </div>
        <div class="form__group">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
            <input type="email" name="email" placeholder="例:test.example.com" value="{{ old('email') }}" />
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
            <input type="tel" class="phone-input" name="tel1" placeholder="例:080" value="{{ old('tel1')}}">
            -
            <input type="tel" class="phone-input" name="tel2" placeholder="1234" value="{{ old('tel2') }}" />
            -
            <input type="tel" class="phone-input" name="tel3" placeholder="5678" value="{{ old('tel3') }}" />
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <span class="form__label--item">建物名</span>
            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
        </div>
        <div class="form__group">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
            <select name="contact-type">
                <option disabled selected>選択してください</option>

                <option value=""></option>

            </select>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
            <input type="textarea" name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}" />
            <div class="form__error">

            </div>
        </div>
        <div class="contact-form__button">
            <button class="contact-form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection