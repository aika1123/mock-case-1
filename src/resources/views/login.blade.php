@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

<div class="login-content">
    <div class="login-heading">
        <h2>ログイン</h2>
    </div>
    <form class="login-form">
    <div class="login-form__group">
        <div class="login-form__group-title">
            <span class="login-form__label--item">
                メールアドレス
            </span>
        </div>
    </div>
    <div class="login-form__group-content">
        <div class="login-form__input--text">
            <input type="text" name="email">
        </div>
    </div>
    <div class="login-form__group">
        <div class="login-form__group-title">
            <span class="login-form__label--item">
                パスワード
            </span>
        </div>
    </div>
    <div class="login-form__group-content">
        <div class="login-form__input--text">
            <input type="text" name="password">
        </div>
    </div>
    <div class="login-form__button">
        <button class="login-form__button-submit" type="submit">
            ログインする
        </button>
    </div>
    <div class="login-form__login">
        <a class="login-form__login--item" >
            会員登録はこちら
        </a>
    </div>
</form>
</div>
@endsection

