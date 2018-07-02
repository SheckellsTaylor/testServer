<?php $__env->startSection('authcontent'); ?>
<div class="container">
<h1> <?php echo e($authpost->title); ?></h1>

<?php echo e($authpost->body); ?>

<br>

<?php echo e($authpost->metades); ?>

<?php echo e($authpost->metaauth); ?>

<?php echo e($authpost->metakey); ?>



<img src="<?php echo e(asset('/storage/' . $authpost->image)); ?>" alt="is there an image"/>
<video src="<?php echo e(asset('/storage/' . $authpost->video)); ?>" alt="is there an video"/>

<?php echo e($authpost->video); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>