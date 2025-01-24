@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')

<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>
    <form action="{{ route('store') }}" class="form" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="{{ $fullName }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="{{ $gender_display }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス
                    </th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $request->email }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号
                    </th>
                    <td class="confirm-table__text">
                        <input type="tel" name="tel" value="{{ $tel }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $request->address }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $request->building ?? '' }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="content" value="{{ $request->content }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容
                    </th>
                    <td class="confirm-table__text">
                        <input type="textarea" name="contact" value="{{ $request->detail }}" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button type="submit" class="confirm__button-submit">送信</button>
        </div>
    </form>
    <button class="confirm__button-correct" type="button" onclick="history.back()">修正</button>
</div>
@endsection