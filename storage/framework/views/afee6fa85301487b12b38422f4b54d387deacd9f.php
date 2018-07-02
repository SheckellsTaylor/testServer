<?php $__env->startSection('authlogin'); ?>
<div class="container">


  <?php $__currentLoopData = $postsl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('auth.authpost', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>