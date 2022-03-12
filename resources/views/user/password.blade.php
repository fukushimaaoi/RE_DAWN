@extends('layouts.app')

@section('content')

  <div class="password-container">
    <form action="{{ route('user.passwordUpdate') }}" method="post">
      @csrf
      <label>新しいパスワード</label>
      <input type="password" name="password">
      <label>パスワード確認</label>
      <input type="password" name="password_confirmation">
      <input type="submit" value="更新">
    </form>
  </div>
@endsection
