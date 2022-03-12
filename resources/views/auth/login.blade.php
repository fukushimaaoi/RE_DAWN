@extends('layouts.logout')

@section('content')

<div class="title">
  <h1>RE:DAWN</h1>
</div>
<div class="continer">
  <form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form">
      <label>メールアドレス</label>
      <input type="email" name="email">
    </div>
    <div class="form">
      <label>パスワード</label>
      <input type="password" name="password">
    </div>
    <div class="form">
      <input type="submit" value="ログイン">
    </div>
  </form>
</div>
<a href="{{ route('register') }}">新規ユーザーの方はこちら</a>

@endsection
