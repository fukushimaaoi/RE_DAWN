@extends('layouts.app')

@section('content')

  <div class="search">
    <form action="{{ route('post.search') }}" method="GET">
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
      <input type="text" name="keyword" placeholder="検索">
      <input type="submit" value="検索">
    </form>
  </div>

  <div class="post-container">
    <table class="post-table">
      @foreach ($posts as $post)
        <tr>
            <td><a href="{{ route('post.show',$post->id) }}">/</a></td>
            <td><img src="{{ asset('images'. $post->user->images) }}"></td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->post_title }}</td>
            <td>{{ $post->created_at }}</td>
        </tr>
      @endforeach
    </table>
  </div>

@endsection
