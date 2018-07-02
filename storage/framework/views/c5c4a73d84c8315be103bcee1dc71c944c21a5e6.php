<?php $__env->startSection('content'); ?>
<div class="container">
  <form method="DELETE" action="/delete" enctype="multipart/form-data">
    <label for="del">

  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('posts.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</label>

  <button type="submit" class="btn btn-primary">Delete</button>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
  
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>