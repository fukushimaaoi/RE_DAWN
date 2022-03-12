<aside>
<div>
  <a href="{{ route('user.show') }}">・プロフィール編集</a>
  <a href="{{ route('post.myPost') }}">・My備忘録</a>
  <a href="{{ route('post.myFavorite') }}">・お気に入り投稿一覧</a>
  <a href="{{ route('post.ranking') }}">・よく検索される一覧</a>
  <a href="{{ route('user.notificationEdit') }}">・通知機能設定</a>
  <form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
  </form>
</div>
</aside>
