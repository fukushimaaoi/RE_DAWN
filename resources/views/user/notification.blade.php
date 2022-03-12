@extends('layouts.app')

@section('content')

  <div class="notification-container">
    <h1>通知機能設定</h1>

    <form action="{{ route('user.notificationUpdate') }}" method="POST">
      @csrf
      <p>あなたの投稿に対してコメントされた場合に通知することができます。</p>
      <p>通知を受け取りますか？</p>

      @if($user->notification->notification === 0)
      <p>
        <input type="radio" name="notification" value="0" checked="checked">はい
        <input type="radio" name="notification" value="1">いいえ
      </p>
      @else
      <p>
        <input type="radio" name="notification" value="0">はい
        <input type="radio" name="notification" value="1" checked="checked">いいえ
      </p>
      @endif

      <p>下記フォームに文字を入力すると、入力した文字に紐づく投稿がされた時に通知を受け取れます。</p>

        <input type="text" name="keyword1" value="{{ $user->notification->keyword1 }}">
        <input type="text" name="keyword2" value="{{ $user->notification->keyword2 }}">
        <input type="text" name="keyword3" value="{{ $user->notification->keyword3 }}">
        <input type="text" name="keyword4" value="{{ $user->notification->keyword4 }}">
        <input type="text" name="keyword5" value="{{ $user->notification->keyword5 }}">
        <input type="submit" value="更新">
    </form>
  </div>

@endsection
