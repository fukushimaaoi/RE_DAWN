@extends('layouts.app')

@section('content')

  <h3>お気に入り投稿一覧</h3>

  <div class="search">
    <form action="{{ route('post.myFavorite') }}" method="GET">
      @csrf
      <input type="text" name="keyword" placeholder="検索">
      <input type="submit" value="検索">
    </form>
  </div>

  <div class="post-container">
    @if (!$posts->isEmpty())
      <table class="post-table">
        @foreach ($posts as $post)
          <tr>
            <td><a href="{{ route('post.show',$post->post->id) }}">/</a></td>
            <td><img src="{{ asset('images'. $post->user->images) }}"></td>
            <td>{{ $post->post->user->name }}</td>
            <td>{{ $post->post->post_title }}</td>
            <td>{{ $post->post->created_at }}</td>
          </tr>
        @endforeach
      </table>
    @else
      <p>見つかりませんでした</p>
    @endif
  </div>

@endsection
