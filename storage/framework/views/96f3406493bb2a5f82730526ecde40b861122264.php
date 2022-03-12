<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>RE:DAWN</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
  <div id="app">
    <?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
      <?php echo $__env->yieldContent('content'); ?>
    </main>
    <?php echo $__env->make('layouts/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\RE_DAWN\resources\views/layouts/app.blade.php ENDPATH**/ ?>