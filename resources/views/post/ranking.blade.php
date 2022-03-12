@extends('layouts.app')

@section('content')

  <h3>よく検索される一覧</h3>

  <div class="search">
    <form action="{{ route('post.ranking') }}" method="GET">
      @csrf
      <div>
        <select name="category">
          <option value="">選択</option>
          <option value="1">第1章</option>
          <option value="2">第2章</option>
          <option value="3">第3章</option>
          <option value="4">第4章</option>
          <option value="5">第5章</option>
        </select>
      </div>
      <input type="text" name="keyword" value="@if (isset($keyword)) {{ $keyword }} @endif" placeholder="検索">
      <input type="submit" value="検索">
    </form>
  </div>

  <div>
    @if (!$posts->isEmpty())
      <table>
        @foreach ($posts as $post)
          <tr>
            <td><a href="{{ route('post.show',$post->id) }}">/</a></td>
            <td><img src="{{ asset('images'. $post->user->images) }}"></td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->post_title }}</td>
            <td>{{ $post->good_count }}</td>
            <td>{{ $post->created_at }}</td>
          </tr>
        @endforeach
      </table>
    @else
      <p>見つかりませんでした</p>
    @endif
  </div>

@endsection
