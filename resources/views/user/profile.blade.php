@extends('layouts.app')

@section('content')

    <div class="myprofile">

        <form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label>ユーザー名</label>
            <input type="text" name="name" value="{{ $user->name }}">
            <label>メールアドレス</label>
            <input type="email" name="email" value="{{ $user->email }}">
            <label>自己紹介文</label>
            <input type="text" name="bio" value="{{ $user->bio }}">
            <label>アイコン画像</label>
            <img src="{{ asset('storage/'.$user->images) }}" alt="icon">
            <input type="file" name="image">
            <input type="submit" value="更新">
        </form>

    </div>
@endsection
