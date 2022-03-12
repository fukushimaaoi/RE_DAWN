@extends('layouts.app')

@section('content')

    <div class = post_update>
        <form action="{{ route('post.update',$post->id) }}" method="post">
            @method('PUT')
            @csrf
            <input type="title" name="post_title" value="{{ $post->post_title }}">
            <input type="text" name="post" value="{{ $post->post }}">
            <input type="submit" value="更新">
        </form>
    </div>

@endsection
