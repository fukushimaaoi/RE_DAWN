<?php $__env->startSection('content'); ?>

  <div class="search">
    <form action="<?php echo e(route('post.search')); ?>" method="GET">
       <?php echo csrf_field(); ?>
      <div>
        <select name="category">
          <option value="1">第1章</option>
          <option value="2">第2章</option>
          <option value="3">第3章</option>
          <option value="4">第4章</option>
          <option value="5">第5章</option>
        </select>
      </div>
      <input type="text" name="keyword" placeholder="検索">
      <input type="submit" value="検索">
    </form>
  </div>

  <div class="post-container">
    <table class="post-table">
      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><a href="<?php echo e(route('post.show',$post->id)); ?>">/</a></td>
            <td><img src="<?php echo e(asset('images'. $post->user->images)); ?>"></td>
            <td><?php echo e($post->user->name); ?></td>
            <td><?php echo e($post->post_title); ?></td>
            <td><?php echo e($post->created_at); ?></td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RE_DAWN\resources\views/home/index.blade.php ENDPATH**/ ?>