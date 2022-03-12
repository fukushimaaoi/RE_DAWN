<?php $__env->startSection('content'); ?>

  <h1>RE:DAWN</h1>

  <form action="<?php echo e(route('login')); ?>" method="post">
    <?php echo csrf_field(); ?>

    <label>メールアドレス</label>
    <input type="email" name="email">
    <label>パスワード</label>
    <input type="password" name="password">
    <input type="submit" value="ログイン">

  </form>

  <a href="<?php echo e(route('register')); ?>">新規ユーザーの方はこちら</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RE_DAWN\resources\views/auth/login.blade.php ENDPATH**/ ?>