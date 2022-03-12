@extends('layouts.logout')

@section('content')

<div class="title">
  <h1>RE:DAWN</h1>
</div>
<div class="continer">
  <form action="{{ route('register') }}" method="post">
    @csrf
    <div class="form">
      <label>ユーザー名</label>
      <input type="text" name="name">
    </div>
    <div class="form">
      <label>メールアドレス</label>
      <input type="email" name="email">
    </div>
    <div class="form">
      <label>パスワード</label>
      <input type="password" name="password">
    </div>
    <div class="form">
      <label>パスワード確認</label>
      <input type="password_confirmation" name="password_confirmation">
    </div>
    <div class="form">
      <input type="submit" value="登録">
    </div>
  </form>
</div>
<a href="{{ route('login') }}">ログイン画面へ戻る</a>

@endsection
