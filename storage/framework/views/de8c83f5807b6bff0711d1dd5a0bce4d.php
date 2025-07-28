<?php $__env->startSection('content'); ?>
<!-- <h4><?php echo e(request()->path()); ?></h4> -->   
<h1>Welcome <b><?php echo e($name); ?></b> to the Home Page</h1>
  
    <h1 class="text-3xl font-bold underline">   
        This content is unique to the home page.
       
    </h1>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamid/gcom/resources/views/pages/home.blade.php ENDPATH**/ ?>