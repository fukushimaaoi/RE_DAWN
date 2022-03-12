<aside>
<div>
  <a href="<?php echo e(route('user.show')); ?>">・プロフィール編集</a>
  <a href="<?php echo e(route('post.myPost')); ?>">・My備忘録</a>
  <a href="<?php echo e(route('post.myFavorite')); ?>">・お気に入り投稿一覧</a>
  <a href="<?php echo e(route('post.ranking')); ?>">・よく検索される一覧</a>
  <a href="<?php echo e(route('user.notificationEdit')); ?>">・通知機能設定</a>
  <form action="<?php echo e(route('logout')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="submit" value="ログアウト">
  </form>
</div>
</aside>
<?php /**PATH C:\xampp\htdocs\RE_DAWN\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>