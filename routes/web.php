<?php

// 認証周りのルーティング
Auth::routes();

// ログイン中のみ閲覧可能なページ
Route::group(['middleware' => 'auth'], function() {

    // ホーム画面
    Route::get('/','NoteController@home')
    ->name('home');

    // 投稿画面
    Route::get('post/create', 'PostController@create')
    ->name('post.create');

    // 投稿処理
    Route::post('post/store', 'PostController@store')
    ->name('post.store');

    // 投稿編集画面
    Route::get('post/edit/{id}', 'PostController@edit')
    ->name('post.edit');

    // 投稿編集処理
    Route::put('post/update/{id}', 'PostController@update')
    ->name('post.update');

    // 投稿削除
    Route::delete('post/destroy', 'PostController@destroy')
    ->name('post.destroy');

    // お気に入り処理
    Route::post('post/favorite/{post}', 'PostController@favorite')
    ->name('post.favorite');

    // 検索画面
    Route::get('post/search','UserController@search')
    ->name('post.search');

    // 自分の投稿一覧画面
    Route::get('post/my-post','PostController@myPost')
    ->name('post.myPost');

    // よく検索される一覧画面
    Route::get('post/ranking','UserController@ranking')
    ->name('post.ranking');

    // お気に入り一覧画面
    Route::get('post/my-favorite','UserController@myFavoritePost')
    ->name('post.myFavorite');

    // 投稿詳細画面
    Route::get('post/{post}', 'PostController@show')
    ->name('post.show');

    // コメント処理
    Route::post('post/comment/{post}', 'PostController@comment')
    ->name('post.comment');

    // 投稿者のプロフィール画面
    Route::get('user/{user}','UserController@author')
    ->name('user.author');

    // 自己プロフィール画面
    Route::get('profile','UserController@show')
    ->name('user.show');

    // 自己プロフィール編集処理
    Route::post('profile/update','UserController@update')
    ->name('user.update');

    // 通知設定画面
    Route::get('notification/edit','UserController@notificationEdit')
    ->name('user.notificationEdit');

    // 通知設定処理
    Route::post('notification/update','UserController@notificationUpdate')
    ->name('user.notificationUpdate');

    // パスワード編集画面
    Route::get('profile/password','UserController@passwordEdit')
    ->name('user.passwordEdit');

    // パスワード編集処理
    Route::post('profile/password/update','UserController@passwordUpdate')
    ->name('user.passwordUpdate');

 });
