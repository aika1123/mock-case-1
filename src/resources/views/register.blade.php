@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class="register-content">
    <div class="register-heading">
        <h2>会員登録</h2>
    </div>
    <form class="register-form" action="/register" method="post">
    @csrf
    <div class="register-form__group">
        <div class="register-form__group-title">
            <span class="register-form__label--item">
                ユーザー名
            </span>
        </div>
    </div>
    <div class="register-form__group-content">
        <div class="register-form__input--text">
            <input type="text" name="name" value="{{old('name') }}">
        </div>
    </div>
    <div class="register-form__group">
        <div class="register-form__group-title">
            <span class="register-form__label--item">
                メールアドレス
            </span>
        </div>
    </div>
    <div class="register-form__group-content">
        <div class="register-form__input--text">
            <input type="text" name="email" value="{{ old('email') }}">
        </div>
    </div>
    <div class="register-form__group">
        <div class="register-form__group-title">
            <span class="register-form__label--item">
                パスワード
            </span>
        </div>
    </div>
    <div class="register-form__group-content">
        <div class="register-form__input--text">
            <input type="text" name="password">
        </div>
    </div>
    <div class="register-form__group">
        <div class="register-form__group-title">
            <span class="register-form__label--item">
                確認用パスワード
            </span>
        </div>
    </div>
    <div class="register-form__group-content">
        <div class="register-form__input--text">
            <input type="text" name="confirmation-password">
        </div>
    </div>
    <div class="register-form__button">
        <button class="register-form__button-submit" type="submit">
            登録する
        </button>
    </div>
    <div class="register-form__login">
        <a class="register-form__login--item"  href="{{ route('login')}}">
            ログインはこちら
        </a>
    </div>
</form>
</div>
@endsection

