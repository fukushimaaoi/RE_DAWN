@extends('layouts.app')

@section('content')

  <form action="{{ route('post.store') }}" method="post">
    @csrf
    <div>
      <select name="category">
        <option value="1">第1章</option>
        <option value="2">第2章</option>
        <option value="3">第3章</option>
        <option value="4">第4章</option>
        <option value="5">第5章</option>
      </select>
    </div>
    <div>
      <input type="title" name="post_title" placeholder="タイトルを入力">
    </div>
    <div>
    <textarea name="post" placeholder="投稿内容を入力"></textarea>
    </div>
    <div>
    <input type="submit" value="投稿">
    </div>
  </form>

@endsection
