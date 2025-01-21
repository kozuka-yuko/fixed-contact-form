@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')

<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>
    <form action="" class="form" method="">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス
                    </th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号
                    </th>
                    <td class="confirm-table__text">
                        <input type="tel" name="tel" value="" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="contact-type" value="" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容
                    </th>
                    <td class="confirm-table__text">
                        <input type="textarea" name="contact" value="" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="confirm__button-submit">送信</button>
            <a href="" class="confirm__button-correct">修正</a>
        </div>

    </form>
</div>
@endsection