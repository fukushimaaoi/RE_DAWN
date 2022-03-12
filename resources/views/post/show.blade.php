@extends('layouts.app')

@section('content')

  <div class="post-container">
    <table class="post-table">
        <tr>
            <td><img src="{{ asset('images'. $post->user->images) }}"></td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->post_title }}</td>
            <td>{{ $post->created_at }}</td>
        </tr>
    </table>
  </div>
  <div>
     <p>{{ $post->post }}</p>
  </div>

  <div class='comment-container'>
     <table class="comment-table">
     @foreach ($post->comments as $comment)
         <tr>
            <td><img src="{{ asset('images'. $comment->user->images) }}"></td>
            <td>{{ $comment->user->name }}</td>
            <td>{{ $comment->comment }}</td>
            <td>{{ $comment->created_at }}</td>
        </tr>
     @endforeach
    </table>
  </div>

  <form action="{{ route('post.comment', $post->id) }}" method="post">
    @csrf
    <textarea name="comment" placeholder="コメントを入力"></textarea>
    <input type="submit" value="コメント">
  </form>
@endsection
