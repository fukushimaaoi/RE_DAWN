@extends('layouts.app')

@section('content')

  <div class="user-container">
    <div class="user-profile">
      <p><td><img src="{{ asset('images'. $user->images) }}"></td></p>
      <p>{{$user->name}}</p>
      <p>{{$user->bio}}</p>
    </div>
    <div>
      <table class="user-table">
      @foreach ($user->posts as $post)
        <tr>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->post_title }}</td>
            <td>{{ $post->created_at }}</td>
        </tr>
      @endforeach
      </table>
    </div>
  </div>

@endsection
