@extends('layouts.app')

@section('content')

  <div class="user-container">
    <div class="user-profile">
      <h2>My備忘録</h2>
      <form action="{{ route('post.myPost')}}" method="get">
        <input type="search" name="keyword" placeholder="キーワードで検索" value="@if (isset($keyword)) {{ $keyword }} @endif">
        <input type="submit" value="検索">
      </form>
    </div>
    <div>
      <table class="user-table">
        @foreach ($posts as $post)
        <tr>
            <td><a href="{{ route('post.show',$post->id) }}">/</a></td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->post_title }}</td>
            <td>{{ $post->created_at }}</td>
        </tr>
      @endforeach
      </table>
    </div>
  </div>

@endsection
