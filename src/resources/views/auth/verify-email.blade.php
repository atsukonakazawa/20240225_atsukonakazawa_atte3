@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="verify-email__content">
    <div class="verify-email__title">
        <h2>メールアドレス認証のお願いverify-email</h2>
    </div>
    <form class="verify-email__form" action="/email/verification-notification" method="post">
    @csrf
        <div class="verify-email__button-outer">
            <button type="submit">
                メールを再送信
            </button>
        </div>
    </form>
</div>
@endsection