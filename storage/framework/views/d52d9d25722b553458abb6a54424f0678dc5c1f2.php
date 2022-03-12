<?php $__env->startSection('content'); ?>

    <div class = post_update>
        <form action="<?php echo e(route('post.update',$post->id)); ?>" method="post">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <input type="title" name="post_title" value="<?php echo e($post->post_title); ?>">
            <input type="text" name="post" value="<?php echo e($post->post); ?>">
            <input type="submit" value="更新">
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RE_DAWN\resources\views/post/edit.blade.php ENDPATH**/ ?>