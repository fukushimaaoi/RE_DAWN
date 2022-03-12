<?php $__env->startSection('content'); ?>

  <div class="post-container">
    <table class="post-table">
        <tr>
            <td><img src="<?php echo e(asset('images'. $post->user->images)); ?>"></td>
            <td><?php echo e($post->user->name); ?></td>
            <td><?php echo e($post->post_title); ?></td>
            <td><?php echo e($post->created_at); ?></td>
        </tr>
    </table>
  </div>
  <div>
     <p><?php echo e($post->post); ?></p>
  </div>

  <div class='comment-container'>
     <table class="comment-table">
     <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td><img src="<?php echo e(asset('images'. $comment->user->images)); ?>"></td>
            <td><?php echo e($comment->user->name); ?></td>
            <td><?php echo e($comment->comment); ?></td>
            <td><?php echo e($comment->created_at); ?></td>
        </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </div>

  <form action="<?php echo e(route('post.comment', $post->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <textarea name="comment" placeholder="コメントを入力"></textarea>
    <input type="submit" value="コメント">
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RE_DAWN\resources\views/post/show.blade.php ENDPATH**/ ?>